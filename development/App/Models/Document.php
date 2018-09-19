<?php

namespace App\Models;

class Document extends XmlModel
{
	protected static $dataDir = '/Var/Documents';
	protected static $router = NULL;
	public static function GetDataPath() {
		return static::$dataDir;
	}
	public function GetUrl () {
		return self::getRouter()->Url('Front\Index:Index', ['path' => $this->Path]);
	}
	protected function & getRouter () {
		if (self::$router === NULL)
			self::$router = & \MvcCore\Application::GetInstance()->GetRouter();
		return self::$router;
	}
}
