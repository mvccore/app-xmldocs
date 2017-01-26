<?php

class App_Controllers_Front extends App_Controllers_Base
{
	/** @var App_Models_Document */
	protected $document;

	public function PreDispatch () {
		parent::PreDispatch();
		if ($this->viewEnabled) {
			$this->view->Lang = $this->lang;
			$this->_preDispatchSetUpBundles();
			$this->_preDispatchSetUpSeoProperties();
		}
	}
	private function _preDispatchSetUpBundles () {
		MvcCoreExt_ViewHelpers_Assets::SetGlobalOptions(
			(array) MvcCore_Config::GetSystem()->assets
		);
		$static = self::$staticPath;
		$this->view->Css('fixedHead')
			->AppendRendered($static . '/css/front/fonts.css')
			->AppendRendered($static . '/css/front/all.css');
		$this->view->Js('fixedHead')
			->Append($static . '/js/libs/class.min.js')
			->Append($static . '/js/libs/ajax.min.js')
			->Append($static . '/js/libs/Module.js');
		$this->view->Js('varFoot')
			->Append($static . '/js/Front.js');
	}
	private function _preDispatchSetUpSeoProperties () {
		$this->view->OgSiteName = 'MvcCore';
		$this->view->OgUrl = $this->request->RequestUrl;
		if ($this->document && $this->document->Id) {
			$this->document->OgImage = $this->request->DomainUrl . $this->document->OgImage;
		}
	}
}