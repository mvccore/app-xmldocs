<?php

namespace App\Controllers;

class Base extends \MvcCore\Controller
{
	/** @var \App\Models\Translator|\MvcCore\Interfaces\IModel */
	protected static $translator;

	/** @var string */
	protected $lang = NULL;

	/** @var string */
	protected $locale = NULL;
	
	public function Init () {
		parent::Init();
		$this->lang = $this->request->GetLang();
		$this->locale = $this->request->GetLocale();
		self::$translator = \App\Models\Translator::GetInstance();
	}

	public function PreDispatch() {
		parent::PreDispatch();
		if ($this->GetViewEnabled()) {
			$router = $this->router;
			$this->view->Localization = implode(
				$router::LANG_AND_LOCALE_SEPARATOR,
				[$this->lang, $this->locale]
			);
		}
	}
}
