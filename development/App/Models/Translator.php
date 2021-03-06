<?php

namespace App\Models;

class Translator extends Base
{
	protected $stores = [];
	protected $autoInit = FALSE;
	protected static $dataDir = '/Var/Translations';
	protected static $requestLang = NULL;
	public function Translate ($key = '', $lang = '') {
		$result = $key;
		if (!$lang) {
			if (static::$requestLang === NULL) 
				static::$requestLang = \MvcCore\Application::GetInstance()->GetRequest()->GetLang();
			$lang = static::$requestLang;
		}
		$store = & $this->_getStore($lang);
		if (isset($store[$key])) {
			$result = $store[$key];
		}
		return $result;
	}
	private function & _getStore ($lang) {
		if (!isset($this->stores[$lang])) {
			$store = [];
			$fileFullPath = \MvcCore\Application::GetInstance()->GetRequest()->GetAppRoot() 
				. self::$dataDir . '/' . $lang . '.csv';
			if (!file_exists($fileFullPath)) throw new \Exception(
				"[".__CLASS__."] No translations defined. (path: '$fileFullPath')"
			);
			$rawCsv = file_get_contents($fileFullPath);
			$rawCsvRows = explode("\n", str_replace("\r\n", "\n", $rawCsv));
			foreach ($rawCsvRows as $rowKey => $rawCsvRow) {
				list($key, $value) = str_getcsv($rawCsvRow, ";", '');
				if (isset($store[$key])) {
					$rowKey += 1;
					throw new \Exception(
						"[".__CLASS__."] Translation key already defined. ".
						"(path: '$fileFullPath', row: '$rowKey', key: '$key')"
					);
				}
				$store[$key] = str_replace('\\n', "\n", $value);
			}
			$this->stores[$lang] = $store;
		}
		return $this->stores[$lang];
	}
}
