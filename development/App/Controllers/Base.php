<?php

class App_Controllers_Base extends MvcCore_Controller
{
	/** @var App_Models_Translator */
	protected static $translator;

	/** @var string */
	protected $lang = '';
	
	public function Init () {
		parent::Init();
		$this->lang = $this->request->Lang;
		self::$translator = App_Models_Translator::GetInstance();
	}
}