<?php

namespace App\Controllers;

class Base extends \MvcCore\Controller
{
	/** @var \App\Models\Translator|\MvcCore\IModel */
	protected static $translator;

	/** @var \MvcCore\Ext\Routers\ILocalization|\MvcCore\Ext\Routers\IMedia */
	protected $router = NULL;

	/** @var string */
	protected $lang = NULL;

	/** @var string */
	protected $locale = NULL;
	
	public function Init () {
		parent::Init();
		$this->lang = $this->request->GetLang();
		$this->locale = $this->request->GetLocale();
		$this->mediaSiteVersion = $this->request->GetMediaSiteVersion();
		self::$translator = & \App\Models\Translator::GetInstance();
	}

	public function PreDispatch() {
		parent::PreDispatch();
		if ($this->GetViewEnabled()) {
			$this->view->Localization = $this->router->GetLocalization(TRUE);
			$this->view->MediaSiteVersion = $this->mediaSiteVersion;
		}
	}
}
