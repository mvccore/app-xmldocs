<?php

namespace App\Views\Helpers;

class Translate
{
	private $_controller;
	public function __construct (\MvcCore\View & $view) {
		$this->_controller = $view->Controller;
	}
	public function Translate ($key = '', $lang = '') {
		return $this->_controller->Translate($key, $lang);
	}
}