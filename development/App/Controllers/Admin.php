<?php

class App_Controllers_Admin extends App_Controllers_Base
{
	public function PreDispatch () {
		parent::PreDispatch();
		if ($this->viewEnabled) {
			$this->view->Lang = $this->lang;
			$this->_preDispatchSetUpBundles();
		}
	}
	private function _preDispatchSetUpBundles () {
		MvcCoreExt_ViewHelpers_Assets::SetGlobalOptions(
			(array) MvcCore_Config::GetSystem()->assets
		);
		$static = self::$staticPath;
		/*$this->view->Css('fixedHead')
			->AppendRendered($static . '/css/admin/all.css');*/
		$this->view->Js('fixedHead')
			->Append($static . '/js/libs/class.min.js')
			->Append($static . '/js/libs/ajax.min.js')
			->Append($static . '/js/libs/Module.js');
		$this->view->Js('varFoot')
			->Append($static . '/js/Admin.js');
	}
}