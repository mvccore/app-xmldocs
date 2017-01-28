<?php

namespace App\Controllers;

class Admin extends Base
{
	public function PreDispatch () {
		parent::PreDispatch();
		if ($this->viewEnabled) {
			$this->view->Lang = $this->lang;
			$this->_preDispatchSetUpBundles();
		}
	}
	private function _preDispatchSetUpBundles () {
		\MvcCore\Ext\View\Helpers\Assets::SetGlobalOptions(
			(array) \MvcCore\Config::GetSystem()->assets
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