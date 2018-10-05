<?php

namespace App\Controllers;

use App\Models;

class Base extends \MvcCore\Controller
{
	/** @var \App\Models\Translator|\MvcCore\IModel */
	protected static $translator;

	/** @var \App\Models\Document|\MvcCore\IModel */
	protected $document;

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
			/** @var $this->router \MvcCore\Ext\Routers\ILocalization|\MvcCore\Ext\Routers\IMedia */
			$this->view->localization = $this->router->GetLocalization(TRUE);
			$this->view->mediaSiteVersion = $this->mediaSiteVersion;
		}
	}

	public static function PostRouteHandler () {
		// complete necessary global objects
		$app = & \MvcCore\Application::GetInstance();
		$router = & $app->GetRouter();
		$req = & $app->GetRequest();

		// try to complete document instance
		$documentPath = $req->HasParam('path')
			? $req->GetParam('path', '.*')
			: $req->GetPath();
		// line bellow is already inside xml model:
		//$documentPath = str_replace('..', '', preg_replace('#[^-a-zA-Z0-9/\.,]#', '', $documentPath));
		$documentPath = '/' . $req->GetLang() . (mb_strlen($documentPath) > 0 
			? '/' . $documentPath : 
			'');
		$document = Models\Document::GetBestMatchByFilePath($documentPath);

		// check if document has defined any controller or action
		$documentControllerPc = mb_strlen($document->Controller) > 0 ? $document->Controller : NULL;
		$documentActionPc = mb_strlen($document->Action) > 0 ? $document->Action : NULL;

		// if there is no document and no definition for controller and action, do nothing more
		if (!$document && !$documentControllerPc && !$documentActionPc) 
			return TRUE;
		
		// if there is $document and doesn't matter if $documentControllerPc or $documentActionPc,
		// try to complete controller class full name, create ctrl instance and set up document
		$controllerNamePc = NULL;
		if ($documentControllerPc) {
			// get controller name from document
			$controllerNamePc = $documentControllerPc;
		} else {
			// get controller name from routed route if any
			$currentRoute = $router->GetCurrentRoute();
			if ($currentRoute === NULL) return $app->DispatchException('No route for request', 404);
			$controllerNamePc = $currentRoute->GetController();
		}

		// complete full controller name
		$ctrlClassFullName = $app->CompleteControllerName($controllerNamePc);
		if (!class_exists($ctrlClassFullName)) 
			return $app->DispatchException("Controller class `$documentControllerPc` not found.", 404);
		
		// try to create controller
		$controller = NULL;
		try {
			$controller = $ctrlClassFullName::CreateInstance();
		} catch (\Exception $e) {
			return $app->DispatchException($e->getMessage(), 404);
		}

		// set up controller into application instance
		$app->SetController($controller);

		// if controller is completed successfully to set up document into it 
		// and if there is necessary to redefine routed target, redefine routed 
		// target
		if ($documentControllerPc || $documentActionPc) 
			$router->RedefineRoutedTarget($documentControllerPc, $documentActionPc);
		
		// set up document into controller
		$controller->document = $document;

		// return TRUE to continue dispatching
		return TRUE;
	}
}
