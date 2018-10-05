<?php

namespace App\Models;

class XmlEntity extends Base
{
	protected static $dataDir = NULL;
	protected static $allSchemes = [];
	protected $xml;
	protected $autoInit = FALSE;
	
	/**
	 * @return string
	 */
	public static function GetDataPath() {
		return static::$dataDir;
	}

	/**
	 * Get model instance by single xml file relative path from defined data path
	 * without .xml file extension.
	 * @param string $dataDirRelPathWithoutExt
	 * @return XmlEntity|NULL
	 */
	public static function GetByFilePath ($dataDirRelPathWithoutExt = '') {
		$dataDirRelPathWithoutExt = static::sanitizePath($dataDirRelPathWithoutExt);
		$xmlFullPath = \MvcCore\Application::GetInstance()->GetRequest()->GetAppRoot() . static::$dataDir;
		$fileFullPath = str_replace('\\', '/', $xmlFullPath . $dataDirRelPathWithoutExt . '.xml');
		if (file_exists($fileFullPath))
			return static::xmlLoadAndSetupModel($fileFullPath, $dataDirRelPathWithoutExt);
		return NULL;
    }
	
	/**
	 * Get array with all model instances by given directory relative path from 
	 * defined data path without subdirectories.
	 * @param string $dataDirRelPath 
	 * @return  XmlEntity[]
	 */
	public static function GetByDirPath ($dataDirRelPath = '', $includingParentLevelDoc = FALSE, $sort = ['Sequence' => 'asc']) {
		$result = [];
		$dataDirRelPath = static::sanitizePath($dataDirRelPath);
		$dataDirFullPath = \MvcCore\Application::GetInstance()->GetRequest()->GetAppRoot() . static::$dataDir;
		$targetDirFullPath = str_replace('\\', '/', $dataDirFullPath . $dataDirRelPath);
		// get parent level document with the same name as target directory if necessary
		$parentLevelDoc = NULL;
		if ($includingParentLevelDoc) {
			$parentLevelDocFullPath = $targetDirFullPath . '.xml';
			if (is_file($parentLevelDocFullPath))
				$parentLevelDoc = static::xmlLoadAndSetupModel(
					$parentLevelDocFullPath, $dataDirRelPath
				);
		}
		// complete items from target directory
		if (!is_dir($targetDirFullPath)) return $result;
		$di = new \DirectoryIterator($targetDirFullPath);
		$resultItems = [];
		foreach ($di as $item) {
			if ($item->isDir()) continue;
			if (strtolower($item->getExtension()) != 'xml') continue;
			$fileName = $item->getFilename();
			$fileFullPath = str_replace('\\', '/', $targetDirFullPath . '/' . $fileName);
			$resultItems[] = static::xmlLoadAndSetupModel(
				$fileFullPath, $dataDirRelPath . '/' . mb_substr($fileName, 0, mb_strlen($fileName) - 4)
			);
		}
		// sorting by sort property:
		if ($sort) {
			usort($resultItems, function ($a, $b) use ($sort) {
				return static::compareByProperies($a, $b, $sort, 0);
			});
		}
		// completing result
		$result = array_merge($parentLevelDoc ? [$parentLevelDoc] : [], $resultItems);
		return $result;
    }

	/**
	 * Compare asscendently booleans, integers, floats and strings.
	 * `TRUE` is before `FALSE`, `NULL` is after anything.
	 * @param XmlEntity $a 
	 * @param XmlEntity $b 
	 * @param string $sortProperty 
	 * @return int
	 */
	protected static function compareByProperies (XmlEntity $a, XmlEntity $b, $sort, $sortIndex) {
		$sortProperties = array_keys($sort);
		$sortProperty = $sortProperties[$sortIndex];
		$sortDir = $sort[$sortProperty];
		if (strtolower($sortDir) == 'asc') {
			$plus = 1;
			$minus = -1;
		} else {
			$plus = -1;
			$minus = 1;
		}
		$aVal = $a->{$sortProperty};
		$bVal = $b->{$sortProperty};
		$aPropType = gettype($aVal);
		$bPropType = gettype($bVal);
		$aPropType = $aPropType === 'NULL' || $aPropType === 'unknown type' ? '' : $aPropType;
		$bPropType = $bPropType === 'NULL' || $bPropType === 'unknown type' ? '' : $bPropType;
		if (!$aPropType && $bPropType) {
			return $plus;
		} else if ($aPropType && !$bPropType) {
			return $minus;
		} else if ($aPropType !== $bPropType) {
			return 0;
		}
		$propType = $aPropType;
		$r = 0;
		if ($propType === 'string') {
			$r = strcasecmp($aVal, $bVal);
		} else if ($propType == 'boolean') {
			$r = ($aVal === $bVal ? 0 : ($aVal ? -1 : 1));
		} else if ($propType == 'integer') {
			$r = $aVal > $bVal ? 1 : ($aVal < $bVal ? -1 : 0);
		} else if ($propType == 'double') {
			$aValStr = (string) $aVal;
			$bValStr = (string) $bVal;
			$aDotPos = mb_strrpos($aValStr, '.');
			$bDotPos = mb_strrpos($bValStr, '.');
			$aScale = $aDotPos !== FALSE ? mb_strlen($aValStr) - $aDotPos - 1 : 0;
			$bScale = $bDotPos !== FALSE ? mb_strlen($bValStr) - $bDotPos - 1 : 0;
			$scale = max($aScale, $bScale);
			$r = bccomp($aVal, $bVal, $scale);
		}
		if ($r === 0) {
			if ($sortIndex + 1 < count($sort)) 
				return static::compareByProperies($a, $b, $sort, $sortIndex + 1);
		}
		return $r === 1 ? $plus : ($r === -1 ? $minus : 0);
	}
	
