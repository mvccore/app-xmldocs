<?php

namespace App;

class Bootstrap
{
	public static function Init () {
		$app = \MvcCore\Application::GetInstance();

		// Patch core to use extended debug class:
		if (class_exists('\MvcCore\Ext\Debugs\Tracy')) {
			\MvcCore\Ext\Debugs\Tracy::$Editor = 'MSVS2017';
			$app->SetDebugClass('\MvcCore\Ext\Debugs\Tracy');
		}

		/*$app
			->SetRouterClass('\MvcCore\Ext\Routers\Lang')
			->SetDefaultControllerName('Front\Index');*/

		$app
			->SetRouterClass('\MvcCore\Ext\Routers\Media')
			->SetDefaultControllerName('Front\Index');

		// use this line only if you want to pack application without JS/CSS/fonts/images
		// inside package and you want to have all those files placed on hard drive manualy
		// you can use this variant in modes PHP_PRESERVE_PACKAGE, PHP_PRESERVE_HDD and PHP_STRICT_HDD
		//\MvcCore\Ext\Views\Helpers\Assets::SetAssetUrlCompletion(FALSE);

		/* * @var $router \MvcCore\Ext\Routers\Locale */
		$router = & \MvcCore\Router::GetInstance();
		/*$router	->SetStricModeBySession(TRUE)
				->SetRouteToDefaultIfNotMatch(TRUE);*/
		$router
			//->SetAllowedLangs('en', 'cs')
			//->SetFirstRequestStrictlyByUserAgent()
			->SetRoutes([
				'Admin\Index:Index'	=> '/admin',
				'Front\Index:Index'	=> [
					'match'				=> "#^/(?<path>[a-zA-Z0-9\-_]*)#",
					'reverse'			=> '/<path>',
				],
				/*'Front\Index:Index'	=> new \MvcCore\Ext\Routers\Localizations\Route([
					'controller'		=> 'Front\Index',
					'action'			=> 'Index',
					'match'				=> "#^/(?<path>[a-zA-Z0-9\-_]*)#",
					'reverse'			=> '/<path>',
				]),*/
			]);
	}
}
