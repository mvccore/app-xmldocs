<?php

class App_Models_Document extends App_Models_XmlModel
{
	protected static $dataPath = '/Var/Documents';
	/**
	 * Return array of matched documents or empty array,
	 * input path has to be relative path from documents data directory,
	 * not necessairly started with slash, path is internaly corrected with shashes,
	 * but there can not be any dangerous characters like '../../..'
	 * and path is also automaticly transformed into special path form,
	 * matching ordering digits at target xml file beginning.
	 * @param string $path 
	 * @param bool   $firstMatchOnly
	 * @return App_Models_Document[]
	 */
	public static function GetByPath ($path = '', $firstMatchOnly = FALSE) {
		$result = array();
		$xmlFullPath = MvcCore::GetInstance()->GetRequest()->AppRoot . static::$dataPath;
		$path = rtrim($path);
		$correctedPath = is_dir($xmlFullPath . '/' . ltrim($path, '/')) ? rtrim($path, '/') . '/index' : $path;
		$lastSlashPos = strrpos($correctedPath, '/');
		if ($lastSlashPos === FALSE) {
			$pathToMatch = "([0-9]*)\-" . $correctedPath;
		} else {
			$xmlFullPath .= substr($correctedPath, 0, $lastSlashPos) . '/';
			$pathToMatch = "([0-9]*)\-" . substr($correctedPath, $lastSlashPos + 1);
		}
		if (!file_exists($xmlFullPath) && !is_dir($xmlFullPath)) return array();
		$di = new DirectoryIterator($xmlFullPath);
		foreach ($di as $item) {
			if ($item->isDir()) continue;
			if ($item->getExtension() != 'xml') continue;
			$fileName = $item->getFilename();
			$fileNameWithoutExt = preg_replace("#(.*)\.xml$#", "$1", $fileName);
			preg_match("#^$pathToMatch$#", $fileNameWithoutExt, $matches);
			if ($matches) {
				$fileFullPath = str_replace('\\', '/', rtrim($xmlFullPath, '/') . '/' . $fileName);
				$result[] = static::xmlLoadAndSetupModel($fileFullPath, '/' . $correctedPath);
				if ($firstMatchOnly) break;
			}
		}
		return $result;
    }
	public function GetUrl () {
		return $this->Path;
	}
}