	/**
	 * @param string $fileFullPath 
	 * @param string $path 
	 * @return XmlEntity|null
	 */
	protected static function xmlLoadAndSetupModel ($fileFullPath, $path) {
		$content = file_get_contents($fileFullPath);
		if ($content === FALSE) return NULL;
		$schemes = & static::xmlGetSchemes($fileFullPath, $content);
		$xml = static::xmlLoad($content, TRUE);
		if (!($xml instanceof \SimpleXMLElement)) return NULL;
		$result = new static();
		$result->Path = $path;
		$result->xmlSetUp($xml, $schemes);
		return $result;
	}
	
	/**
	 * @param string $fileFullPath 
	 * @param string $content
	 * @throws \RuntimeException 
	 * @return object[]
	 */
	protected static function & xmlGetSchemes (& $fileFullPath, & $content) {
		$result = [];
		$headEndPos = mb_strpos($content, '?>');
		$headEndPos = $headEndPos !== FALSE ? $headEndPos + 2 : 0;
		$firstNodeEndPos = mb_strpos($content, '>', $headEndPos);
		$firstNodeEndPos = $firstNodeEndPos !== FALSE ? $firstNodeEndPos + 1 : mb_strlen($content);
		$contentToMatch = trim(mb_substr($content, $headEndPos, $firstNodeEndPos - $headEndPos));
		preg_match_all("# xmlns\:([a-z0-9]*)=\"([^\"]*)\"#", $contentToMatch, $matches);
		if (count($matches) > 0 && count($matches[0]) > 0) {
			$nameSpaces = array_combine($matches[1], $matches[2]);
			$lastSlashPos = mb_strrpos($fileFullPath, '/');
			if ($lastSlashPos === FALSE) $lastSlashPos = mb_strlen($lastSlashPos);
			$xmlFileDirPath = rtrim(str_replace('\\', '/', mb_substr($fileFullPath, 0, $lastSlashPos)), '/');
			foreach ($nameSpaces as $namespaceName => $namespaceRelativePath) {
				$schemeFileFullPath = $xmlFileDirPath . '/' . $namespaceRelativePath;
				$schemeFileFullPath = static::removePathDotSegments($schemeFileFullPath);
				if (!isset(self::$allSchemes[$schemeFileFullPath])) {
					$scheme = (object) [
						'path'			=> $namespaceRelativePath,
						'fullPath'		=> $schemeFileFullPath,
						'name'			=> $namespaceName,
						'xml'			=> NULL,
						'types'			=> [],
					];
					$schemeXml = static::xmlLoad($schemeFileFullPath);
					if (!($schemeXml instanceof \SimpleXMLElement))
						throw new \RuntimeException(
							"[".get_called_class()."] No XML schema for file: '$fileFullPath' found in path: '$schemeFileFullPath'. "
							."Define namespace and scheme file in root node correctly: '<schemeName:rootNodeName xmlns:schemeName=\"../Path/To/Scheme.xsd\">'"
						);
					$rootNodeDescriptorBase = $schemeXml->children('xs', TRUE);
					$scheme->xml = $schemeXml;
					$rootNodeDescriptorBase->registerXPathNamespace('xs', 'http://www.w3.org/2001/XMLSchema');
					foreach ($rootNodeDescriptorBase->xpath('//xs:element[@type]') as $dataNode) {
						$attrs = $dataNode->attributes();
						$nodeName = trim((string)$attrs['name']);
						if (isset($attrs['type'])) {
							$nodeType = substr(trim((string)$attrs['type']), 3);
							$scheme->types[$nodeName] = $nodeType;
							if ($nodeType == 'html') {
								$content = str_replace(
									["<$namespaceName:$nodeName>",				"</$namespaceName:$nodeName>",], 
									["<$namespaceName:$nodeName><![CDATA[",	 "]]></$namespaceName:$nodeName>",], 
									$content
								);
							}
						}
					}
					static::$allSchemes[$schemeFileFullPath] = $scheme;
				}
				$result[$schemeFileFullPath] = self::$allSchemes[$schemeFileFullPath];
			}
		}
		return $result;
	}
	
