<?php

namespace App\Models;

class Document extends XmlEntity
{
	protected static $dataDir = '/Var/Documents';

	protected static $router = NULL;

	public static function GetDataPath() {
		return static::$dataDir;
	}

	protected function & getRouter () {
		if (self::$router === NULL)
			self::$router = & \MvcCore\Application::GetInstance()->GetRouter();
		return self::$router;
	}

	protected function xmlSetUp (\SimpleXMLElement & $xml, & $schemes) {
		parent::xmlSetUp($xml, $schemes);
		if (!$this->NavigationTitle) $this->NavigationTitle = $this->Title;
		if (!$this->NavigationSubtitle) $this->NavigationSubtitle = $this->Description;
		$path = '/' . trim($this->Path, '/') . '/';
		$secondSlashPos = mb_strpos($path, '/', 1);
		$this->Path = mb_substr($path, $secondSlashPos + 1);
	}

	public static function & GetBestMatchByFilePath ($rawRequestedPath) {
		$result = NULL;
		$dataDirRelPathWithoutExt = ltrim(static::sanitizePath($rawRequestedPath), '/');
		$xmlFullPath = \MvcCore\Application::GetInstance()->GetRequest()->GetAppRoot() . static::$dataDir;
		while (TRUE) {
			$fileFullPath = str_replace('\\', '/', $xmlFullPath . '/' . $dataDirRelPathWithoutExt . '.xml');
			if (file_exists($fileFullPath)) {
				$result = static::xmlLoadAndSetupModel($fileFullPath, $dataDirRelPathWithoutExt);
				if ($result->Active) {
					break;
				} else {
					$result = NULL;
				}
			}
			if ($result === NULL) {
				$lastSlashPos = mb_strrpos($dataDirRelPathWithoutExt, '/');
				if ($lastSlashPos === FALSE) break;
				$dataDirRelPathWithoutExt = mb_substr($dataDirRelPathWithoutExt, 0, $lastSlashPos);
				$lastSlashPos = mb_strrpos($dataDirRelPathWithoutExt, '/');
				if ($lastSlashPos === FALSE) break;
			}
		}
		return $result;
	}

	public function GetUrl () {
		return self::getRouter()->Url('Front\Index:Index', ['path' => $this->Path]);
	}
}
