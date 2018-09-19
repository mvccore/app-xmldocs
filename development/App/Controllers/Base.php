<?php

namespace App\Controllers;

class Base extends \MvcCore\Controller
{
	/** @var \App\Models\Translator|\MvcCore\Interfaces\IModel */
	protected static $translator;

	/** @var string TODO */
	protected $lang = 'cs';
	
	public function Init () {
		parent::Init();
		// TODO
		//$this->lang = $this->request->GetLang();
		$this->request->SetLang($this->lang);
		self::$translator = \App\Models\Translator::GetInstance();
	}
}