	/**
	 * @param string $fullPathOrContent 
	 * @param bool $fromString 
	 * @throws \RuntimeException 
	 * @return \SimpleXMLElement|NULL
	 */
	protected static function & xmlLoad ($fullPathOrContent, $fromString = FALSE) {
		$null = NULL;
		libxml_use_internal_errors(true);
		libxml_clear_errors();
		if ($fromString) {
			$content = $fullPathOrContent;
		} else {
			$content = file_get_contents($fullPathOrContent);
			if ($content === FALSE) return $null;
		}
		$xml = simplexml_load_string($content);
		$errors = libxml_get_errors();
		libxml_clear_errors();
		if (count($errors) > 0) {
			$msgs = [];
			foreach ($errors as $e) {
				$msg = $e->message;
				$line = $e->line;
				$file = $fromString ? '[from string]' : $e->file;
				$column = $e->column;
				$msgs[] = "$msg (file: $file, line: $line, column: $column)";
			}
			throw new \RuntimeException (implode(PHP_EOL, $msgs));
		}
		if ($xml === FALSE) return $null;
		return $xml;
	}
	
	/**
	 * @param string $path 
	 * @return string
	 */
	protected static function sanitizePath ($path) {
		return str_replace(['../', './'], '', preg_replace("#[^a-zA-Z0-9_\-/\.]#", '', $path));
	}
	
	/**
	 * @param string $input 
	 * @return string
	 */
	protected static function removePathDotSegments ($input) {
		$output = '';
		while ($input !== '') {
			if (
				($prefix = substr($input, 0, 3)) == '../' ||
				($prefix = substr($input, 0, 2)) == './'
			   ) {
				$input = substr($input, strlen($prefix));
			} else if (
				($prefix = substr($input, 0, 3)) == '/./' ||
				($prefix = $input) == '/.'
			   ) {
				$input = '/' . substr($input, strlen($prefix));
			} else if (
				($prefix = substr($input, 0, 4)) == '/../' ||
				($prefix = $input) == '/..'
			   ) {
				$input = '/' . substr($input, strlen($prefix));
				$output = substr($output, 0, strrpos($output, '/'));
			} else if ($input == '.' || $input == '..') {
				$input = '';
			} else {
				$pos = strpos($input, '/');
				if ($pos === 0) $pos = strpos($input, '/', $pos+1);
				if ($pos === false) $pos = strlen($input);
				$output .= substr($input, 0, $pos);
				$input = (string) substr($input, $pos);
			}
		}
		return $output;
	}
	
	/**
	 * @param XmlEntity $context
	 * @param \SimpleXMLElement $xml 
	 * @param object[] $schemes 
	 */
	protected function xmlSetUp (\SimpleXMLElement & $xml, & $schemes) {
		$this->xml = $xml;
		foreach ($schemes as $scheme) {
			$types = $scheme->types;
			$name = $scheme->name;
			$xml->registerXPathNamespace($name, $scheme->path);
			foreach ($xml->children($name, TRUE) as $dataNode) {
				$nodeName = $dataNode->getName();
				$rawNodeValue = trim((string)$dataNode);
				$propertyName = \MvcCore\Tool::GetPascalCaseFromDashed($nodeName);
				$dataType = 'string';
				if (isset($types[$nodeName])) 
					$dataType = $types[$nodeName];
				static::setUpXmlValueByXsd($this, $rawNodeValue, $propertyName, $dataType);
			}
		}
	}
	
	/**
	 * @param XmlEntity $context
	 * @param string $rawNodeValue 
	 * @param string $propertyName 
	 * @param string $dataType 
	 */
	protected static function setUpXmlValueByXsd (& $context, $rawNodeValue, $propertyName, $dataType) {
		if ($dataType == 'html') {
			$context->{$propertyName} = str_replace(
				['%basePath'],
				[\MvcCore\Application::GetInstance()->GetRequest()->GetBasePath(),], 
				$rawNodeValue
			);
		} else {
			if (settype($rawNodeValue, $dataType)) 
				$context->{$propertyName} = $rawNodeValue;
		}
	}
	
	/**
	 * @param string $name 
	 * @return string
	 */
	protected function xmlGetNode ($name) {
		$nodes = $this->xml->xpath(static::$xmlNameSpace . ':' . $name); 
		if (count($nodes)) return (string) $nodes[0];
		return '';
	}
	
	/**
	 * @param string $nodeNamesPath 
	 * @return \SimpleXMLElement[]
	 */
	protected function xmlGetNodes ($nodeNamesPath) {
		$namespacedPath = ltrim(str_replace('/', '/'.static::$xmlNameSpace.':', '/' . trim($nodeNamesPath, '/')), '/');
		$nodes = $this->xml->xpath($namespacedPath);
		if (count($nodes)) return $nodes;
		return [];
	}
	
	/**
	 * @return string
	 */
	public function __toString() {
		return (string) $this->xml->asXML();
	}
	
	/**
	 * For serialize() method:
	 * @return string[]
	 */
	public function __sleep() {
		$this->xml = $this->xml->asXML();
		return ['xml'];
	}
}
