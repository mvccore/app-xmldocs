<?php

namespace App\Controllers;

class Front extends Base
{
	protected $layout = 'front';

	/** @var \App\Models\Document|\MvcCore\Interfaces\IModel */
	protected $document;

	public function PreDispatch () {
		parent::PreDispatch();
		if ($this->viewEnabled) {
			$this->view->Lang = $this->lang;
			$this->view->MediaSiteVersion = $this->request->GetMediaSiteVersion();
			$horizontalNav = new \App\Controllers\Front\Controls\HorizontalNavigation($this);
			$this->AddChildController($horizontalNav)->view->horizontalNav = $horizontalNav;
			$this->_preDispatchSetUpBundles();
			$this->_preDispatchSetUpSeoProperties();
		}
	}
	private function _preDispatchSetUpBundles () {
		\MvcCore\Ext\Views\Helpers\Assets::SetGlobalOptions(
			(array) \MvcCore\Config::GetSystem()->assets
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
		$this->view->OgUrl = $this->request->GetRequestUrl();
		if ($this->document && $this->document->Id) {
			$this->document->OgImage = $this->request->GetDomainUrl() . $this->document->OgImage;
		}
	}
}
