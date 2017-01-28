<?php

namespace App\Controllers;

class Base extends \MvcCore\Controller
{
	/** @var \App\Models\Translator */
	protected static $translator;

	/** @var string */
	protected $lang = '';
	
	public function Init () {
		parent::Init();
		$this->lang = $this->request->Lang;
		self::$translator = \App\Models\Translator::GetInstance();
	}
}