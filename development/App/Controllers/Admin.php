<?php

namespace App\Controllers;

class Admin extends Base
{
	protected $layout = 'admin';
	public function PreDispatch () {
		parent::PreDispatch();
		if ($this->viewEnabled) {
			$this->view->lang = $this->lang;
			$this->_preDispatchSetUpBundles();
		}
	}
	private function _preDispatchSetUpBundles () {
		\MvcCore\Ext\Views\Helpers\Assets::SetGlobalOptions(
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
