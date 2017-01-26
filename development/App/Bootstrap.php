<?php

class App_Bootstrap {
	public static function Init () {
		$app = MvcCore::GetInstance();

		// patch core to use extended debug class
		if (class_exists('MvcCoreExt_Tracy')) {
			MvcCoreExt_Tracy::$Editor = 'MSVS2015';
			$app->SetDebugClass('MvcCoreExt_Tracy');
		}

		$app
			->SetRouterClass(MvcCoreExt_LangRouter::class)
			->SetDefaultControllerName('Front_Index');

		// use this line only if you want to pack application without JS/CSS/fonts/images
		// inside package and you want to have all those files placed on hard drive manualy
		// you can use this variant in modes PHP_PRESERVE_PACKAGE, PHP_PRESERVE_HDD and PHP_STRICT_HDD
		//MvcCoreExt_ViewHelpers_Assets::SetAssetUrlCompletion(FALSE);

		// add another view helper namespace
		MvcCore_View::AddHelpersClassBases('MvcCoreExt_ViewHelpers');

		/** @var $router MvcCoreExt_LangRouter */
		$router = & MvcCore_Router::GetInstance();
		$router
			->SetAllowedLangs('en', 'cs')
			->SetFirstRequestStrictlyByUserAgent()
			->SetRoutes(array(
				'Admin_Index:Index'	=> array(
					'pattern'			=> "#^/admin#",
				),
				'Front_Index:Index'	=> new MvcCoreExt_LangRouter_Route(array(
					'name'				=> 'Front_Index:Index',
					'pattern'			=> "#^([a-zA-Z0-9/_\-]*)#",
					'reverse'			=> '{%path}',
				)),
			));
	}
}