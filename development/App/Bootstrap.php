<?php

namespace App;

class Bootstrap {
	public static function Init () {
		$app = \MvcCore::GetInstance();

		// patch core to use extended debug class
		if (class_exists('\MvcCore\Ext\Debug\Tracy')) {
			\MvcCore\Ext\Debug\Tracy::$Editor = 'MSVS2015';
			$app->SetDebugClass(\MvcCore\Ext\Debug\Tracy::class);
		}

		$app
			->SetRouterClass(\MvcCore\Ext\Router\Lang::class)
			->SetDefaultControllerName('Front\Index');

		// use this line only if you want to pack application without JS/CSS/fonts/images
		// inside package and you want to have all those files placed on hard drive manualy
		// you can use this variant in modes PHP_PRESERVE_PACKAGE, PHP_PRESERVE_HDD and PHP_STRICT_HDD
		//MvcCoreExt_ViewHelpers_Assets::SetAssetUrlCompletion(FALSE);

		/** @var $router \MvcCore\Ext\Router\Lang */
		$router = & \MvcCore\Router::GetInstance();
		$router
			->SetAllowedLangs('en', 'cs')
			->SetFirstRequestStrictlyByUserAgent()
			->SetRoutes(array(
				'Admin\Index:Index'	=> array(
					'pattern'			=> "#^/admin#",
				),
				'Front\Index:Index'	=> new \MvcCore\Ext\Router\Lang\Route(array(
					'controller'		=> 'Front\Index',
					'action'			=> 'Index',
					'pattern'			=> "#^([a-zA-Z0-9/_\-]*)#",
					'reverse'			=> '{%path}',
				)),
			));
	}
}