<?php
error_reporting(5);
class Packager_Php_Wrapper{/** @var string */const FS_MODE='PHP_STRICT_PACKAGE';/** @var string */public static$BasePath;/** @var int */public static$BasePathLength;/** @var mixed */public static$Context=NULL;/** @var array */public static$NewContextContents=array();/** @var array */public static$Contents=array();/** @var array */public static$Info=array(
'/vendor/mvccore/mvccore/src/MvcCore/Route.php'=>array('index'=>-1,'mtime'=>1485422587,'size'=>4958,'lines'=>array(0,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Tool.php'=>array('index'=>-1,'mtime'=>1485422587,'size'=>3742,'lines'=>array(1,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Response.php'=>array('index'=>-1,'mtime'=>1485422587,'size'=>4732,'lines'=>array(2,1)),
'/vendor/mvccore/ext-viewhelp-assets/src/MvcCoreExt/ViewHelpers/Assets.php'=>array('index'=>-1,'mtime'=>1485422599,'size'=>16019,'lines'=>array(3,1)),
'/App/Bootstrap.php'=>array('index'=>-1,'mtime'=>1485428285,'size'=>1326,'lines'=>array(4,1)),
'/App/Views/Helpers/Nl2Br.php'=>array('index'=>-1,'mtime'=>1459248920,'size'=>180,'lines'=>array(5,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Session.php'=>array('index'=>-1,'mtime'=>1485422587,'size'=>6533,'lines'=>array(6,1)),
'/App/Views/Helpers/Translate.php'=>array('index'=>-1,'mtime'=>1459250783,'size'=>286,'lines'=>array(7,1)),
'/vendor/mvccore/ext-viewhelp-linebreaks/src/MvcCoreExt/ViewHelpers/LineBreaks.php'=>array('index'=>-1,'mtime'=>1485422601,'size'=>9818,'lines'=>array(8,1)),
'/App/Views/Helpers/Facebook.php'=>array('index'=>-1,'mtime'=>1483673841,'size'=>852,'lines'=>array(9,1)),
'/App/Views/Helpers/Format.php'=>array('index'=>-1,'mtime'=>1485292843,'size'=>726,'lines'=>array(10,1)),
'/vendor/mvccore/ext-lang-router/src/MvcCoreExt/LangRouter/Route.php'=>array('index'=>-1,'mtime'=>1485422591,'size'=>2023,'lines'=>array(11,1)),
'/vendor/mvccore/ext-viewhelp-assets/src/MvcCoreExt/ViewHelpers/Js.php'=>array('index'=>-1,'mtime'=>1485422599,'size'=>17404,'lines'=>array(12,1)),
'/vendor/mvccore/ext-viewhelp-assets/src/MvcCoreExt/ViewHelpers/Css.php'=>array('index'=>-1,'mtime'=>1485422599,'size'=>19206,'lines'=>array(13,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Router.php'=>array('index'=>-1,'mtime'=>1485429385,'size'=>14722,'lines'=>array(14,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Request.php'=>array('index'=>-1,'mtime'=>1485422587,'size'=>13704,'lines'=>array(15,1)),
'/vendor/mvccore/mvccore/src/MvcCore.php'=>array('index'=>-1,'mtime'=>1485423571,'size'=>32459,'lines'=>array(16,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Config.php'=>array('index'=>-1,'mtime'=>1485422587,'size'=>11392,'lines'=>array(17,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Debug.php'=>array('index'=>-1,'mtime'=>1485422587,'size'=>10428,'lines'=>array(18,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Model.php'=>array('index'=>-1,'mtime'=>1485422587,'size'=>14519,'lines'=>array(19,1)),
'/vendor/mvccore/ext-lang-router/src/MvcCoreExt/LangRouter.php'=>array('index'=>-1,'mtime'=>1485428948,'size'=>22619,'lines'=>array(20,1)),
'/vendor/mvccore/mvccore/src/MvcCore/View.php'=>array('index'=>-1,'mtime'=>1485423546,'size'=>11334,'lines'=>array(21,1)),
'/vendor/mvccore/mvccore/src/MvcCore/Controller.php'=>array('index'=>-1,'mtime'=>1485423399,'size'=>11300,'lines'=>array(22,1)),
'/App/Models/Base.php'=>array('index'=>-1,'mtime'=>1485292843,'size'=>508,'lines'=>array(23,8)),
'/App/Controllers/Base.php'=>array('index'=>-1,'mtime'=>1485426606,'size'=>334,'lines'=>array(31,1)),
'/App/Models/XmlModel.php'=>array('index'=>-1,'mtime'=>1485345333,'size'=>6569,'lines'=>array(32,1)),
'/App/Models/Translator.php'=>array('index'=>-1,'mtime'=>1485157024,'size'=>1320,'lines'=>array(33,1)),
'/App/Controllers/Front.php'=>array('index'=>-1,'mtime'=>1485395806,'size'=>1216,'lines'=>array(34,1)),
'/App/Controllers/Admin.php'=>array('index'=>-1,'mtime'=>1485406920,'size'=>771,'lines'=>array(35,1)),
'/App/Models/Document.php'=>array('index'=>-1,'mtime'=>1485432608,'size'=>1972,'lines'=>array(36,1)),
'/App/Controllers/System.php'=>array('index'=>-1,'mtime'=>1485292843,'size'=>855,'lines'=>array(37,1)),
'/App/Controllers/Admin/Index.php'=>array('index'=>-1,'mtime'=>1485406887,'size'=>166,'lines'=>array(38,1)),
'/App/Controllers/Front/Index.php'=>array('index'=>-1,'mtime'=>1485429044,'size'=>1354,'lines'=>array(39,1)),
'/index.php'=>array('index'=>-1,'mtime'=>1485429281,'size'=>120,'lines'=>array(40,1)),
'/App/config.ini'=>array('index'=>0,'mtime'=>1485294303,'size'=>100,'store'=>'text'),
'/App/Views/Layouts/layout.phtml'=>array('index'=>1,'mtime'=>1485292843,'size'=>1052,'store'=>'template'),
'/App/Views/Scripts/admin/index/index.phtml'=>array('index'=>2,'mtime'=>1485406869,'size'=>76,'store'=>'template'),
'/App/Views/Scripts/front/index/error.phtml'=>array('index'=>3,'mtime'=>1485305177,'size'=>239,'store'=>'template'),
'/App/Views/Scripts/front/index/index.phtml'=>array('index'=>4,'mtime'=>1485406874,'size'=>76,'store'=>'template'),
'/static/fonts/myriadwebpro/bold.eot'=>array('index'=>5,'mtime'=>1485292843,'size'=>24703,'store'=>'binary'),
'/static/fonts/myriadwebpro/bold.svg'=>array('index'=>6,'mtime'=>1485292843,'size'=>60744,'store'=>'gzip'),
'/static/fonts/myriadwebpro/bold.ttf'=>array('index'=>7,'mtime'=>1485292843,'size'=>51776,'store'=>'binary'),
'/static/fonts/myriadwebpro/bold.woff'=>array('index'=>8,'mtime'=>1485292843,'size'=>28792,'store'=>'binary'),
'/static/fonts/myriadwebpro/regular.eot'=>array('index'=>9,'mtime'=>1485292843,'size'=>30474,'store'=>'binary'),
'/static/fonts/myriadwebpro/regular.svg'=>array('index'=>10,'mtime'=>1485292843,'size'=>77199,'store'=>'gzip'),
'/static/fonts/myriadwebpro/regular.ttf'=>array('index'=>11,'mtime'=>1485292843,'size'=>66376,'store'=>'binary'),
'/static/fonts/myriadwebpro/regular.woff'=>array('index'=>12,'mtime'=>1485292843,'size'=>33984,'store'=>'binary'),
'/static/img/favicon.ico'=>array('index'=>13,'mtime'=>1485292843,'size'=>7886,'store'=>'binary'),
'/static/img/mvccore-logo.png'=>array('index'=>14,'mtime'=>1485292843,'size'=>1028,'store'=>'binary'),
'/Var/Documents/cs/01-index.xml'=>array('index'=>15,'mtime'=>1485427500,'size'=>544,'store'=>'text'),
'/Var/Documents/cs/02-stahnout.xml'=>array('index'=>16,'mtime'=>1485427416,'size'=>519,'store'=>'text'),
'/Var/Documents/cs/03-rozsireni.xml'=>array('index'=>17,'mtime'=>1485347063,'size'=>541,'store'=>'text'),
'/Var/Documents/cs/04-dokumentace.xml'=>array('index'=>18,'mtime'=>1485345135,'size'=>531,'store'=>'text'),
'/Var/Documents/cs/zasuvne-moduly/01-index.xml'=>array('index'=>19,'mtime'=>1485429228,'size'=>541,'store'=>'text'),
'/Var/Documents/en/01-index.xml'=>array('index'=>20,'mtime'=>1485427530,'size'=>545,'store'=>'text'),
'/Var/Documents/en/02-download.xml'=>array('index'=>21,'mtime'=>1485345134,'size'=>517,'store'=>'text'),
'/Var/Documents/en/03-extensions.xml'=>array('index'=>22,'mtime'=>1485347056,'size'=>529,'store'=>'text'),
'/Var/Documents/en/04-documentation.xml'=>array('index'=>23,'mtime'=>1485345133,'size'=>535,'store'=>'text'),
'/Var/Documents.xsd'=>array('index'=>24,'mtime'=>1485295656,'size'=>968,'store'=>'text'),
'/Var/Tmp/minified_css_f84b07423ee5ce72f189dd9bde902cd8.css'=>array('index'=>25,'mtime'=>1485429392,'size'=>2375,'store'=>'gzip'),
'/Var/Tmp/minified_js_0a22c902c25a64e464ece951c7a3a78b.js'=>array('index'=>26,'mtime'=>1485429392,'size'=>14910,'store'=>'gzip'),
'/Var/Tmp/minified_js_1b7cee0f91c0592097ba380c17de88ca.js'=>array('index'=>27,'mtime'=>1485429392,'size'=>133,'store'=>'gzip'),
'/Var/Translations/cs.csv'=>array('index'=>28,'mtime'=>1485294372,'size'=>53,'store'=>'text'),
'/vendor/mvccore/mvccore/src/MvcCore/debug.html'=>array('index'=>29,'mtime'=>1485422587,'size'=>1407,'store'=>'text'),
);/** @var int */private static$_baseLinesCount=1834;/** @var bool */private static$_minifiedPhp=TRUE;/** @var array */private static$_contexts=array();/** @var bool */private static$_closureRendering=TRUE;/** @var array */private static$_currentFileSource=array();public static function PrintBacktrace(){echo '<pre>';var_dump(debug_backtrace());echo '</pre>';}public static function Init(){self::$BasePath=str_replace('\\','/',__DIR__);self::$BasePathLength=mb_strlen(self::$BasePath);if(version_compare(PHP_VERSION,'5.4.0',"<")){self::$_closureRendering=FALSE;}}private static function _includeFile($path,&$context,$onceOnly,$fn=''){$path=self::NormalizePath($path);if($onceOnly&&self::_getIsFileIncluded($path))return;if(!isset(self::$Info[$path])){self::Warning('',$path,$fn);return FALSE;}else{return self::_includeFileWithRendering($path,$context,$onceOnly);}}private static function _getIsFileIncluded($path){return(isset(self::$Info[$path])&&self::$Info[$path]['included'])?TRUE:FALSE;}private static function _includeFileWithRendering($path,&$context,$onceOnly){$store=self::$Info[$path]['store'];$closureRendering=$store=='template'&&self::$_closureRendering;$result=self::_renderFile($path,$context,$onceOnly,$closureRendering,$store);if($closureRendering){return$result;}else{echo $result;return 1;}}private static function _renderFile($path,&$context,$onceOnly,$closureRendering,$store){if($closureRendering){$result=self::_callTemplateClosure($path,$context);}else{$result=self::_evalFile($path,$context,$store);}if($onceOnly)self::_setFileIsIncluded($path);return$result;}private static function _callTemplateClosure($path,&$context){$templateClosure=self::_getFileContent($path,FALSE);if(!is_null($context)){$templateClosure=$templateClosure->bindTo($context,$context);}return$templateClosure();}private static function _evalFile($path,&$context,$store){if($store=='template'){$content=&self::_getStaticWithContext($path,$context,$store);}else{$content=self::_getFileContent($path,TRUE);}self::_addContext($context);ob_start();try{eval(' ?'.'>'.$content.'<'.'?php ');}catch(Exception$e){throw$e;}self::_removeContext();return trim(ob_get_clean());}private static function _getStaticWithContext($path,$context){if(is_null($context)){$templateClosure=self::_getFileContent($path,TRUE);$content=self::_getTemplateClosureBody($templateClosure);}else{$content=&self::_getStaticWithContextAlreadyProcessed($path);if(mb_strlen($content)===0){$templateClosure=self::_getFileContent($path,TRUE);$content=self::_getTemplateClosureBody($templateClosure);$content=preg_replace("#([^\\\])(\\\$this)([^a-zA-Z0-9_\x7f-\xff])#im","$1".__CLASS__."::\$Context$3",$content);$index=self::$Info[$path]['index'];self::$NewContextContents[$index]=$content;}}return$content;}private static function _getTemplateClosureBody(Closure$templateClosure){$reflection=new ReflectionFunction($templateClosure);$startLine=$reflection->getStartLine()-1;$endLine=$reflection->getEndLine();$length=$endLine-$startLine;self::_setUpCurrentFileSource();$functionSource=implode('',array_slice(self::$_currentFileSource,$startLine,$length));$firstCloseTagPos=mb_strpos($functionSource,'?>')+2;$lastOpenTagPos=mb_strrpos($functionSource,'<?php');$functionBodyLength=$lastOpenTagPos-$firstCloseTagPos;$functionSource=mb_substr($functionSource,$firstCloseTagPos,$functionBodyLength);return$functionSource;}private static function _setUpCurrentFileSource(){if(count(self::$_currentFileSource)===0){self::$_currentFileSource=file(__FILE__);}}private static function _getStaticWithContextAlreadyProcessed($path){$content='';if(isset(self::$Info[$path])){$index=self::$Info[$path]['index'];if(isset(self::$NewContextContents[$index])){$content=&self::$NewContextContents[$index];}}return$content;}private static function _addContext($context){self::$_contexts[]=$context;self::$Context=$context;}private static function _removeContext(){$contextsCount=count(self::$_contexts);$newContext=NULL;if($contextsCount>0){$contextsCount-=1;unset(self::$_contexts[$contextsCount]);self::$_contexts=array_values(self::$_contexts);if($contextsCount>0){$newContext=self::$_contexts[$contextsCount-1];}}self::$Context=$newContext;}private static function _setFileIsIncluded($path){if(isset(self::$Info[$path])){self::$Info[$path]['included']=1;}else{self::$Info[$path]=array('included'=>1);}}private static function _getFileContent($path,$decodeGzip=TRUE){if(!isset(self::$Info[$path]))return FALSE;$record=self::$Info[$path];$index=$record['index'];if($index==-1){return self::_getScript($record['lines']);}else{return self::_getStatic($record['store'],$index,$decodeGzip);}}private static function _getScript($lines){self::_setUpCurrentFileSource();$begin=self::$_baseLinesCount+$lines[0]-1;$end=$begin+$lines[1];$r="<?php\n";$g=self::$_minifiedPhp?"\n":"";for($i=$begin,$l=$end;$i<$l;$i+=1){$r.=$g.self::$_currentFileSource[$i];}$r.="\n?>";return$r;}private static function _getStatic($store,$index,$decodeGzip=TRUE){if($store=='template'){return self::$Contents[$index];}else if($store=='gzip'){return$decodeGzip?gzdecode(self::$Contents[$index]):self::$Contents[$index];}else if($store=='base64'){return base64_decode(self::$Contents[$index]);}else{return self::$Contents[$index];}}public static function NormalizePath($path){$path=str_replace('\\','/',$path);if(mb_strpos($path,'/./')!==FALSE){$path=str_replace('/./','/',$path);}if(mb_strpos($path,'/..')!==FALSE){while(true){$doubleDotPos=mb_strpos($path,"/..");if($doubleDotPos===FALSE){break;}else{$path1=mb_substr($path,0,$doubleDotPos);$path2=mb_substr($path,$doubleDotPos+3);$lastSlashPos=mb_strrpos($path1,'/');$path1=mb_substr($path1,0,$lastSlashPos);$path=$path1.$path2;}}}if(mb_strpos($path,self::$BasePath)===0){$path=mb_substr($path,self::$BasePathLength);}return$path;}public static function _isProtocolPath($path){return preg_match("#^([a-z]*)\://(.*)#",$path)?TRUE:FALSE;}public static function Warning($msg='',$path='',$fn=''){if(!$msg)$msg="$fn($path): failed to open stream: No such file or directory";trigger_error($msg,E_USER_WARNING);}public static function Readfile($filename,$use_include_path=FALSE,$context=NULL){if(self::_isProtocolPath($filename))return call_user_func_array('readfile',func_get_args());$path=self::NormalizePath($filename);$content=self::_getFileContent($path,FALSE);if($content===FALSE){self::Warning('',$filename,'readfile');return FALSE;}else{return self::_readfile($content,$path);}}private static function _readfile(&$content,$path){$store=self::$Info[$path]['store'];if($store=='gzip'){if(strpos($_SERVER['HTTP_ACCEPT_ENCODING'],'gzip')!==FALSE){header('Content-Encoding: gzip');}else{$content=gzdecode($content);}}echo $content;return self::$Info[$path]['size'];}public static function IsDir($filename){$path=self::NormalizePath($filename);$catched=FALSE;foreach(self::$Info as$pathKey=>&$item){if(strpos($pathKey,$path)===0){$catched=TRUE;break;}}return$catched;}public static function FileGetContents($filename,$use_include_path=FALSE,$context=NULL,$offset=0){if(self::_isProtocolPath($filename))return call_user_func_array('file_get_contents',func_get_args());$path=self::NormalizePath($filename);$content=self::_getFileContent($path,TRUE);if($content===FALSE){self::Warning('',$filename,'file_get_contents');return FALSE;}else{return$content;}}public static function ParseIniFile($filename,$process_sections=FALSE,$scanner_mode=INI_SCANNER_NORMAL){$path=self::NormalizePath($filename);$content=self::_getFileContent($path,TRUE);if($content===FALSE){self::Warning('',$filename,'parse_ini_file');return FALSE;}else{return parse_ini_string($content,$process_sections,$scanner_mode);}}public static function FileExists($filename){$path=self::NormalizePath($filename);return isset(self::$Info[$path]);}public static function Filemtime($filename){$path=self::NormalizePath($filename);if(!isset(self::$Info[$path])){self::Warning("filemtime(): stat failed for $filename");return FALSE;}else{return self::$Info[$path]['mtime'];}}public static function IncludeStandard($path,$context=NULL){return self::_includeFile($path,$context,FALSE,'include');}}Packager_Php_Wrapper::Init();class Packager_Php_Wrapper_DirectoryIterator extends DirectoryIterator{/** @var array */private$_files=array();/** @var int */private$_position=0;public function __construct($path){$relPath=rtrim(Packager_Php_Wrapper::NormalizePath($path),'/');$relPathLength=mb_strlen($relPath);$filesPaths=array();$pathRest="";foreach(Packager_Php_Wrapper::$Info as$relPathKey=>$info){if(mb_strpos($relPathKey,$relPath)===0){$pathRest=ltrim(mb_substr($relPathKey,$relPathLength),'/');if(mb_strpos($pathRest,'/')===FALSE){$filesPaths[]=$pathRest;}}}if(count($filesPaths)){asort($filesPaths);foreach($filesPaths as$pathRest){$this->_files[]=new Packager_Php_Wrapper_SplFileInfo($pathRest);}}else{Packager_Php_Wrapper::PrintBacktrace();throw new UnexpectedValueException("DirectoryIterator::__construct($path,$path): The system cannot find the file specified. (code: 2)");}}public function rewind(){$this->_position=0;}public function current(){return$this->_files[$this->_position];}public function key(){return$this->_position;}public function next(){$this->_position+=1;}public function valid(){return isset($this->_files[$this->_position]);}}class Packager_Php_Wrapper_SplFileInfo extends SplFileInfo{/** @var array */private$_info=array();/** @var string */private$_absPath='';/** @var string */private$_relPath='';/** @var string */private$_basePath='';/** @var string */private$_baseName='';/** @var string */private$_ext='';public function __construct($absolute_path){$absolute_path=str_replace('\\','/',$absolute_path);if(mb_strpos($absolute_path,'/./')!==FALSE){$absolute_path=str_replace('/./','/',$absolute_path);}if(mb_strpos($absolute_path,'/..')!==FALSE){while(true){$doubleDotPos=mb_strpos($absolute_path,"/..");if($doubleDotPos===FALSE){break;}else{$path1=mb_substr($absolute_path,0,$doubleDotPos);$path2=mb_substr($absolute_path,$doubleDotPos+3);$lastSlashPos=mb_strrpos($path1,'/');$path1=mb_substr($path1,0,$lastSlashPos);$absolute_path=$path1.$path2;}}}$this->_absPath=$absolute_path;$this->_relPath=$this->_absPath;if(mb_strpos($this->_absPath,Packager_Php_Wrapper::$BasePath)===0){$this->_relPath=mb_substr($this->_absPath,Packager_Php_Wrapper::$BasePathLength);}$this->_baseName=$this->_relPath;$lastSlashPos=mb_strrpos($this->_relPath,'/');if($lastSlashPos!==FALSE){$this->_baseName=mb_substr($this->_relPath,$lastSlashPos+1);}$this->_basePath=mb_substr($this->_absPath,0,mb_strlen($this->_absPath)-mb_strlen($this->_baseName));$this->_ext=$this->_baseName;$lastDotPos=mb_strrpos($this->_baseName,'.');if($lastDotPos!==FALSE){$this->_ext=mb_substr($this->_baseName,$lastDotPos+1);}if(isset(Packager_Php_Wrapper::$Info[$this->_relPath])){$this->_info=Packager_Php_Wrapper::$Info[$this->_relPath];}}public function getATime(){$this->_notImplemented(__METHOD__);}public function getBasename($suffix=NULL){if(!is_null($suffix)){$predictedPos=mb_strlen($this->_baseName)-mb_strlen($suffix);if(mb_strrpos($this->_baseName,$suffix)===$predictedPos){return mb_substr($this->_baseName,0,$predictedPos);}}return$this->_baseName;}public function getCTime(){$this->_notImplemented(__METHOD__);}public function getExtension(){return$this->_ext;}public function getFileInfo($class_name=NULL){return$this;}public function getFilename(){return$this->_baseName;}public function getGroup(){$this->_notImplemented(__METHOD__);}public function getInode(){$this->_notImplemented(__METHOD__);}public function getLinkTarget(){$this->_notImplemented(__METHOD__);}public function getMTime(){return$this->_info?$this->_info['mtime']:FALSE;}public function getOwner(){$this->_notImplemented(__METHOD__);}public function getPath(){return$this->_basePath;}public function getPathInfo($class_name=NULL){return$this;}public function getPathname(){return$this->_basePath;}public function getPerms(){return 0444;}public function getRealPath(){return$this->_absPath;}public function getSize(){if($this->_info){return$this->_info['size'];}else{trigger_error("[".__CLASS__."::".__METHOD__."] File doesn't exists.",E_WARNING);return FALSE;}}public function getType(){return'file';}public function isDir(){return FALSE;}public function isExecutable(){return FALSE;}public function isFile(){return TRUE;}public function isLink(){return FALSE;}public function isReadable(){return TRUE;}public function isWritable(){return FALSE;}public function setFileClass($class_name="SplFileObject"){$this->_notImplemented(__METHOD__);}public function setInfoClass($class_name="SplFileInfo"){$this->_notImplemented(__METHOD__);}public function openFile($open_mode="r",$use_include_path=false,$context=NULL){$this->_notImplemented(__METHOD__);}public function __toString(){return$this->_baseName;}private function _notImplemented($methodName){Packager_Php_Wrapper::PrintBacktrace();throw new RuntimeException(__CLASS__."::".$methodName."(): Not implemented.");}}
Packager_Php_Wrapper::$Contents[0]=<<<'PACKAGER_TEXT'
[environments]
development = 127.0.0.1

[assets]
cssMinify	= 1
cssJoin		= 1
jsMinify	= 1
jsJoin		= 1
PACKAGER_TEXT;
Packager_Php_Wrapper::$Contents[1]=function(){ ?>
<?php /** @var $this MvcCore_View */?><!DOCTYPE HTML><html
lang="en-US"><head><meta
charset="UTF-8" /><title><?php echo $this->Title;?></title>
<?php ?><meta
http-equiv="X-UA-Compatible" content="IE=edge" /><meta
name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes" /><meta
name="apple-mobile-web-app-capable" content="yes" /><link
rel="shortcut icon" href="static/img/favicon.ico" />
<?php echo $this->Css('fixedHead')->Render();?>
<?php echo $this->Js('fixedHead')->Render();?></head><body>
<!--[if lt IE 9]><div
class="filters"><![endif]-->
<!--[if (gt IE 8)|!(IE)]><!--><div
class="no-filters">
<!--<![endif]--><div
class="master-container"><div
class="content">
<?php echo $this->GetContent();?></div></div></div></body>
<?php echo $this->Js('varFoot')->Render();?></html>
<?php return 1;};
Packager_Php_Wrapper::$Contents[2]=function(){ ?>
<?php /** @var $this MvcCore_View */?><h1><?php echo $this->Title;?></h1>
<?php return 1;};
Packager_Php_Wrapper::$Contents[3]=function(){ ?>
<?php /** @var $this MvcCore_View */?><h1>Oooops!</h1>
<?php $requestParams=(object)$this->Controller->GetRequest()->Params;?><p>Error <?php echo $requestParams->code;?> - <?php echo $this->Nl2Br($requestParams->message);?></p>
<?php return 1;};
Packager_Php_Wrapper::$Contents[4]=function(){ ?>
<?php /** @var $this MvcCore_View */?><h1><?php echo $this->Title;?></h1>
<?php return 1;};
Packager_Php_Wrapper::$Contents[5]=<<<'PACKAGER_BIN'
`  �_        �   LP/  �J  P        �       M�~�                   M y r i a d   W e b   P r o    B o l d    V e r s i o n   0 0 1 . 0 1 4   & M y r i a d   W e b   P r o   B o l d     BSGP                 �8 ;� ;� 2���xZW�h[qJx"c�r,g,E�&�C��ľ������@�)ب�Y���PjlP�6k]M�17 ��2�k=���es<\܋Q���V�͆��3����q�b���U�L�

� `�B�iq`+EZ�`�V����b��	��@t��U2ƎƯB�1G��H/��c�^G�0|��鋍����"i����T��P���	<w$ec�����x����"km,��u�k;�MxZ����� B�� �&o�NF� � {�-Uo/��G��1���N.x����Η�C�g��$"Hd�d�'"N�5���C:QÅKh@�L:�l4��0*NW�9+�29�)m:MΛ��I̩,\�8��+h{��k���ʾ-\IF�"��G�<[ı��Zџ[*��Y��X!�7��}�0H�RFRf
�!�;Ff�����E�K������
��kpSlX$�E�i)Ť�D��L�o�����}r�0�0��9�Jrf �_�_S�^�(�F\���1Xe��!��a�%��NLܒ 96�K��F��ٴ�ܪ=�EK<^�4b�OԖw),=AB[4���,4�$?�.
`,a��zw�ѝ��W&<�O�e�9a��	z��܌c�`_8ɉ�/��,Ιܴ���E�џ>n��e��F����tlF�EM�������
��S�
`U䅡
�x�`)��҅�w��U��Յy�^+y�Y��mO@N52��~�`U�+�)j�=CM`�"�|c]� ��%�s"$@3�ta��iZ����0z�>�0"�2_�X�2������+��N| �
��Cm��1�������ԕ
�T
t�3��+
�^-2
Ap�I;�L�M�"�PC@g�JY�Y���\p���1�䲊�c��D-F��UHz>|Ċ��:�j�����o�)&@�2�z�Tz(��HB��p���\n1iųj ��
l��az���~��t=�R%�1�T�ǋU-p�kE�#0$��)gi�;�Dv"��/{�Q5�����Ԧ����>5��-*��ǮiA]N@�ȱDV)U��Z����j}�UlC0�a�X�R���;2X�g�����΀؂J�Fh�HA5�3_U�����`p��i�3ZC�
6�Z��/h���M�dʌ/�6*]��
!EB0�.$���9��c
�jYwQ��i��(�.Lh@c��꩔L�<�I@c�� 'W�G�� ���l����.�_}$�xx#�5{�R�?�s�8P� s(y$�$(����Q�ŀ�w7�z��
�m�T��}��}����?;�_�`�U�^u\鿃��C�F��2d�&�2ܟn��TH�>��*��E�3�Ҁ�l��um���%�`C�ʈ@��dEV�^���dB����p�p|5K����Q3G�⣽͍(������V�Hrl�;��u;	�(c� h��H�Fv�hJn��2eM��Y�E
��j ������h���+�IÙʏ�������_C:i?�C8��d1�����{�5O΁ց���M�B�O��+�z�5gJ�F�4�2�t���R�(��Y�0	�1N1���j���ͣ���V�-!�jj:�������&�mN���s`�S��}�Vj6�K�
��k��ڳ&����N���&U�	v+C祸W �s�!f�j�`{��-[pR���c�'�@����Z��k�5T���T��8��M !��I��(�J��{���Ȋ�1�1��k���)�����7��cәA~�B�P?�9�~�.{�!�����[E4�'NJK�hA�#�L�p�)ETB�q�3e3#���K�s�b�v(p~�S�el�&Jқ��;}g�,�\t`-S���P�ҙ9�F	���0�R���	�%g��0�D�UQ@����CCK4�p�ѥ0^�VF�m��HR�e>��Ϻ�B��M����JO:M��P�w�Q�_.��az1e����a@�`��T����U�ڵ�`խe�Nmz2�$����<4�Ɛ��ʶ��zZ$��O�K��jǒ�2A��� }}`Ӭ�8�,���H#� ���B�NM4��~U�J▓W�b���)���������/��*��>Ln����qVQÑ�F��Ma_收-�h5'H�Yp�4�)!��[?����w෬C���/<��r+#�
Ԝ)���'�Ǔ�؇��Hf���hf�!6�|���ě��.(����������جI��N��u�v��D�
�_*"u@!��l#3�%/e'ՐC8g�YH,2�S;*HK�k��HY��5$u�D�e���V�H#ӑX5�i\! m�=�����RB�ڛ�!�j��%G�l�X�u�ҩ�Ad�&^�Q(cE��p��aQK�@!�"�3'��;q�EE��ǸUa��R��2�1=_N�0E*�6t8ET` ���7�5/p����a(u�6���2����R��soMa� X>o�����
3��'��A�fn�?I?�-c�4Aĝ~����	�NF�,�����9��t�R�=��V�;�)�,n��tS�-�x�]NU�]z��U�z��;
�Z�)Ty�R�L�F�(���I�Jʾ4�QZQQdH�)�;��L�����h�� �R�m3Ҙ��_Ff5�H�>�2���֡���x�� �S�9��?m�j���v�M�B�e@����ߢ�&���[*#OFѤz�GTr�	4C�Sٽ�}R5�O.��0��.ڠ��c�lU�R�7N�ȃ�D���Җ�R��e;5���e㏽ʛN
���%��;���K�� ~2
@��[@>8�l xhe�P��a!

��v�^��U%�&]�H6�@�
�J�p�HT�!��@vꨗ(v�7z��7L$@[��#�9����� ���#�>�?B
����}�P(#�z�;V_�ѣĹ��>��nU�$#��_�N&рmGG��H�l�ZO��K <���-��\�#|\�0u�%�����̉q�!	H�X86p[��Pv�~��@�ˋ����3c+�m(��'��Iw �g!�]LAjf֮E'�|s�������ì��Ob��x1`���kn�� 
`}�B�/f흡���M�E\�k�RoH+C$~�(�������#I�O�����e�5�{���D�wt�1M|����\��5�X���Q��|�d�M�
�q�(g�%��t0:;[Wv�qZ���q]��8VF]4CjFAy�P�#�7�:�mm>�H��P��c�Uv���؞8\ҋa�B�����a��?��c�Q�F���, �MM��~�)�J��+�$k�d�u#���>n83��Q����JUKl5���ȿn� Op�!m�06��n3\��:�[z˖�=.�LTđ!b.����XK� ��`�L+c��.�@N�� e�&T*=���Yi��^b;Q��%
g)R?D~��<-�v,TS���!��1�u�F4
�8]���
k�&��5ꁌ��*,����EZ���Ã��|
�E�
0
������E���H�ھE@�R)
�P@��! m��~�J�ݣl���_mu�/s{Sd[��Cl��@p�-��C�s[Kh%��h���+�(nA<Aڲ|�hx�5L]�	�K�y`I�?�����Pf���f��[��۬��jo�����\~��/�l��H�[��g%�N鬇��oT}�NQ��G�-���vs���}�go�^Blrq�r���m�6m���-f7ߝ&�܎�}jɯ��V�Q�V�u�X<���e-�0�1Fm��dֳt�ow3�:6���r�t�-�-�S�Zv��DYۂK���Ы�P!���z�v'q0Ɖ Q{qd���v�
MT�-d�~�er�Ɏ_��aPA����n��e��o��t�C'�ט�Q�8�^����+ͤc�5��E���W0�шF�q�m(!�mv�j�p��D�&������X�:Ѯee6Q�ǿ�CTCbj&Zq�d��D9��h
�"��}����� ����Z	A���ap�?�+ �\8w[eЊ�l!�u�"-�Cݹ��>^G���f:���sS���mT���.�ĕyw��ux�H3�������3�VEほ������*"���!@�K���xB�s�
x�p��R�{g~!9�,�m�h�n �"pq��;���U̒q�x\A�0��U� Y��� &y�ˌ'��%e��T;��O���T<:&0,�|�YN�A �a�d�B��o-eA���D ��)eMxUv{1^�3���`tH(�,��7���]�6��]-+��M�Li ��;w�q��	�7�'��=dJM�NmG�B`���}�̔�$�0�r`�&w(��s��G���f-S��S�n��-)j�H�N-��}���8�>Cͺ���Y*����Gs�4�Y慆q�?@
b<�T7��Y�(��|��JW�@uT��UqѮ�����i��j�v�
� �:j��J�
�!��	�x�i��e��o�����J�n!�OT{*�	�Xc����#���i�$�O0�c�3���/㟧aN�y�f��܈�` 
�C�a6Tƙl$Ӄ��z��0��3��������jpo, N�j�-�8�����,!<BgQ���J�r��<J&��ڸlrY��4��9vj
E!�-�&Tp!ډ�ʮΤt�mf�t�J	Q$C^1d�l�j0(��^o�m�^�U����������y�1�����԰	%j�E����u�T�*�:&e�=H��I���c�IH��MFa�)%L i���I6�Ç�Up_2�L����F',�B�h��OU}������@�E���H��Y7�h��a��`N�)�O�3��O[�oi0���v�5�u$~�
���X�8��)�l���B�`�H�h�Z�DFZ�uh�8*m���o��fJ�lt�-l�|X�fqy�k��ם�Q��jNOR�rB���eh��I�H����͘R��&�b@�sV��9"�J�3X}ڸ��qܩnlVX�2>��'���`	ؘb`�f�b�K�?M(�AlŬf� j��@��p�)�� L�5X�t�\��s�  �O���|a��
����8轹�"��KEK�H�o�:5]hrٯ&��|h�$C�z�^Q��f�,+T�n��ӫ�UN4��ú�X�� F�q�>��`[*����f�jKk�|�=��A2�Bi���x8�z���F��-|}e1�R�$�����X9�x#yXR�p�����!-1q��uX������Z��[/�ҥ,X�� k�^�e���j�{��V�V1`�Ù����O.������eWͳj�0 �ܳ#v��`��C��&�⬢����V�k�����,>�J~�0ʅ�)�������dޜ��@�T.� �m.�@.�bc����	��G�8�[v�:1�R��Jq���X:D#&(�
���X����H����#�z�
=����jA�G8A@Q|C�x�"�:=�Yu_N���ġ�Gi�S�̩���n�ǉ���jJJ�W��k��:[G�M$����ͻ~ԑ&��'�(�G k�?�P��y�Iۣ����V��$y���ccڥ\rc��FyR�옿�^�����j�
��z9'ipŵr-���!|vf%�1C*3���-[�4��&�����	uǦX.�E)��xJ[�m�i��}���p�r��_��
u���I�G>�a�ۛ�X ֢�d�o��4I�����C+K�ö��̂�0m��2~,id���� ��Șբ��%me��Fb�ǓE��yM��Kؗ�4�ix�<�'���v��07�)�,�KPF��-Xdh�0	�)�4P��,VOsqBIh,Uح�\���=�6�u��$�l��%AE��sC9��`-!��#�	��?��~[.�pa"�i)@ٲ�/����tb��Wf�!�x>�]:7����ߞ�C�o"7#�0îY'=ա�����'³SCl���{ ��K�)�����F�b����AQ��~�k	h�K
3+*b����a�!����ja:�8Q��"��4I���ٕ4J�^G�0-�5���k6��k����7R�Ʒzj�r� ,�i���
'J�B�k^T���� �3�$0��gH��$.z]O<R89P��p�n��%B҅��H�<9���;~����I�<�t�3����  	����o��� �--�\O�� ��ˮo�D&0T��]@��@O�ӲP�AT�̭8�	��ɮ7nt�Ko����xI��t���ג�nK�‖��F���%=��j\�*�c�Tì�"'5��gd��|E���dy�{��K&�����ݸ&��ܽf�^�BR�	��A/M\����z1�DhB؜���9��-�ρ&z)�[J~��r2������� K�b�N!h�Y]�dx̠3 ���_%j^�7��_z�E��)❁ ~�
�3a6>:�p�ϊ@��N���#@�GC-�(j����D��t�;�r����Zq�!�H �G ����S�J�n�~�jj�D�ٯ�n���ʔ���Pv3P��Wd��t1\f�㐰 ֶ���ki�p�M��/%�
�+tu�鑶j�x&��\9n�I�#A��@�N����",z�8�=�W*ws	�>����'�9��$�%�S���i�3�@��|��eb�JB�X�vk���Ǵ�����;�!���-2{h�k�fN{�zߒ_NW���7,^m`��@F�Z��_uMP귉,A���	QR�B&T	N���%RCl#���ڠݑe,��-���Ҥ�,GR-�2�`���Y<��/�;�-C�B�b!�\Ov|�b�$���H
E�1�� ���<-l�#� `�93��kȬ�p�x�E@�������-뱯`$U�Ε �D�},�hCJ֌Y�+����
\���f���4!Os@"�(�{p���*0Z���vS�$��N��-ё��Z�U�j�
m�1�8�R�gY�k����` �� ]���()�E79��g���Xя��_���cH��o���� k�y� �)�������� =�YX�R������P��]�����Q��cgE���;O����<�?���f���pR�w�iжDAhj�&�E���o���r��ꢩņ��@���ˍwE�2s�Q���$e�;0%�a�y�4�L�i�U�U������5~
�	�f�s����qi�n�|rs�F(x��L(m�I���5���v�8��g�L����,��$	�i�**��Z4�F�'P�6�iR�lK'j��J]q��W��+1�|�	���!w<��)�4��0�����E@*�/+����������ˈ�85��u���&�ƛ�kH�2�2���d=���kH- s8�(� WZ �h{`T�D�} R�F����@X�����L'i#�`>�����!_�y�$����^� �a��?��JM���T�9�7AS?H_#����"sK
��N!d8���#����PI��@�*�
$� ��FE��NIB��q3�Qd`���V�ꔄ2/�B�k���ű&�1��b�4�Ut: �I4�����V-���
�=6�Fj�"��iQ���qNMtn@�к�+�_ 
�������$ܖq�z�7�j�[���9������4�)�+l�S�4M���U��)W�#�h6��S�&�a��j��<\Fmo�#�����C.0D�
q�_��Va���	�s�9msyF*V�Nn0/dC/gmшd8��F�鄊�K
o���B�	*�~J�h�LPt0��8���9�3��S���XR���h2N�%.����"�(�o�]/%����L�\�L�aI���
��\�s�u*�D^X�Eͬ �M)X��)U~����d2H$���Г#�>0K}`%�:s��:��*�<��e��s���eʘ���rD���X����)��,� ~�!Y�E@t�6ݴT�c`c��ȏ��礣��;�l7����i'+QQRH�F���D!]�
q[����PЇc	�O���y?:�#[�ْ���
i�H��� �e�rq�K,0T? ���`�"
��#:��G�p3�pv-�k�T�\$�h�ze�Mcl�
�E�O���`M��Cڠz�N�v�F�Є
P����S�:� �	N��]�����B�UG����0H��!\"o�+e�7��]QP���ʢV�Gh�B.h�L�w0r��	��q���d�,�P�z�Gr�bh�%s�Q�"J�� ��6��M.mp, ���-5�ъ�lCC�7�nb�6��t�=��	!�g?�H����a��e� Z��B�x�F_�,�Jg )Uz^�t�"Q�.v�ЄB����/�� A.Wr/�"hG���~���٭8�{DJ���A���ܠ�.�d���=lxA�v�j�ƏO(�����7*��Z������E|����M���a�dc2�'襄f;�+2X���0�������:�UR���M����j��V�Ȇ5kW?T%
8YHRUG�ć㈖��5/��a��bY�����4�m\�f2�7d���MB��s{��Dօ��J�]U�K��hx�ֹ�f�A3�ҙDC�OǬ>��,J(���d������u��ӝ �i��)�H����� p�4&$��lda��Gb�\�dCS�Wx��<;�*�.�\)ȡD!P�-fV��tv�W�X��^�:7��hgly�W2C5'�)U�e��/)�`��j~�س��S�T�g��{�9�^~�N]O��s����ya�[�f%oM�~� ��+)%g|$S�y�:��y霖�
�`�F�%�h0`�|X�v�I�ʿm&�_����.�mUƒ�\�,�i��     (
�KF�+o�eR�I��T��@�olĖ�~T*�Ud�`F�M=��&��Ɋ]hܚ�YP��UZs�����(�oYV����9�-C=@V=�,�q�T�ځק3�rb���Ӽ�kȹU�_	`�L���r5b`�Bp�o��m���<q�-v8���U�J�2���*��fa���5A�/��$�NC:�^���Py��LE�CEN�d�_�@�����#�	���°o�S=l�+��R������-��,H�p�}��PK�GˊF�vh��_�h�P:4d!e�(�tx�T�{�R[�,��,O�p�V	�RV�{�������y��{�52ex2^^y��	
�"*2V1o�:�%�P�G �C�)�Ql��uh�����G�*�X��HH�\�|�XS�l�d�.Z��#MsJI�d��:�s"(�?���fM �R��B�����$oJ]�f�Oaa����G3�/I� >gp>�pS�.T)�n�ܲ�ڃP����G6�w6̤ȷƖos�Y����kk�6�1t�Դ��չ�_���z��|�(_v��.�-�|h
�Q�D���+R��1}�b"�?V6Q/���6)al�
6�4�t[!��v:�=��[��늱ncp�l"\U�+MB�	��ȡ*f!}AF��J�c�m�"C�%W('�3x��3mdJFH�v�>HϢUG�]��Y�T�ᄽʰ�Gf��_9u�Z$J�5lq*�@r�mg0,訰$۔H���<4.���������9��`��N��8z䜝n 3�h��`�H���{b��
�מ�50��J�ǖ��8
.QP�k�d����|�c`r���'֊{t�� ���]�ڲ`r
 �	"DjJ|�����v*d��{����3.�t��O�5A�"e�~��£�G�������N��]��#�ң�PX8��
��2.t��4<�d�y҈)�����aB!���Ҧ
)2'�1�w� R��T`o��H�!�W`���҄9[�7�b���*�^��[�Ș�hu�&�
e����OW@6Y�	�:bW���&Ø>|����ujL�z��)�ݢ6��N6�M@��"ϥo0�9��&��?kB�%���T+��nU)�q
���+�	�����k���B���@[�������?���DIJ�����6���
�HTK�O�ǒO��p��"FUP��� <LY��#yF�o���.����~:�JL��c���kb0�����sR_��|b� �%�F�� ��jzFb�m�dZ	]�ש����`d�f��a�Afd(�E%��2$N�'7�Ѻ�Q�����hLr���^�JM��v--�@2�9�D ���u�$%i:�+�P����@_ŷ c�}Ł�Ney�Hl��j^nmPI�`�$�q�7�嫐�>*��,^J5�I�d�n
n`x�����y) FC�n~�b@�|� ��DL2��x�D�z x��Q�t����n�
)���F]tN����&c_/R�y0����IJs������`���)m�ײ������B��]<�@$$D�5�L�@�t�΁�YV�4�M��i�|����MB8k��#n�� �2�T�+C�	�t�.������
�?�����0]��u8����ЀG'Պ��Q%(�%��OL�YyQ?�m3j��@��Xp���_Ā��� -{��K� �:��#�>	�Q��]����V. Î���J���Io�x^����=BB���!��M!ه�Թ�1���O�sM���DsB��;��^��v��C�Åx_B��+)�A�� aӎ��!)	P=�����E��,��v`#7���ވ&��$"�P�
��dG"m֣"��(7Ԗ]_��`KV���b�8��N���]�V%b̄�3uY����߆b3��Lr����Z��/�@0�n���#6!ղ����!�-���R�A�oݒ���6�	���V�A�����d� �E+�"dɋ6"WBH R.���2@�	?�k��ܤ�N���;v�7D9�g��%�ѣk��WOx}��=k����Y�./��륰-&�JH��F��Dp
��cԀ:��9y0Ɩ�2��}!��wVݚ��מ��*x1�m��'���1�n�B� o�����!�WRn�H�X9llΓ3$
�y��K84k3�+.�ƒG8��Ǯ�n�t�[����0)�:34Uep������pk�b4�X_�&
�����,mՌ��Qrͧ����̣�PRX=�a�
z<MQ`
}�-"$6��h�q���:��\��F�Ɛ��L�
�x�%j��	�߭.3')��x~��G�?
@"U�`P�D�RV��X�$%
��x�v��h�]k�#H��j.������ЂC����W����S.��ԁAr�y���;��e�H�,�SŚ�����G3���jNf:&���3����!<��B�h28X��vc��1�҄�F&$|���o
'�;8�6�r,
����d�#��N�P�<H0��^`�b�[��!�f�/���䖐�Y�q�wO}C��ѫ8Ҕ�rE+[2�O@��9ovK'$���{�Ȑ)��e}8�'vƹ-���D�a�Z7m*`FJ���y���ݣ3, [aH�R��X#�8�� ��$�"�jd�q^F�	o��xۄ��.b�`�f1���W�ón `L{��7&�|Ba'�I��YO|~4�pr^~~
�G�W����� Xu#�S	4dՀܒ[G��Ї��V6+S�:���*�q`��d���ւ��$Z�#�@D�@@X�`�l>0������">��۸h"	޿sa͡|�硋b�Km�2K</�6m���c������
��n�)&'�TC=P)����գ��H�7�pW�WG����2i�N"i���d�	�F~����A�d����Ј?
ٍcPL������k��$ݛ?b=�;�h#ʡ}�.hp����u��aG\M�@6CR4�~nZ��z8m	��R������5" �N3�|!��#�����썼�P(��PǼ�(���o�����9�8=�ҫ�|�VDD�"�Kπ��T�|�Pg�d1sF��c2<��hO�|r3�����<5 Ř�P"���T��t��m r�K�r��v��P!G*��Yョ���Ƒ��[/���Xv=�ae�76�4��3���$��߿��3
�p�l$	�<d���@�`C�H�g��x���!��7�Ҳ'��a��cu��г�bJ�1�\����K���Ų2UB��-�~�(�Π|�-h9�(�V��+���2y�LҸ��^���b��U|n�oc.M�b�0ڇ�#Y��L�(�>�I��^,�^�%��a�&�Į�#3LaX*�Y��P6�{�o�� a��L(u�/D?���&H����n�eZyh4dݣK,�)Zy�T�^�$yZ�:h�ٖ�1���"���=�("8ol���ݦ)W�b�v�?��\��Q��;
��%��ĨbUo�
9`��^n�P�NC�ܾ��@��j��^�%�sSS�[G�l~�ƲF2�Գ-�)��5EᏇW#H7��������P9��M��|%�@*~(�9�(9Cʂ�~������C����z��f
���\�h� �$@-!ch�* $S@�t��֢���
�
'����73ȷ��8��\���r�ȋ�DRP�r89�A�I�N ZQ ʋ0�2��\���^b�Zl����f�e�,A�p:,�\�hyX(�[��А���YqZc��1�[G�:�~�������� *N�BXx�����(Q?0��-�U�5 P���u),2�Od0)c���X�{�_�����f��P��㸾�)ޜ���x#���'b�|��t�'���}��ِ�8���&ŋ���K�/`�%\�Zs��~KѠ�ܴhk��A�<��{B��G�L)�[baM1-1���������]��"���39�&��3�]��h���
��?���x��x���
��b>��e0_(F�]}t�^zW���|f���JoY��o�%4>w��7���y�s�8�m��Fˁ�7�V:�,�,�a�+�Ԡ�������$����x��j	R�1���+�@d�1���R�+
@�6�8M��M�U����]׿j,Obi��L�h�86���R��`�͍����{	� ���O�̓mu�уx�{��	)��mD�@�	�큓ߺ��!g�\w�
�aŻf�C�x-N$2�X�ӯQfp��yś{��r[lˉ�����k;`Ƅ1L&�%Xy"3���J����*��v>��G��X�
��6�q�)�
)l�$EM �3�J�TB��4�! ȶ���J�i,2��2W�q�*��H���UKh�`���20T|]H�,�,n�1#9��r��FiF�
Nd��Q�393�L�R@�ݗ>�jAP64J@5G����3�Y���ٶՏ����r����6�5���p/(6"�>���Y���4��0�<��,ܮY�1AcR�85��*H)L<�D6�5(��q*$
�(���ڔ��4��p������˛&��j�)����:�2��^2}'OgQ҉!.��]��tH���ͭ���U�7{gvëD��a'�X���	��4p�ig�0��dۘ $_������58�UÎ�V"�����y2��L�O'X:*y?L��@��$�gG���;h]�����{Y��`*�����~L�$��x-SF�I���h[$,c��P���l�*�S���:�qRL��\�>Vբ�/��r�@
PACKAGER_BIN;
Packager_Php_Wrapper::$Contents[6]=<<<'PACKAGER_GZIP'
�      �}i���q�w�
hh�'f�>$6Ӳ�mQ��{�3��6�K�@ 9>~��}#��. 5�3���>��;�j��ƙ���o5t���|���{f��gݛ���^_~��{Ͼ�����G����Տ~�w?�I�f�������/��Gݳ�ŋ_��x�������ig��/~�Ϻg�i����x�����o��/����O�z���矼y!7�����0k���^=��x��7����3���gr�^O/_��^~��/��?��ן��>�����������_����_��/�� �8}���o������2S�3_������u��_|>����������̙P�u/�|���In�1=�^�n�Pݳ����7��Y���_��"��g�o��/���eT�|�J��{��|�z�|緦�ٳ���<��?��/�����9��+�����?��
������r�2/[�b=&ᇮOx���\5�7z
��e䨭� \�[��A�&l��fl[!�p<4`!�'�ǢT�>�T�ip���v�6���n :�>��	?��RI6g�ɳ�� V1VY���a3�������iNot��
�H�&��"��q`�"�h�����
��}��8�܌'b�ɕ���$��k(j/;��'������g�Q�`�B���C��2<��6��+��Pa�ܽ��~����W�Cb�-+Ld��0�R��F
B!催�p������gۦ"�!�$�cOQ�S��^����h����k;6P��$�6� ���p�Fj��7(�{�4����_\O�[D\�C���Y6�P����b�Q�A�xik��ꂅh�"s�,#Z���V���]UE�1+��!��)�Zt��E�%qy�
_t��:����q�ށ�q)Rr�6����U�������w�ܲc�gݨ��(p�"�-�,����ϢB7��rqe�im����� �,
#	e-�C�Bҹ�'�@���q�~��"3� ��g�a"<� �m9���Ḿ@��	����	0vv����#��.K�݋-�ΥW
ĒN��Y02D��UvgE� �LC��H�W�:��/��FYM�Y:e@OH)�dʅ��	����B䗚:�����)����I�F%(x���J��(o�4!iX���7��?��d�	���#K��J�*f��$KF,ϊ��\��QM=ByG~Mj��� d�P�#�mD��IB�!�n7�d0��\�25�D���)N��`jȾ��i��I���q����� m	��D�E��2]!� ��(H�m'U&k��ٚ�X��C�YIaeaLLj2g}?m�L_��O�c�lUJ'y3�0yn%���8�)D�@����n%D�X�V���s�/��l�;��vp96���@� bT	CO�ד�E`@�9p��	��&�r@��r"��?�I��?A�aڠ\V���^Jx}<�5V�W�4����/�C�I�,�܌����*�|5�E�����[�D���aZ�L���u�ǿ�=x��+0����q�M��8��8����!��s�+�E�ߦ�8�&jO�!��v��Oh�5�/j]wlu <�80��d�>�[�G�����X��.�i
��bw�<�,���P�'��б�c�Q�C���]�KNcHPWQ ��$AW�S�ѫ�Vie���� �ؓ� �8�h���AA��H�.Jt����oa�MTu�����)4j���i\M��,S��l�}���1�M^WŤ�q� !���p�-_���∕=[rX^�)^&Z��Sj�:�ú^�ք���m���}�\;@V�)ԭy�E��<I�y�Ե�7#�]q��S���fZ�nM�O��[��Ʊ��x�q�8A�v�0�b�+#6���v
��sDem2XH��Ət���T]bY
XLC0�)
f#��d@+����r�m���pN�������o���hR�d1�AƊ"n*�ή��� ��Z�>��k
�mR��f�k\O��2闈5�$����5�p�,��G�֛�����u��J, Ĳ� ���^�ˇE�Y�Y���1
�Y w�
73#Ґ��,��^lj2NH0�Ix`��Z����Y�-��YA+&�l/,�p4�hi|y�U3e:��^��5z熚�ѝH�&�>��!+�q����(�Ih+��S��B�c$��l���� E�hK���;3��*ܱ�fU��`Տ.�U[Ä>�i �Bt]�/bk
���lε+�T�)��+��_|Y����s1��%� �zg|vd��ӎ"��$E L�	�$��8��[_�,�2elR���a��Œ���
��+�a �?a�(��X���
��Y=���9#�.�ˮ�T���夯8+��Dd~��e�i�'y���I؛�k���PEs��&�P���2��
�a�jE����SLD�4�]�?�yL5/�ŵ �g�	��eZ��Mg�g���R=3�f�Bl�1����-a�4oL��dXK�G�yy��e-�O:8?���H�cI�<�h�L6c�L ��w��7@����-��Ȝ��[PM
H�5�;0���i
ci�����a�!])��"Ee`m[
"�g`5$���(��?_'X�t��%��{e
m �<����
G�>Әɬ��H��iTM�
*��1J���$��($n�-���H#�0+[�L'x�`�n�ؼ_�C�2�%�,ӭ����ar��2�S�c��6�f����^��=!�#����5��xz��-�^�"j��#�A�L����� �[�����Rp��'���o3?P�'Y�-:�eZ����=�2����C��@�`2"0�F{}�S`�L�et����c�%���~�Y��IL�({fu�Pf }FK��7�Ɔ@+3B�R�#1݆L�i��j/h��)�KT��@E� �32�5ʫ�4f��s>��԰��b�,���왫�`8���V�s\�8����`eha��r2��rT��LlYXjI�FM`ǋ�рʃ��8��m6����K�1o�nB�Id��Y��?�I��'���JO<��b,#B�M�<���P�RK[�K���-l�Z%��Œ���[x�ҫ<Q��{����`U;
��i2��'f�� /|&���:c��6�0���J�ށ�:m�`q�!69C�K����ۨ� ��xhLus��|(�]T��&b��C�L�@e��E|�|�x�U��]f;�����F�wD�&��i	8��~�� �_ρ��g�Fnx��ĤE$��x���z������Pљ5_�V�e�HNs��%���^�Y�,�@�"�	��Ŕ9�4-S��t�]�A��ӑ]"
�u��@<�ۘ"buV#���k��2F��<�v�l=ź4�g
�]J�7M:�-]I4��#˫N��y֚h�N
��Tz�!�i.�q�0��6�<O2�Ff�1�ڮ,�Z�R��94�&�R�9��OPJ	Xk�x���Ql�H	@׆�p ���n�F0�����d��+0(F�	�t��2�.S���J�*#�T���a01��8x.5Ib�,��r^�7׉�^ �AH8Y�߭��S��q�U�Z�P�
8�����V�pHc忞<K�ͪ�DO*T�|yd�%��x��;��j��^���4�K�pa}
C&(1��]�*�Y@ފ[!!�%b�=4X�s֨�-|�^�%����	~v� WHX��]�\��. D�ls��GZ� �)���thUXt#`Q�e�|A���BP>�9��Q���t�)�Zrnɼ�*���ɸ�H���!Xj`9�]��e�<���=AD���c�*P��hv� ���N�ʹ[Ø�x/�m�x/!'�e��y����P�ڱ�
*��2E� ��!Խ�(��J��&L]����f�	٭����#
2~Y��D@X2�c��e�3$K�m��&��M�⒂Z�&E���s�+d��?���R��ӑ��F8ӻ�Z�t5,�����L���U���\������B��ꤹ�ZԀ�B��W���6K'�ʒb��Xo�k�9��Tv
��F��؟Ki���
��q=:��M����
�H�e/�ze����Z�d���T�h���Z;P���w��b�%�Yd5�F=w��GI� L������A|-��^��L���^��K}��@��i�#�jJ6��P����`�������4�CȬAT���u�"�A�+[����� Z�w���+���ȶ/ZHNɭ��=[Rql���N��uFjd�R���Z��3t�9��a���F�)~j�a�X��J���AP��9���lzX��ZW��=M��_M���&"�N "׺$Q�����s���M�J`۰�)nY�W,���
!�aM�1D����rl3I-"HM��*W��:h�f
S[X=X >�6ˣ�Ta^�ӷavc�O����x!��8����ό}�7,#c���
���0-�#0GP/���@A�����6{`
˼3��G�_�.�:�u�nW6��
��ڍp�d�*��C���q��p��'NHLz��)^~�d�y��a��@Lq8ܭ��tÅ�����j;��Ys���y��3��TO�-A�8]�0�����]j�{����M7"��~XTY�	�G��M㺵;f�x�\��c;w�E�ڀ�!�~�����>��7^��Լ���`��~
������8=
�I໾o��}�;[ �A�!m���a�4a�b`���	I����h��:@MV�>!0摱O
v�$�Ki����<Hڿ������<V4*ݢ���ګ�I������k�EO��%���%��T��vU7�wk��ay����u�NLw;�1�%�{�+%>��[αK���w�a�Ako��ښ��Y�2�,�ǂ��ӆR蚫�hH������|�{hU�-f��F0-���0R\I�Z�h��iY��qב+"�݅yj��C
��k�dP���x�K��e�X��J��[�.�����[�?z��#��(�owȲ�{�ܡ�̞G%�^m=�t�6}� ϫ��㣙�<�G�նG��3]$"~�N��hXh����Jpǯ��~_c{����E��q�q�X��@�8TD*.�ڬ����m���4[���[��7���~҃�j�d�-�9������F�/�U8jS�5�z�I5�
��C�eT�U8�2#�ԅ4�X��-���u������S��\��>2Nf�/�rc&+3���X9��t�#��%�C�	=;Ƕ�YK�4�5��в���G��?�����z���_��v�Gƾ�C�_k�d�Z(]�JLd�j�l&���p%�����Gt��^�o���C��t$�o)Z��h�v����W ��
���Sy�4O%/�U?
���U/d�.���a��á����H:�neJ;YNpӋ�z�W��1k[_�ŉ�k#o8$Xb`��`�F�ݤ�tEeg��_z���V% j�W�!�#k[)�K�'��w��u�Xq=�1���0jG��p�q7n�x$8s����8�]�Q諽�|������s2/�Y�#�Y��(�\�T��qf�
p*6�����<��\6d��],�5�RT��i[�>i�7;o��
�%��~��&�wx���G=ъ�>V���,(5̛��і;�F\��NZ�QG�G�p@!M�WM�hi�o6q��ȑ�;������4��_˲"[9�գƺ�l��]tyD-8�`G�J�cr}+�����zP�dw!�k��4�ݷ����+���P�|�ֻo�y�+>nQ��;i}�r�3�>��L�k�߽�/k}lY��k.��^w	A髺a��}�a��\A�i��^	�;��61qi�R\��.�;�mʉm��D�<�f����������$E4�m���M��k����3��#��	���=�S]��I�&�Jˀ��\�P&�t��Z[�Ɩ�
o���C�ţ|O�r=u�{:���-{�vM7G��x)}��75vcc���N1����`5�¶��̻�߇S{������,BY�.A���IOר�;�ԉ��Fφo�:�I���~�$�=�7E
�5��B��&?��7?J�22z?��g�g�8|��t�0�`筇��$9J�/eoQ٫�)�C��){��%�W�?kݥ>���A�o�'����G,�֥�Q.����=�`�&��̺�\�5��^��U�����¤ofɄ�v`ӵ��n�mS���J��>�:�����<��A�2=�ȶ�F�ev<��X+�~`�OaA-	٪�=RxZ{B�)k����:6/��ֆ:DY8S��Y�+��Z�]���@�0����	�2�e�M���݀w���:1uK:��F
m:�膯f�����;f�F]� #}��GI#{Ž$�G�T� ������K�>
�kG����Q˙y�'����\]�5#�N6G�?Y��{=
�H�0rVww��ʨ0�q )-�����;W B�=�=��پ���ɡy�Ш��if� �ƛVy�G���I�)B)Z����}�Rv�~F�����G��X����V��*E��		ή��\8�qh���R݇3���:$�h7��)��,2#����Г�pP4��u4����ќy~����˯a��Z���h��H|�{?4�g��ݱ/d;�@K��Qޚ�k����!q;9qa��C��{'m���
��1/(LL�;˛+��v�ʞ����T�B{�[�����;vU|.��ً���+tO�*i��nv�ڻ�
�I&�C'��\7�	��vJ7�E�a���aل���J��������c�c~l����	��x���q�; �߀����ǳ��<�c���߸6f�12dxF�����h�q�+Q��@�	эY��
��J2;��pc�ԫ��S�Ș�'��ڦ�0�Q�(�:�81���>�>�[�P��%�?�fz�$�V��������~�Y�0��7�Up�ǿ��Xpk�S���
>���~�K�2V}��g��?C������(�C���p0�p(�����8u��򬅂s�yS4�7� hq�>>��)�(@����G�
X�X����{��;��Ǿ]��-i�b��(��Y���K��ѷ����j!�	�ݤ�_�S{�#	×���[���G�1��a��:<UF;�D��%�
{(���T����A�q����NX�E�!�y�#tt����Gx ���|�.��,��Cv	���̣�L�6�Ѷ��1��`����6I��l��6s��ػD߯K�/�4\��^�c^`�� B�L|��ba�u�: ڸ�@���Y�TQB��r���w1aU!5ze,����nf:������ �v�����`y�fdv7<I�D��,O�#�l�z���8���jU���q���Y5-e�Õ���qx��N���U���a4�~[a1MQ±�,��7��9(��M�ul��O�zH��;�;B�^ꩰ����#���-I=#�~vŜ��q~m�9dV��^��^	K��(�;)�R�k���M+ ��0��t�rv���Xt���p�*�|VP(���ۖ��-q���`�����y��e�3��Lu�\U�m蝙��(�z���������CU,��:�ox��Nz���m8b{gJ��GbJ#��e�/����"��ag��EϞՎ_^ͮ������&Z�m��y��,�Hp�A!-��vԶ���B7r��!)��i����g�,�E�u�-�n�n�6i�c��L�]��iF��e㡍���<V����W7��Y��vQ��4h3ڠ�h�6�����i]բ�����"�?wU+�U-�益�+ne~̍`�I��XvP��9��&��/�ѻ��t�f=����#gX��&�W�}%��u��j���
�'�r��9�]�a�{����'C���R�[�W�n��\oW
������g��\�J�c|��d�=����;�!�O�eɣ�{�0.[�j�Q�g�9N�3���,:��@��c��m��N����.e�p��pvۃvʒX�qݢxB0"��)C��#�޵�؜;7 �Xzjؗ��ȅ�@�E���@�^�Šm���MXޜ�u|K�M�o֊B�[
s�o��=B�7n�l2Ɛoߤ4ݾ}�E�ܸ}��,߸}�� �v#�s%l�iv(3(�r��XV��6\�AO���=m�b����Bf	E��UL�խ�m8Љ�y��g��py���Ŭ���82�HT�K(/ti��H���Ԍ�cd+�ٰ��5��&�+:S�Y����
��-*�غ�h{�֮^k="����ib�wX�+�:����j�E�ݰ�x������(�����U_��gq�ݣ�p��O�M��-����{*��rl����G/2�*�1�m���|ĳ�x�<H��/2��v�^��.��ͼob���,vPM�mL'�ܬ�P�q�wbj=�
\�,�5�i-L�C�F
;Y�I8���a�Ӥ�s��eE����%l��-��y��%�}���uN1EM�t6"'`���[{�տ��؝������������jyf6ƨՄ����m�x�x�
�L�ڨ9��N�̏�k͹V�2�u�@��3��� �QO��S���!vsaa[Y�g�/��4�:����Նƽ��n�9��d=g�}OV9.p��ܧR��j�][4Nb�Jb��J�B����s��
~a�R+w3@g�����v��4P1f�T7K��LN�8��Q���)�e;`e�#8�kF�A��:tpk���f��p���4�e�iQ</>��	��z����ś����?�xmG�  
PACKAGER_GZIP;
Packager_Php_Wrapper::$Contents[7]=<<<'PACKAGER_BIN'
       0FFTMTŮ  <   GDEFJ   X   ,GPOS��  �  |GSUBShz3  
 0 > DFLT latn      ��        ��    kern              
�    : ~ � � �6\��Hbhz����H��� ��"��<f|����Pbx�bb��dv���	.	`	�	�	�
L
v
�  -  7 \ 9 T : T < R  �  �   ��� �  # &�� *�� 2�� 4�� 7�= 8�� 9�X :�} <�' E�� F�� G�� H�� I�� J�� K�� L�� M�� N�� O�� P�� Q�� R�� S�� T�� U�� V�� W�� X�� Y�� Z�� \�� ]  ��q ��q 	 �� �� $�� 7�� 9�� :�� H  R  \��  $  &�� *�� 2�� 4�� D�� H�� L�� O�� R�� U�� X�� \�� ]  �  �  
 �� �� 9�� :�� <�� H 
 R 
 \  � 
 � 
  �� �� :  F�� G�� H�� I�� J�� M�� N 
 O 
 V 
 W�� X�� Y�� Z�� \�� ]  
 &�� *�� 2�� 4�� 7� 8�� 9�L :�u <� H�� R�� X�� Z�� \�� ��N ��N  L   \��  �� �� $�� 7�� 9�� :�� ;�� <�� F 
 G 
 H 
 I  J 
 R  W  Y  Z  [�� \   �� �� �� �� $�q D�� H�� Q�� R�� U�� V�� W  X�� \  � 5 � 5  $�� 7�� 9�� :�� ;�� <��  $  &�� *�� 2�� 4�� 7�� 8�� 9�� ;  <�� D  K  L  W  \ 
 � 
 � 
 
 $�� D�� I  S�� U�� V�� Y�� [�� \�� ]��   X �= �9 �� �� $�Z &�� *�� 2�� 4�� 6�� @ \ D�� H�� R�� U�� X�� \�� ` V �  �    X �` �m �� �� $�� &�� *�� 2�� 4�� 6�� 7 - @ \ D�� G�� H�� K�� L�� P�� R�� U�� W�� X�� \�� ` V �  �   $  &�� *�� 2�� 4�� 7 
 9  :  <  D�� H�� L�� X�� \��   ^ � � �� �� $�) &�� *�� 2�� 4�� 6�� 7 7 9 ) : # ;  < ; @ b D�3 G� H� L�� O�� R� T� W�� X�^ Y�� ` \ 
 $  &�� *�� 2�� 4�� H�� R�� X�� Z�� \��  -  7 ` 9 Z : Z < Z  W�� Y�� Z�� \�� ��� ���  �� �� Y�� Z�� \�� ��� ��� 	 �� �� G�� H�� R�� W ! \  �  �   �� ��  �� �� Y�� Z�� [�� \�� ��� ���   % 
 %  � �� ��  9  9 @ � F�� G�� H�� J�� R�� V�� W ! ` � �  �   �� �� ��� ���  W�� Y�� \�� ��� ���  �� ��  E  H�� J�� K  L  O  P  Q  R�� S  U  Z 
 \  �  �  	 �� �� Y�� Z�� [�� \�� ]�� ��� ���  �� �� Z�� \�� ]�� ��� ���  �� �� ��� ���  �w �w �� D�� F�� G�� H�� I 7 J�� R�� T�� W - Y % Z + [  \ ! ]  �  �   �� �� ��� ��� 
 �� �� F�� G�� H�� J�� R�� \  �  �   �� �� ��� ���  �� ��     D�� F�� G�� H�� R�� T�� V�� Z ! \ # � ' � '  �� ��     D�� F�� G�� H�� R�� T�� V�� Y % \ ' � ) � )  F�� G�� H�� R�� T�� V�� W  Y # Z ' \ ' �  �   �� ��     D�� F�� G�� H�� J�� R�� T�� V�� Y % Z % � ' � '  F�� G�� H�� R�� \  � ! � !  -  7 Z 9 R : R < R  $�o &�� *�� -�d 0�� 2�� 4�� 6�� 7 % 9  :  ; 
 <  D�� F�{ G�{ H�{ I�� J�{ P�� Q�� R�� S�� T�{ U�� V�� X�� ]�� ��u 
 �` �= G�? O�� P�� U�� V�= W�� Y�� ��u  $�m &�� *�� -�d 0�� 2�� 4�� 6�� 7 % 9  :  ; 
 <  D�� F�{ G�{ H�{ I�� J�{ P�� Q�� R�� S�� T�{ U�� V�� X�� ]��  �b �X  
           $ *  , > 
 D K  M N % P ^ ' � � 6 � � 8    
 B \ DFLT latn      ��    AZE  CRT  TRK    ��     aalt frac                          $ N t � �     �   �           $                                                                                                                 ��  �3   ��3  
    " & / : _ �!"� ��     � � � � � � � � � � � � � � �9=AGPX`dnx����      " & / 9 _ �!"� ������������������������������������������}�{�y�r�p�l�j�b�\�I���������������������O�� �                                                                                                                            	

,�+X!!Y-�, Ұ+-�, /�+\X  G#Faj X db8!!Y!Y-�
+��+�
+�	+��99 01!#!#N+4�u,1����N��  U  t�  b �  +�333� /�$3� +�$2�/�$3� +�	

+��+�
+�
+�@	+�+�
+�/�
+�
+�@	+��+�
+�!+�6�?b�" +
�?S�� +
��+�+�+��	+��
+��

+�@&%	+�/�/��2�
+�@	+�(/�ֱ
99�$%�	99��9� �999 �&� #99�� $9��901732654&'.546753&"#5&xC��bum���ǵټ�C��\a{�ɯϾ��ndI><T(B��!Ϳ@�NB73R3F����!��   <��p�    & 1 � �$  +�3�* +�//� +�/+�	 +�/� +�2�2/� ִ
+�+ 01!#N)2����   ��i� 	   �
/� ִ
/�ִ
  +� /�3� +�2� 
+�@	+�/�
ְ2�	

+�@		+�
	
+�@
 	+�
�� ����� ..�@ 013.���4W&��  H����   D �	  +��/���/� ֱ
+�@	+�
+�@ 	+�+ � �9��	999��
90135 654&#"'6%2!bۻ{q��c�����!���canz��ʏ������    W��X� $ h �#  +�
�
/��/�3�/�
��%/�ֱ 
+�@
	+�&+��99 �
� 99�#�9��901?32654&+532654&#"'6%2!$WE��|��|��h�qd��G������������Q�YeS\l�VKBOY�nȚ�\����   6  �� 
  Z �	  +� /�3��2�/�/�	ְ2�
+�@	+�	
+�@	 	+�+�	�9 � �9��9015!3#!%!47#6�������E
pR�Z�����R�;T��$     _��c�  F �  +�	�/��/���/�ֱ
99901?32654!"!!672 !"_@��{��hRu]��@"�4�����:�Ksb�
90146$763"3672 #  %32654&#"Ct� �=�g��uGt���������M{sXmtf\}S�5�s��
7^qCq�����X�w��km�|     l  m�    �  +� /���/�	+ � �901!!5l����Wq��Mm     J����  $ / w �  +��-/���0/� ֱ
��$/�ִ
+�

� +�
2�� +�8-
� +�;/� ִ%
+�%�+�0
+�<+�6�?j�Z +
�5�6����� �56....�56....�@�0�

�	3��2�/� ֱ
��
�����
�
+�	
+�	...�@��99 ��9013!!!!'#)�����w�Il�Q�(F��I~��v����  �����   & � �  +�� +�$�
���'/� ֱ
99 �� 9��
99�$�9��90176! !"732654&+532654#"#"��P}v�����Vճk����wp���d/�!ϥg�+%�����mfdh�`T�     N�� �  = �  +�� +���/� ֱ
  N �	  +�
���/� ֱ	
+�@		+�@		+�@		+�
���
/� ֱ	
+�@		+�@		+�+ 013!!!!����%�����������   N����  v �  +�� +��
�	��/� ֱ
+�@	+�+��99��99 ��9�� 99��9��901 ! &'" 327#!#  N��	�G�����	�|2�2����d�a�]�K��@�����0��U�     �  r�  ? �   +�3� +�3�
 
���/� ֱ
+�@	+�+ 013!!�Q^��c��   t  ��  N �   +�3� +�	3�/� ֱ
9 � �99013!37!!#!
'#t]ȨD#Q8��N��#5�����G/
������T���If7��d}!��I���   �  v�  W �   +�3� +�	3�/� ֱ

�99 � �99013!3&!! '#��aeo6�����N�������v��I�
������:     N���   D �	  +�
� +�
��/� ֱ
�		��/� ֱ
��~nfq
  N��   W � +�
�
	$9��
���!/� ֱ
	99��9��90136! !&.+32654&#"��
$9��901732654&'$4$!2&#"!&[F��o}p��]5 �L��fs`�˽�����F`TJBY/�*��L��HO>9RBHӝ��    !  ��  : �  +� +� �2�/�ֱ
+�@	+�
+�@ 	+�	+ 01!!!!��_������a�     ���e�  7 �  +�
� +�	3�/� ֱ
 ( �
  +�  +�3�/�ֱ
�901! 36!!r14\�d��u��
��'e�I     !  ��  * �  +�3�  +�33�/�+ � �	99901!36!36!!&'#!!h�6�o��V�z���$'.������������ۧ��I�Ȯ���y   '  >�  & �   +�3� +�3�/�+ � �99013	!36!	! '#'��V��4/���R��w��:����|z�|�9��?w��     >� 
 0 �	  +�  +�3�/�	ֱ

2�������������[     6  ��  4 �   +�	� +���/�
� ������..�@ 013#!������    _�
���"/� ֱ
��/� ֱ
� 999��9014 !2&#"#"327  HP�t6Qj����k\){�����
�;+�"����#�4(    J���	   q �  +�  +�
� +��/�/� ֱ
 �4yE�4����1���r}{b~�  H��V=   [ �  +�� +��	
���/�ֱ
+�@ 	+�+��999 ��9�	�9�� 9014 32 !327#  !4&#"H)��
��/�ְ2�
+�@	+�
+�@ 	+�+ ��
9��	9015354>32&#"3#!!�j�xWY
1<KQ����.�'��n��eX7���.  J�8�=  + v � +� +�)�/��/�"��,/� ֱ

�999 ��9�)�
 999��9014 3237! !"'732326=##" %326=4&#"J��^#	�����C����i����TxhF{jW`��:�}�������U�Q��D�"�y�e�]u�   �  �	  E �   +�3� +��/�/� ֱ
  M � +�
/� 	�/� +�/�ֱ
+�	
�9 � 
  +��  +� +�	�/�!/�ֱ
99 �
�
���\�&��P.g>m�|lX�%���������B:��n��kE]D�����c   J�R�=   T � +� +��/� /� ֱ

'�\3*1]���%�mt��i�����   J���=  h �  +�� +��� /�ֱ
+�@		+�2�	
+�@ 	+�+ ��9� �901535%3#327#"&5%�H��>FA%O���.��Y�����iV����    ����%  Y �  +�  +�� +�	3�/� ֱ
 ! �
  +�  +�3�/�+ � 
�901!367!!n�'�d�h��%�R>l����    }%  n �  +�3�  +�
�.�
������+� � �#9 �
....�
.....�@ � �901!367!36!!&'#!U~)���I����r!&r��%���n��{��h��������t       ~%  & �   +�3� +�3�/�+ � �99013	!36!	!'#u��x�/�o��o���#��^C	�	��R?��    � �%   �  +�3�/�+ 01!3!
>54'v��i�c���iE��%�uC��a���«c�'*   0  �%  2 �   +�
� +�
��/�+ � �9��9��90135 67!! !0_I_����RG��Sg��Q`B��     F�
 +�
+�@!	+�2�� ��$

�BTHav5 ��yl-rrtt(rl��'4vaF�     ����\   �/� ִ
+�@*	+�2�� ��3�'
99 �! �&99� �
99��99013254'&54675.547654'#53 %#J&�
XbcW�&PI
��P:� WMMtssqAXL-����6uv3@T���bH��  Y��9  Q �/��+���/� ִ

9901!23273#"&'&#"Y09w�3O�$QnB=�v�-X�� FW���c*'AY�   b�b�1   T � +�	 +�/� ִ
+�@	+�/� ֱ
��"/�ֱ
+�@ 	+�@	+�� ��
+�@!	+�@	+�#+��	9��99��9 � �9��9��99��90135>54'#53&54$32&#"!!!tm�װަc7Lsej4��/OS�0�a8�[N��6�)ma?[�_�H��      ��  r �  +�/�3� +�2�/�
+�@
+�@	+�2�+��99 � �901!3>7!!!!!!!5!5!5!m�%7
+��+�#
+�#�+�
+�/+�#�9��	)+$9 �&+�)9� � ($9��901 !   !     54 #" 4632&#"327#"&F���~�����y�3�1�����Ϛ��J�!Ww���u�T!k������w�����w����?��A�����#u2��v�6pF�    < ���    3	#3	#< ����������%��a�_���a�_     A���   5!AH���     C��   , 4 � � +� +�	/� +�+/�- +�+-
+�@+	+�%2�2/� +�5/� ִ
+��+�,
+�-2�,�0+�
+��+�
+�6+�0,�	($9�� $&999��%9 �+�#9�-�  !$9�2�9��9014 32  #" 732654&#"632#&'&+32'4#"C��������uڙ��ٚ�۬cKzphKuZ57xn3�������� ȣ�䣤���BJV_w\+{S�9NP  ����    � /� +�/� ִ
+�+�
99 �� 901732'4'73#"b+@8N�`�;FY�ve�pz#8B
��$/�ִ
�
��������+�
$9 ��9013!!!!!!'#)�����w�Il5^���=Q�(F��I~��:���L����    )  �8  
�	3��2�/� ֱ
��
�����
�
+�	
+�	...�@��$9��9 ��9013!!!!'#!)�����w�Il�Q�(F5�`����I~��v����z��  )  �8    � �   +�33� +�3� 
�3��2�/� ֱ
��������+�+�...�@��
$9��9 ��9013!!!3#'!'#)�����w�Il����qsTQ�(F��I~��&��P����    )  �K   # � �   +�33� +�3� 
�3��2�/�
 +� �� +�$/� ֱ
+��+�
+��+�
�� ����� � +� +�...�@��999��
"999 ��!9��99013!!!32327673#"'&#"!'#)�����w�Il%�<SW �.0OFJJ."Q�(F��I~��/+,1�45*'_�G����     )  �V    + � �   +�33� +�3� 
�3��2�/�)3��!2�,/�ִ
��������+�+�...�@��999��9 ��9013!!!47632#"'&!'#47672#"&)�����w�Il,-B;)+S<A.,�Q�(F�,*@=+***>AU��I~���>-++->=W,+������?,*+->>++U     )  �<   ! � �   +�
+��+�	
+�	�
�
�3��
���/�+�6����� +
�
+�(+�!�#$$9��$9 ��9��#999��9�� 999��901 !2&#"  327#"'732'4'7$ N�k�D�����ᤁ;��)HW�ujF,<9O�W�����`�D��;������2��>G
X=cZ+z#8B
���/� ֱ	
+�@		+�@		+�@		+�+�	 �9 013!!!!!!!����2��t��]��������������:��  �  V9   R �   +�	� +�� 
���/� ֱ	
+�@		+�@		+�@		+�+�	 �9 013!!!!!!����2��t�x�`�������������'��    �  V8   R �   +�	� +�� 
���/� ֱ	
+�@		+�@		+�@		+�+�	 �9 013!!!!!3#'����2��t������qs�����������&�  �  VV   ) � �   +�	� +�� 
��/�'3��2�*/� ֱ	
+�@		+�@		+�@		+�	� ��
 * �  +� +�/�ֱ

�$9 013#'!����rr=Q&�����I    ��  �V 
+�)�+�
+��+�

!�/0OFIJ.�������v��I���������:/+,/1�45*'_     N��:     M �  +�
� +�
��!/� ֱ
� +�
��!/� ֱ
� +�
��$/� ֱ
� +�
�//� +�+ ��# +�2/� ֱ
+�1�&+�'
+�'�+�
!�/0NFJJ/�N������������O�������}+,/1�45*'_   N��V   * : u �  +�
� +�
�(/�73�!�/2�;/� ֱ

�9 �
#999��99901 !27 !"''7&&#"325&'N�A��~�}��h�������T= T`���Bd��8�H�N���������]Jœ��P���4���c2�z  ���e:   B �  +�
� +�
3�/� ֱ
� +�
3�/� ֱ
� +�
3�/� ֱ
� +�
3�/�,3��$2�//� ֱ
  5 �	  +�  +�3�/�	ֱ

2����2�`�����������[���  ����" ( v �   +�  +��%/���)/� ֱ(
���)/� ֱ
999�&�$9��999 ��99��	9��
901476%54#"'632!'##"&!#3276= A��6Ȥ�@���yy��	mɜà6��cH>E9;��.�ii
���)/� ֱ
99�"�%&($9��'999 ��99��	9��
901476%54#"'632!'##"&%3276= !A��6Ȥ�@���yy��	mɜ�LH>E9;��"�7��.�ii
���,/� ֱ"
999�)�!$9��999 ��99��	9��
901476%54#"'632!'##"&3#'3276= A��6Ȥ�@���yy��	mɜú����ntBH>E9;��.�ii
+�@)	+� +��8
���:/� ֱ0
+�/�0�7+�2�
+�;+�% �
)$9�&�99 �8�999��9��	9��
901476%54#"'632!'##"&32327673#"'&#"3276= A��6Ȥ�@���yy��	mɜ�¦1aG 
�TY?[:-H>E9;��.�ii
���B/�ִ"
901476%54#"'632!'##"&47632"'&3276= 47672"'&A��6Ȥ�@���yy��	mɜÒ-,A<SS>@-+�H>E9;��
**A?**RA?++.�ii
��%/�6 +�>/� +�A/� ֱ)
+�)�0+�2�
+�B+�3�9�:�,%>$9�"�99 �1�999��9��	9��
9�>6�"9901476%54#"'632!'##"&462#"'&3276= 327654'&#"A��6Ȥ�@���yy��	mɜ��tuCC�qrEG=H>E9;��^7*.--7.�ii
�1�1� ��/ +�8/� ֱ'
99�2@
".1$9��999 �*� '999�1�9��	9014$!54&#"'63 632!327#"&'#"&%32>= %!4&#"AX/ig��B¿j�����N�}��.����8�����ML>A]��o�bYWo4��)SR�e�����`bs:�RcZ���8ADA-j�Xqw    H�E�= & � �  +��$  +� +��/� +�'/� ֱ
+�(+� �99�!�#$$9��$9 ��9��#999��9�� 999��9014 !2&"327#"'732'4'7&HH$�t6Ns����nY-n�)GX�ueJ-:<N�T���A+�%����%�/H
Y<d[+|%8B

���$/�ֱ
+�@ 	+�%+��	999 ��9�
�9�� 90147632 !327# '&!#!4'&#"H����

���$/�ֱ
+�@ 	+�%+��	"$9 ��9�
�9�� 90147632 !327# '&!4'&#"!H����

���'/�ֱ
+�@ 	+�(+��	$9 ��9�
�9�� 90147632 !327# '&3#'!4'&#"H����

�%��=/�ִ
+�@& 	+�>+��
%99�.�*999�&�9�6�	999 �
�9�%� 90147632 !327# '&47632"'&!4'&#"47672"'&H����
 * �  +� +�/�ֱ

�$9 013#'!����nt9P�M�����[%��    ��  �� 
�2� +�!/�ֱ
99 0147632"'&!47672"'&E-,B<SS>@,,�PZ++@?*+SA>-+4?,,W@=W,-�%��4@++*,A=W,,   �  ��  ) � �  +�	3� +�' +�'�# �� +�#
+�@#	+�  +� +�
+�/�)
+��
+�	
+�++�)�99��
�TY?[:-%������D�le��ѝG,)0�}0!b    H����    L �  +�� +��� /� ֱ
+�@	+� +�-��1/� ֱ$
+�/�#
+�$�*+�
+�2+�#�'-$9 �-'�901476!2 "'&32327673#"'&#"32654&#"H��	����������0aG �UY>\:.H{fe{uik<<�������������,)0�}0!b�]������YX  H����   + ; m �  +�"� +�03��82� +�(��</� ֱ

�9 � �99��
 &$9��99014 327#"''7&&#"32654/J<��vgrd������mola�F)A2Hs��+Hp�%�5:�Q�������9�W��jB�%��a%��bD     �����   e �  +�  +�� +�
3�/� ֱ
3�/� ֱ
3�/� ֱ
3�6/� ֱ
67674'!v��i�c�OP�iE�RQ;�6��%�uC��a����VUd
RS'*JM��  � ��  # 3 U � +�(3� �02�  +�3�4/�ִ
67674'47632"'&%47672"'&v��i�c�OP�iE�RQ�-,B<S**=@,,�++??+++)A>,+%�uC��a����VUd
RS'*�?,,W@=,+,-<@++*,A=,+,,   )�I��   � �   +�33� +�3�/�	 +� 
�3��2�/� ֱ
+�+�6����� +
�.�.�������+�+�.....�@��99 �	�9� �99��9013!327#"&5467#!!')���]p1&2<Ko_p|U�w�Il�Q�(J��I.}3%-x'aSI�$~��v����    A�I/= ) 2 � �'  +�-�  +�#  +� +��/� +�1'
���3/� ֱ*
+�4+�* �	99��'-$9�0�#%99��"999 �'�999�-�$9�1� 99��9��9014$!54#"'632327#"&5467#'##"&%326= AK6Ȥ�@����]q2%2:Lo^q{V�	mɜ�MG?Et��.��
���+�#RR��PO#�4(�M��   N�� 8   = �  +�� +�	��/� ֱ
���+�#RR��PO#�4(�����    ����8    W �
  +�	� +�	�� /� ֱ
� 9��9��901763  %"373#27654'&#"�������0��5�xp���p\���}}�b>�!�������eG����������uw
� +�!�/�&3�*/� ֱ
 ���yE�4��������ON99}{b??������  ����   y �  +�	� +�	� 
�3�
�2�/�ְ2�
+�@	+�
+�@ 	+��+�	
� +�%�/�3�	 +�
22�
+�@	+�!
+�@!	+��
�8y�̄��������1���uz{b~�    ��Ic�  q �   +�	�  +� +��/� +� 
���/� ֱ	
+�
+�@	+�@	+�@	+�+ � �99013!!!!!327#"&5467����2��t]r1&2<Lo^q|U�����������.}3%-x'aSI�$     H�RV= % , � �#  +��  +� +�*�/� +�&	#
�&��-/�ִ
+�
+�@ 	+��'+�
���/� ֱ	
+�@		+�@		+�@		+�+�	 �9 013!!!!!373#����2��t���wq��������������8����    H��V�   & \ �  +�� +�#�

���'/�ֱ
+�@ 	+�(+��	$9 ��9�
�9�� 90147632 !327# '&373#!4'&#"H����
/� ֱ
+�@	+�+� �	999 013!!!�Q^�_�^����c��&��    �  �x   ' �   +�/�/� ֱ
+�@	+��+�	
/� ֱ
+�@		+�@		+�
+�@
���?��       �	  7 �
  +�/�/�
ְ2�	

+�@		+�
	
+�@
	+�

�999 � �99013!3&!! '&'#!��aeo6����HHM��_���������v��I���������:&��   �  ��   Y �  +�	3�  +� +�
+�	
�$9�	�9 � 

�999 � �99013!3&!! '&'#373#��aeo6����HHM �xq����������v��I���������:8����    �  ��   \ �  +�	3�  +� +�
+�	
�$9�	�9 � 
� +�
� /�!3�	�"2�%/� ֱ
� +�
� +�!
�
���$/� ֱ
2�
+�@		+�@
�901 !2!!!!!!"  327&#"N�Wr]q��2��s��4WhV���le��_=Ep���]�

�)��0/� ֱ
���)/� ֱ

'�\3*1]���u�7��%�mt��j������M��  �  �8    + { �   +�3� +�)�! 
���,/� ֱ
9:`aj  p  #�   L �  +� +�
99 ��	
9901373#!3>32&#"!4p�us����!

'�\3*1]����������mt��j�����    [��c8 & * l �%  +�� +���+/�ֱ
(*$9�!�)$9 �%� 9��!$9��9017327654&'$476!2&#"!&![F��o?>p��]�� �L��f:901��^_�������`��F`**JBY/�*�}|L��H'(>9*(BHij��~=��     J���� " & m �!  +�� +���'/�
(*,-$9�!�+$9 �%� 9��!$9��9017327654&'$476!2&#"!&373#[F��o?>p��]�� �L��f:901��^_������xq���F`**JBY/�*�}|L��H'(>9*(BHij��~O����  J���� " ) p �!  +�� +���*/�
����    !  �8   G �  +� +� �2�/�ֱ
+�@	+�
+�@ 	+�+��	
+�@		+�2�	
+�@ 	+�	�+�
� +�
3�/�# +�+/� +�./� ֱ
+��'+�
+��	+�
3�!/�( +�0/� +�3/� ֱ
+��	+�
+��
� +�
3�/�3�	�2�/� ֱ
3�/� ֱ
  ( w �	  +�  +�3�/�&3��2�)/�	ֱ

2�����-,B;**S<A--�++?>*++)?@U���������[e>-++->=W,+=?,*+->>++U   6  �8   4 �   +�	� +���/�+ �	 �9��99��901355!!!!6��mL�:���`�����"��&��  0  ��   2 �   +�
� +�
��/�+ � �9��
� +�� +�
��/�ִ
� +�
��/�+ � �9��
22�/���/�+�6�?��~ +
�.��������+�
+��+�?r�� +�+� � �#9 �...�
.......�@ �� 9��9�	�9��9017267#53!2&#"3##"?/18`>+��6�pG438Bd��5[��{���el�#�]���d��m      ���  + � /�3� +�/� ִ
+��+�
+�+��	99 �� 99014632#"&732654&#"��ut��os��8+-87,.7eazxc\yy\)>=,.<=   �z�  T � +� +��
+�@
+��	+�

+�+�	�
  . �	/� +� +�/� ִ
+�@%$	+�2�<%
+�@< 	+�2�>+�%<�!"999 � +�09��901535465#53676$32.#"!!!!32>7#".'.'z|�*q_�f�?@,�JR�4!5��\��%7�W'LD769�nS��y0*=��$ ��wju'�";>E)� "�.G:7
33�  +�2� 
+�@ 	+�22� /�ִ
+�@	+�
+�@ 	+��+�
+��+�
�
.�������=�� +
�

6
�`��$���
<x��(\���.Lh��V�
h�6z�D`�f�.p�$t�@p�.J�`�H�����j��� R �!6!�"R"�#�$$�$�% %n%�&"&N&~&�'t'�(<(�)2)�*D*�*�+2+�+�,h,�-f-�.�/T00�101�22x3$3N3z3�44�4�5V5�6N6�7X7�88�9"9^9�:j;
;^;�<<b<�=P=�>J>�?D?�@ @6@`@�@�A"AVA�BBvB�CDC�D:D�ENE�F FrF�GdG�H\H�II�J(J�J�KxK�K�LPL�L�M2M�M�N0N|N|N|N|N|N|N|N|N|N|N|N|N�N�N�N�N�OO&OJOzO�O�PPhPhP�P�P�QDRR"      � B            b        �  	   �    	   �  	   �  	  < �  	  &  	  B  	  "`  	 �  	  4�  	 	 B�  	 

�  	  2  	  26  	  Hh  	 � �  	 � 0� C o p y r i g h t   1 9 9 2 - 2 0 0 3   A d o b e   S y s t e m s   I n c o r p o r a t e d .   A l l   R i g h t s   R e s e r v e d .   U . S .   P a t e n t   D e s .   4 5 4 , 5 8 2 . M y r i a d   W e b   P r o B o l d 0 0 1 . 0 1 4 ; A D B E ; M y r i a d W e b P r o - B o l d M y r i a d   W e b   P r o   B o l d V e r s i o n   0 0 1 . 0 1 4 M y r i a d W e b P r o - B o l d M y r i a d   i s   e i t h e r   a   r e g i s t e r e d   t r a d e m a r k   o r   a   t r a d e m a r k   o f   A d o b e   S y s t e m s   I n c o r p o r a t e d   i n   t h e   U n i t e d   S t a t e s   a n d / o r   o t h e r   c o u n t r i e s . A d o b e   S y s t e m s   I n c o r p o r a t e d R o b e r t   S l i m b a c h   a n d   C a r o l   T w o m b l y M y r i a d   i s   a n   A d o b e   O r i g i n a l s   t y p e f a c e   d e s i g n e d   b y   R o b e r t   S l i m b a c h   a n d   C a r o l   T w o m b l y   i n   1 9 9 2 .   M y r i a d   i s   a   s a n s   s e r i f   d e s i g n   t h a t   w o r k s   w e l l   a s   a   t e x t   f a c e   a s   w e l l   a s   p r o v i d i n g   f l e x i b i l i t y   f o r   f i l l i n g   d i s p l a y   n e e d s .   M y r i a d   W e b   h a s   b e e n   o p t i m i z e d   f o r   o n s c r e e n   u s e . h t t p : / / w w w . a d o b e . c o m / t y p e h t t p : / / w w w . a d o b e . c o m / t y p e h t t p : / / w w w . a d o b e . c o m / t y p e / l e g a l . h t m l W e b f o n t   1 . 0 T h u   J u n     7   0 7 : 1 5 : 4 9   2 0 1 2       �4 f                     �         	 
   

Zdotaccent
zdotaccentuni2000uni2001uni2002uni2003uni2004uni2005uni2006uni2007uni2008uni2009uni200Auni2010uni2011
figuredashuni202Funi205FEurouniE000 ����� K�PX��Y�F+X!�YK�RX!��Y�+\X � E�+D� E�  +�+D� E�"+�+D� E�  +�+D� E�[+�+D� E�8+�+D�	 E� C +�+D�
 E�	'+�+D� E� 
 +�+D� E�++�+D�
PACKAGER_BIN;
Packager_Php_Wrapper::$Contents[8]=<<<'PACKAGER_BIN'
wOFF     px     �@                       FFTM  �      TŮGDEF  �   (   ,J GPOS  �  �  |��GSUB  �   �  `Shz3OS/2  	�   [   `��=�cmap  	�    ����`cvt   �   2   2�Qfpgm  $  �  eS�/�gasp  
� �������Î4W�R�x�{ �R�����Oi�7C�v�&N�����{U/q��?~�,{��&��J�t��&���DE<F�$q�h�A��3҄g3ֆ��T��8N�S�~Hl�,��ZYÝ��*U���:h�`���#X�z�ٙ��wq��C�1���;�dU&{�Z�u�.C�U�C���P'F�Q���	�]�Y����ƻ�>����C�j` uQ����\�d5�Mv�å	.Mpi���{y�<���6��j��QPL�R= ]�:"�cZ��R,,�=�JBdjp���Y}�} ��#�f���'�u>C���b���QVZڇA3e'�Ka\��x���ʽ��3�!���3�=�wZ��_�b��5P��j;k�����r��
rT7��еM��3dT���!��w�x���5<��s3h�"�E@��s �
7�����Z�.�_�w�T�l�cӑ����(�_����R8mD�-�6l;槲Ԃ�e���6�0�;�i� �Aŷs!���<�	3�9Ƀ��CV�x:��TO�q��7���)�}=��,(i��^q�r^�*��FKg�f�!�P5�jucr
:�ͮ0�%V7����͗Cv�̭�����3��=�v3������2�	�S�eJ�ր�'����]��*�.���;�?�[�跧]R�4ȕ�o�e|�R|�3ɶH������d
�k��<�<AB�]�n�CA  xڅ�=
�@����,BLbI�E�m!��,�U���ųx��9�c�!`1o�7߼( },q�^o�~i��p裮)	��I���Z�;��4�
�ڲ���bq �`�!@*�����a�=*�p�
���L8�!/���$E�a�	i�q��f��`*���oZ�"F�a'��d4ˡ��+_��V   x�c`b�ô�����u�1�l��ː��������������������� �.N�

�D��00��0�)00Lɱ��nR
, c�; xڵ�yP�aǿϯ�H(�U+o��r�K)�r�#��C9��U��>ƙ[��"�`������Ye3�&9���M͚�w��>�����������I���?^C��g��P�2T�5��Z��sԡ�hF+�\ɓ|�H�FCq�H)�AyT�<U�J�p^�G�	���(�E��^�L(���^�A��%�&�H���IK
�P
�h��J�4�r�!<�V�:膿t����![���Z�˷�����*��\�%l�|����LN�T^�Il�H���ɮ�6ժ�Q��W���jQ��(�U��o��r�#�)ʿ
�:mz،����fϙ;/*z����b/�]�,δ|E|B"6oٖ]����#�N/<u���s��/^�T\r��j�5 9�qx��_���u_�X��,ݸx�MkNJߴ�񓏟�|m�T��ϖm=Mߐ�=#'+7/Ǯ��y��~Կ�
����;�4���:	�!�qK��ͺ�����b00����.?�R��4�j˰��Ѽ�3��4@Skm���!��qK�˦�6����$���tUS�����]���`�*́��Vy&ҷ$�,
9�����@�HƼIJ;ㆵƑ���6O��<�Mmo��Y�w�K:�Ȇ�b;b)�	DBFU��Ͻ,�R��@��������D<��u1Vz~���ˊ�V�΋Bwo�j��)��^ξ���Ac�����J��<,�4hCz7z���ꈫ�>�'ӿ�Z     �� xڼ}|TU������MMO&�ɐL���$T��4	Ho�H/bQPl�A��Zߛ�[��PtU��.�H����?��7�	d���n��$���{�=������#�ɷ��8����&��$�������"DvFenwRo�bD��Ů猑���9ň�&��������jk��Q�fkU$Q�ɥ���zN�
�K��w�QW]���}�������`�����dl��<v���c,�Mj+��<7L�I�������BT�Ǔ���s�XR���l����$o���:�T�.�)&X����Vҽ~*��a$R�2YJ*z����=�kO���q��*.�+$ӸD��������E[<���<I���ॼ�L�-����c?ћ�6��!�0Z���D.��9���l��N�K��g��HK_��i1z} ����!�4��0�7�)"{����ʨ��\��tӴŜ7b~�i�[��l�s�H�@���;|l�)�|�����wk�y��N�]��=��O�*���gn�}�R��R���B|]�����)!dy��UG�O�Q����q�~y���n�������׾T����:��`rO�����r��o� +w��Y�^�_o��S]IV���_9�]x��8I���&N.�*��5Q* ��!1*�����*�b	�_wH&`�nQٺ[�F�q*! �K�06�br�S�;����9V`+3��WJB��zIί��\	���Y_(�qA��Wj!֜�����y��yp��ښ��p������{}~C��X����N���)��<7m��+v�xu�GϮ=�G&L��ן���G��G��������koz/��vc߃�H������g7��i�_o[8N��9�߰@w'�y�Õr=8�K� �����q�h4Y�X�QN4��=Ѥ�eň����`�:��i�gz�����YةT�� }��2	 K�=�*�^	�Y�r��((ɦ���%WKn \�Py
�	g���&C~�<�����$n"?���Q�/�n�໇�7wd���
@z*a`�����H���k �u�2|�AIڌ�;�.[\	Gv��$�0����娴�,�PC��)
z���HBH��Ǜ���O��¤��?��^�#��/��ߐ���W�8߅�f�=}P�����Yo\y��}�m��^�y���WwL��s��SW
�����%9�8~��G�h#��!r�,RoQ��W�����+<|��<\B�.A�gE�lFO��F�s��~����!(���d̾�//{�2E����W��n�V��� �d�U�$#����j0��. �Uyq��y�@?=%��3<�K���rQِ�H�.� J3"�4�Fe�n��%M�<���Ɍ?6L��ل͜)�ش������4������6�!��I>R�;�b�/�Ʉ��#�w�
$
�'E���`�L������r�xaN
ܙ\���qʱ�BSp*V�3�c��a��E�8en�"���W8�j<�lE⤊��Zݬ/=�1������r�˝ʨQ�V�
ZX����c
H�@��ɥģn՟��8�\<{%��4�ߙ@����J�B+:���(��t�Z��d/�����"�)
rB��[A�9q�U�fXll��hȎ���	G]��Z����'/��,�Z��'�w�+ ^\���D4 Bj؃
t^4�@I�i-\��Ko�n�-gl�c�3��	�C�?�>���qp��Q��<���g��yym�t�Ϯ��3A;�p���̹�������p��y�RwT6햭1�D	���
�6�D
w�O��'�_S�|{�CG�@&���hڊx��+��
�����p!��W�y�� W��58�5�P\���놏���H�:��ٌh�X2=�����5>yθ�yj;Z-^�.�ql�3	GG�Q�3#q	�E҇�
A/�w��i�Z�&{�����#���~��\���p�i0J��Ĩ?�x�:�{|5�S�#Ni۹�����ܮ�5ܔZ�y
edy�|�޲L<�n2bu7q��C��
�
���=�7pZ��Y�V�2��\��/�N��elMxlJ�ɼ\�`�(yz8AaJ�hȋ�.'��m�
�nh��p
h�(z?�̸N��3��b��#��%����4�@4H��"�F���X\w�%,�c�^!z2�.�`�&u�:惖���ޛ�-��Ɵ?#������Dt��v����3c֏SF?da���#�u�'/��%�H�]�h6
i��N��a�5�8��=�W��%����4��n���Fv��[s���|�$\Q}�o�����kd
y�T���ꑽ��Gb�������°��`/̰�a��d3i�r�2W�g��䴤��6��}�q�=�}���� �;�j���O8L܇��ֈЩ�ԗ�u�9Ģ'�x`�w6�l=��14�>D�x��J^�֤�r��C��:����J�s꽛,&�.�4W]sZ�7O��^�[��|��m~��)��a~��GN��(|����>��s�:��t��]|n�'Z�������-|���i[ԟڷ2��Y�F�*��hV����I�ۏ����s�x�crz�s�.�����`tP�������OR�pR�ݨG��v+�TE�T�b�1��·D����&�{������Kc��1�����T�
bz��*>��	�YPtu�id�DF�O�?�{
�.vh0?��n�yd/|��2�L�8P�_��;�;��µQA�K��x	;���	S*�cdgS³)�Û$��a�>���wD~����e��j����6b�Y�pc�l���4.��l\w
�k�9(��T\vm	�@���3N�%g�{T/��W^�\2}(��~K�����/����qi�Ѫa�Oa�(�
:S*�O�=I����x�-�8���^�(1��-��M�{f�ڳ��xAC���\\���z�:�K�(��)e�@��]u� �)�'3	y��d"y��S��=&�
j�wՃ[FE�9(~G��)2�a�����9���m���V?��I
�`�n��]����mkM:�m���a�^4ɜ4� 'F�ъ0Ê����;�m!>w�4<� �ЕM֓�ԙ��R��73:`��<����\@��^E�	�[0ziy:�����cXfMP�2+3����1:.kZ{1c��4�bX�x�US
���ә�q�=��* ��맰{�`
P�|��>�H��ÿ�>�]b	����y"/�Lk��3�̂c��YG>��(�H�d��}����$x��k��G"����Z�b���.�{ ��΋_*3�?V/��$ªY�;�L=ς�r<�U�����T.�~�S���h�0Z|,g���0i�������ƭ�P�a��E�B�R�Ԏ���La�P]�R�,�(?���/_�X<?�n��9��<��6�E���ϔ�C����%�;Utfc�������z;��A�1j���YRv'b0�|����K��(nu`,$�:|�Ǹ��������C7�,u���fM��-9��:MW�ͭ͙�]7jBC�FV@�}��/By��B��5$�������nm/n�\#4������s� G���5s�X����ԉl�ʆ��D��)�9�
p�xm.:
^���p�'�@f���T�T�y�7$�Ϥ*�ag����ʙ�\���񎌐5�L.v.w����;	����@�̺�V���,G�^"cԋ՛o*q���*xRm���{��mW���w^{��7�/�u���FX�<����Sy)w����g�.P����G??L���!k^����ju$y	L�?�bV������K/��\�^��$G��e���ss��5�]`J�c�����ȱ �Ι2pF�a_s��l�}F.S-ꓠr�YC~lK��Ώg8c�]j�U��j�tԾe�5����E��e�K6Գ�H c�^�E���C�{��%���ķ��XB�~�Gl�88���������
"���:�1�uc��Ns��eD�F�!c�ǥ �9��w�jc�Y[6�l$+��*N�����/�L8 �AO^�I^���s���vA�v(�[�Yl820�g�b�a��� ���o@l8���s�߉���t���\����?SF��I��}�_��]��,�7��/�.�^�V��5a!��&�"��~�agڊ���v �5s���lz�`�Kqy�xG5fw��#�%M4�S�!�0��I N�V��m E����������/����4���^"gl:m��<�z�=���L��3��{�;�Gz���<��f+����&�)��q���@��&��Q��xfT����U%h�ES[ͩϑ�)�s�AR,�T�P/"�
4(�N�ފ���0&1s)&�R�dC��7��[u�Y����|ΰUK�ϻ�7sGH�E�i�������!���՛-�dڊ��<���
V$��J�����[�N�X0MJ���bQ�x�B����\R��*�ؼ�����g�{Θ�f�k8��g��m��G�C���3��q���Wk`�>������������s|'^�����ܦ.%��'�k���6�'�J�~5�r����x�|�'���>?�xQ/�e���������S%p�F�q���\Q@-q%����� -�@su[�Z��"Z��PS�	5��dڪy���&�}	�Q�����KSV��a�s7ū>|�U���OU�5t��3b��G��{��/�o�{�>�l��!�.\0��N��M�6�&�̓q*��i���ި��M��S1��M@�S�&{����mX"'�g,�ӒW��Ӹ죖��'��<�Э���Y�z�����l������N�����~���Rʌ�2�N.-zj4
H��CB�U�<C��g�L��T��dxչ�s/�t��������'02v�����8�~���&�z�5W�{�tjc M-��Bn��/)FC�@�LM^�c1*4��TD��`��S�q8�z����b�ֱ�//�`���U֝���d����]�|$��DXw�r����l��~ؐ���8������Wҵ�g92�(E�-5b;��9l�*r�)��҉g�ҕ2�V�l�?!�-�1�&����.ѫ/[λ�}?�́��&��5"G G�`��A����,�1�����Ր�v��P�E��P��b�&�*X��#@c�r34M��hjP�RK3]�,�����7
d�^��{�g�+1����k'w�;�4˗_?�<�o��MS�����w{;�I��;~���-֖jlqڬ�Hڇ�ۺ��rI�=m~s�<,���~��0�yѢ�q��)|��9�O�{����IJ"F������C�7�������!����h�K��
u1Zw���	1�|�C�gr�v%�b��tu���2Iئ�?�Þ�gϮ�x���]�lfٸ�>��{��7Ied�b�߻ݳ��;K.���A!�b�İx��N�P�5YUHk��8�̂����nf�G�VJXhϠ�Â
0%��/R���g"իnZ�L���0�SC���ܻCu��>w3+A��G&���/��q�eҭR�>⮢�=������ݩ���}�M4�z�mq3���M�7�a�\�0i"��AMb�{��S̚�a��H�l|�xׯϨQ�}ǒ��45�5�_c���ils߆����mӯa�X�W���.�]F{�*�k9�y8��h��=*�&s�#��G�lU���̚���D��ς��?,~��h��4�,I[M�''�,B�K#�r
٭zN�[��ݜ�����=��a�b1�Dv>c@� ��x���VW�ߩߪ�Ǥ	顾��cu���
/q:@�����\��wd�z������o+"�թ�dr/���&�S��8w
i�Z�DW�=�x5��iW*Y�j�y8�<�ɱ�v�\s�΀HKV�g�1�©t�
��jU۪Zت��k�����Fc�R�����%�`�"�D��r��EϹ�EX�+�\rV%��q\�V]��{b���������1�q
)|�u���{�u��K?ް�6���c�O�x��ӭV�R��rvM݅���U��uR��}�m�KR���_}u������Bǐ1�E��	�%�� �Æ��]��M�w�fu��Aj՟�����$�4>�3��@��O�+*�v�.3k5�6]�PS`�� FS��ẸA���E��F���=`�m�T\��������}f�g=9���R|VgBc��%��>B�#/�zh�p�S<��k����^�Zn�FrQ/�^�6�1��vZ�́�䢨
[t����DMHk9��	˹����#�H%U�@�l� `�1;����Ӱ���𗍮�{��3����n^s������8�e�:���͓'�V����g���,�^Z7l�� 	��.*���r��Q9��r��E�=]9lw���X9l�k��6�r���*vY���d�X)�J��t
��*#��x�	�*�Zp&��E_��B���l-�Xu�Vu?s��!�*}�QF�;R����`uMyxr����+�c K؅n[�h�)�Yi4�Q�,�X��
�h.͸[��l18���u�v3�����|#C��$��Hf�وdV��d����!I�]�%9QD�('SZ�'��Q.e
 QL���V��sP���D`b����"�8�*�U�M6-"���j]���D���R����0߿��(߿��:�ԇ��T��B��w�?���?���f>��ߡ�F�;J���%��X#x�94�E�!�Y�H�mg	�[���+����KI��-x��,́�����?�����t���h6U8ee�����מ�n�'�7��.�}]{٠�[��Pѧ�L�h��O��.�Hu�c����CQ�J�)��
�XI*�b4]l�I��d/�c��ѱ\h1���9l�1{l�x�h��Wr0�V@ו�״>D����}��7��16Rޯ!RV���c_�.�0�贻<�{�;p�1" �1���e96W3-�S]XHR̪���H����2'�ʒ��YaGO	��G���2	��.����xp���;%�[vlI��6��L�N�Q]'��at�hB�~��Q� �yt'ʕWj�(̖�j�$�wh_
�V?���8��E��Z��;��0��9Fj������|l�4j-*u��"�Or���p)
��>
�~�ۻ�W啗w���*��B�F��� �����#瞋=+~��;س��?�?���� >�n\YwM&=���:�):�;��5_>'1� G�a�\!Б�>>�4`��X:��	h}�įǐ��{��~�v�;��9]�Q�!����_Dݓ�'���р��KN��n�܏�)=�n:���e�"x���ًeR�tv�z8q����lrZ�r�V��*�X���iڕ
���B��D���^�x[��0tݢ���gy��'j���s����X��E庸 ��i��ip,)���A�$��Y��0p� 8�����:�%��`w'��Y
��IJ-4��z¤�����P,�f�����G�P����JLR��6�"\ZG�)@�d�kH%��"��C�޺e\Y��SF��i��{Ox�4��{������7�鍏�����G�H�*yjq����m}��h���� h���iq�R�kMX���`mM��,+8~�5
����� O��=��?G��m�:� ��{�C������Cp��<s%�H+�r��4Q�@GY�)��V��zQ����H��;�����(�?�K����@>��x`o��P���Y8�Α�]p== �䥭q"&�d-Fm�W'(3���<��/���ԁ�Ef�x��qM�{�V,'BWtOE�?���˻��ݙ�X�0~0��Ÿ~�c�(W ʅ(���
�,j�*�
���K��"��{`�������H#J�ʒ��8 �TY��P*#O��5���k*/ٯ)���**��64��m�0���o�W��W+Rx��jx��G����ᒵ�������a�~��ޖ�2�.��XGֽ�bƿ��6�����P#�q�I��4��6�֟wR]��H�q����'/k�,=唵�6�A�}R]yU~nn^ee]רo�z	��g�����
��h/)�d�4�nR����u����5�E��\+�h�h :�g@U���
���Pc�c}�d13=l��nҺZ����b?i��Zz|�A�ܚn+=k�*��t�/c�䎊���=�y��H����I�5���i����Ҿ��SO�ջM�@ӄ�i����&�5UwCiʢ4e�iӡh*�ؙ(�	�")�Ј:Q�,��+��%�\AI"Ow�P��D�chm��+�mW�h+��"mȰ�BF[N����t��_����R�h��wM�Ȍ��Ρ�f��I��Vr}�;2(�E�cA��#�1�CHpCT��"�bVLW紖=+E�P�R(J�F��0Rl�)�UR�-�SW�#CmS��,��N�Ν�s
�����0{���?��ץp#�"����/�����R ����3�����MZsGs@,�D:�҉��	�Zj)�y���vǾ�d8Nb8<^�ŞP�Ύ��R��'�W��WwR��/]�k��]��)�D����������p��۶�V�y�g���<��Jgky%�tʾ�b�ʏ�	���%�Q�%�	3K����R�:e��K�u��[d�ّHߦ��(�h]uǶ6��u՝w�g���G`N鮎T?�a�?���	�D09?��ڏ�S-��Se.��F�FS٦�V����?�5�ySͬ�R��oR���I��N����Xݥ�Щ�uQ���u	�m|%3�����<d���C���>}J�[�j��֢�����|M�N�K����$�u�G<�{���ׂڸ*��{�%�wޥ>u���{�&u���K��Ӈ��o�x�l��En�]��\�$;nl�u�f�ەZwVǺ�;�᤭��uc�nR���%�
`�Y����\3�S��M�N�y(SO�WޞZ4o`'7s�^����=;��B\{0=;��c(p�%�3�0ϓ��N���P��l��I��ԻF��O@�_��x�7j*��=x��e}�FG��h�'����>%��|�|�I���Dj{PjK��� :�YrDS��%N��i#��9�T���\[Dɒfӆ+�]�@��lw
�<��Ţ���q�z�T��{2�V��4N��ӛ�N��s�(Rŀ��i���Ҵ����!$}R��G!�w~&Q�
C�P�$j�V�Ǭ����[�q�aF�8���'�d�;��
ző��r�÷�� ��AG"��~���n!��H߆�*ޜ�i�-%��ڬ���q�i��������s;�k}�A-U���W�m���]�%�p`@v�:qFQ��b�JiͬK���SDh�ȣ��$Q!�ӥ�uQ2��Qo���E3��E=p׭s�ϙ�<P&�~�A�/_��ꐎw�Ijzm�����گ���|�"��ϓWBIuj��7N;�g9�g��3Y&�p�NcL|�v����N<��?JE͂�iD���FSUv��
�š�WIw�Ն3ڎ�X���={����3�BWB�A��I7!/[������4`�	V��b���ʶ�mP'C�I]�@.�Ajԟ��Bؕ��2������������^l����Oo�QrN�M\wE�vt�/>>E۶1��ф�A���;�*�"�Ǖb;�X��D�(`4�㏦����SHViUc�H�i�vX���'��)+�ɞ�Q��+8n���0R��T!/T��m�(//����
!q��(�s���Y7����������;uq���E��hd�r�{�pl�9��z���̦�1g�0�ܼ����rqeAA��7�3�\�;�Kd��t�+E�;�c��YO�<x��l�BP�#9qR��"�t��"�t�
*��t�ĈwMU�����
�����V��9յu�T�V�>qA��X���'/����]&C���jy<T�uax����dN�s���bTl �%����J�V=�w9����yQ��4)�����)6�x��
��~�-�0���q�3F���-ԌR<��� ��)��c=a���.D���z��Kq�s�NDӧl������	N\�ze�?i�%c�8�p@����Bx�͡�I�<��o�I�S�vs�C�juLBkJ7a5AOpx������b_t��2NjC=��ΰ}��3��T,���{�����c�8�=�;Y\���j�L�7`��v~z"`�3��M���\'��0(
G������A?L����j�p2zt�\@r�\�޽)r HF�\�f��<(��4e&����� �g��
ϸ�..�)yr߅Z���8�ꞻ��LL?��┶.0-Jc�.�������c�f�>>��.]���ϻ�Wܻc5Dv�V�N�e��O��-���|qC�/nE_��&�����l6�)�:,�B����E�Ͱ�!�zS���^x����'�f���߳"^~�^1�"��v�����.]fKߙ�_���ܠ�ʸk��t�r�,��#�P�(���/8������Y�G��KXi %�C[ݕR��
Kr����l� 2)���ARJ�R�s��M���ײT,9Ej���0��:ϝ\�����wΰ��z�O�w��tX�O���ʍ;&Pޱ���3���/�dZS���?r��(�V���u�>�EZݠˤM��2�&	gՁfˏ+��*���M;���9���N������ćv����K�ٛ^'��ԥg⛼��t�;Rw_tyi=�D|�"�>:�z3��Hr��j5���yS��C?Lk"q�-~&1�Ϩ/���Q�z���bi��{��T�L��e�M q�Ȩ�H�
�h�9ƒ��XB�	}	�	�&i��`��^ȥT�^I��!�fr,�)H��3#�$/�u�����v6��I72|��γG�_�f�&=/�}���;�VwL]z1�>Jg����vM��K�lX2/0�}Ѥ�wf�I~F�r?t�8�7g۳���;��c�	��;�u���3�ѽ��q�GE{i��N��&SՑt�j���n�n��y�R:X��)5q�j)�"��`�l�D�'�c�#�f�Ua�g!��V!,G�	Nu�[����R0��*�Y�tBC���,V�Љ�:�f�3��t���f�{��'�:�Θ.�f#<�g�$5���oޙ�5��-[����;�]�Ԕ����X��K雿ʉ���E{>�bމ2��6S1�{_�]Ǚ���ܬb��fK*�7��3:��RV~R��g�$�H�W�
��0��[�X�6|N�
�6�ґsz:��6��\(��C0�FiS���a�<F����O젦m�}�����4m�2sf D�.�sj�L���Y혦zDS���s����D�űL3�}?���a��T�I���Nh�u�hKMdg%a�� m�a\���G5uxo�WG��?D��u?�m��˅�������M�Rzn�t��r�wQ�0�ԝ��s�4ɸp?�΋�T�i��Y�������?\ڞG�N�8��q��]܂��E7S�c)'�c�(%y�ח������g�,�W	]�&��,�+��F�@*���$�;�5����9GMtm�i�7���'�J�ax���}�qZz��|W����<����y'������[�d�rF����ʡ�2�@�}R������}.���ǅ?-�3��E)~���?_��5�5�ړ�&� ��h2��]غg��?���]�WS'�?�G���w��?N ��Z��X�.٣Z�J�֩-b~a��D����&0�a'j��s+����m��/���Am�/.��I�S�ܘ.3�%]eTC�2�[iF�M)2���`�	r�@��tJ� q��7�k�齡I>?:�����>�>#��q���}X�/u����[�)�kؽ���@����sk�b���g��	�.�(`�es,�(���P�;l��S�**�+C�|ZB �}.ڄ�X0��������^���>
���]�U��v�a�Ҽh���@3�����y�u�:��<�{r�i����"��f鰢,VB6������w����)Ù`�qݸ(��p�4�H�.Fk1d!�TZ[�c�Tߚ,���������|�����dA�(�+o�F��\ڪ7J�,{�+:as{XY��+�x'��ù���RJ�-8;vt=aQX��<�Z���k\�V�5|���}���n^_u���^����2��3�-�1�����:�y�� ��>�9u�7�����;r۳�����Gn��'-�z�U��ٴ��&����Yņ�dV�9�f����Ӯ$���ɐ����V�o�Z�������tԵG_��T��|���N]�Egy�Z�}�Pl�ʑ^�u����;nҊW/��nŠ�x������̟���i�2�Ԫ��K��{M�:�X��0y6?d�,�!ǝ �?z�4��,������x�tU���I/Ք�6Sz��t��/Z�c_����tڗ2ܗ@ǾT��%@��Tۗ�Ե�9�mq����9����)�=m{ʴI��=��5��]:�)��|�{��No��2m7k;{�@�#= 1��xņ��
I��G9X5�Uhu��n&��ӣ=��NQ3�:����ݬ,,�������re���2���{Uʕc�2����I��C1��ִ�5`L6G�fc`��i(l�`vz�Q;�jq����!-��$p7U<N6P�^�V���-����ئPzi[S#���΍�[�z��l}s��͛����(�������S��-�/pwk�/���y�7�~�
�o舑���?�@�\��h���5wն;u�^�U�m(I�]��9�j3��.wn���`:���!��M�z��<ݟ����i�5��7�ǫ���*��ޭ�~�����͑�����ٹl2��-c���Jn~�{\��G���&m�+*;�9��f�5�>��60��$��p&�n3���dW�\��>G�}N�>��1�@w:�vz�ti����Vk��D��o���>�v��Z̟gwj��vuK��/n)�nK�2���i��֪�\�`,���;.0�7h��0�����|�BͶ�u1�� *�:y¾�T~G,�ΰ��e��î*'��*9��'l.4Mp�f>�U�b^,'��S�S#0lkĥ7��������SɎa�?���1�?�)?�?�Q2룏G�-=��rN� N��.zvs�8�@Q����uH�f���Y{��э�0\D:r�Q	ҰX���� ��J����sL���k-=�rՒޙ�WV���*��y��I��=u²>}Ɨ���G*�Z��K��c����wc`tO��M�����O��C���BZ�V�ܚQ���VR!�ѫ��R�;���OT�ө������R�%?�k�,����O��.R����;!'��r�::�&��

��^�>�_�F9��OT��1�C���jQ��Ԣ����>֣�����HO]�c��6R���)�z�Gt����V�Eou;NUS�_V5iD���l0p�)�������,mb�u�u-W�G�"���첼�C�E5T�z��pf�׺q�:w����8���&Xkz�ۈ���Dq�$��ЗY�"�1L:�sGJ��͏-��������'��չ�}��g`e6��3�7�g���<��87�:�����9�j�������y�����=�Wx.R7Q���'���Ԑ@�����e��IHo��Ӯ�0��������Ph����l �l�94��������x5E��!E�X�?��6z4�xA�Sda0�nm�
�d+<��������Rs�h,�JКn�s-A�T�����{P����zg�AoqGZ������=���M��
�oi�§	��q�NB�����l��?}�q����,[#zԊdb�D+��_���j�����K�6To {���3��=zNi�G���V�{�����pM���u������6������sO|~�:cӳs��m������O�)7�.J1 �}�4<N{7%ւ�ɇ8�zDym�x#��)8O~h�To�����g���F���lS�3��o]�tɕk�/�vc�HeϺ��:�̩_V�E`4TT�i@:���b�{�o��'K�zAr�6�~����F�t��s�[ 3�k��:i��y32�Y�:��}�U��h>�`�A4ݾs����7?�.���؝�� M�'��b��³d�Ν��3�:ٿ3L�]�p��}��9���,Cd}��pν����]�M�ܳkV�22��$�_��l������"�����z�sޟ�;�.�[�Ӕ�<�;���@z��zI)POH�z���^R�+$!����%H>Y�KA��fBҋI���f��U
�ogW��������of?2�cݳ	�rwj�� ���֖Im1;��
��ދ��������HD��2�����<�+Z�2σޡ��˂��>���k+���r88�;�;�qӆ:�9�þ���m���A�����ݦ��V���bߡ�/����2��h+q��
��)E�mz*���Ţ=�C�LLM��X*���=���Ҷ̍`��J�l��;Z�N�G��yC$�~�ד�8w!�=)������4h��s��,��Tꯦ ��T֫�/��׼�~���˂��LFv�X^Q���[��)I�7�Ti�Q\��,���� =^,�D��}� V�I�A��=������+)Hŏ`3!���1!7�n 8Zq�a"��c��t������$<��n���~�^��S��3<��ӯ���x�w�h�n|�����������4W���+�|��oskٱ�Dq�͛�w7E�,v�71�=r�5<z���W�-rz��8���o&�N~�\�tF2*Z�A��S���GWK��ʣ䱽۫6�6a}ţ�t7m|�2#�Ȍ��˱I��R�����Wˋ��N�R����zcD��2?+s��A~5:c�����YZ�R���w?��#Yn`�%
�X��Ro�<����
���nB�>��ٙy������/MRk�:���
_�Ÿ�����+��7��
:伳��ً��$�o�Lm��8��5�Nd�H@N�&�d��SD�Y2I��hڧh�u6E���f�er��ߜ;�4Bg)�c�\��н��u�s�͞D�����~�Q�ͳ�ȸ�_A��Ț�ǒ��Qj��u}��t��=�M�����9��.��~��x&���ԝhY��m�;��\o��<'g��h;��C�1ּ~��������O���VUTO�L�ߞ�Q��7/Q�E�Y_�w]< 
{�������rj���XΪ	~��q���-s��<�w��S x�c`�����_L�͘C�k��0�a�cqbI`��r�U�Ն�����v6v�Mri8�q<��Ǚ�e�5�[�;�{�;�	<'x������V�^����;�o¿@�K�F�B`��A
��WQ/|�x
�1�J�T1���b6s�f.5�2��Ա��Գ��,a)
���[\�
�e��"��uvMi��iFH�5**}FH۽�#��ȫn��j�g�����Z�AE�
uE�
�^��ͦ��5��ag�ߓ�N�:Ug(��]�P��^"�=i����>��>�Tqg/���PX���z�����gD��e��XZY[�X�Z�Y�[V(�V_����0
PACKAGER_BIN;
Packager_Php_Wrapper::$Contents[9]=<<<'PACKAGER_BIN'

w  �u        �   LP�             �      ��M                   M y r i a d   P r o    R e g u l a r   t V e r s i o n   2 . 0 6 2 ; P S   2 . 0 0 0 ; h o t c o n v   1 . 0 . 5 7 ; m a k e o t f . l i b 2 . 0 . 2 1 8 9 5   $ M y r i a d   P r o   R e g u l a r     BSGP                 �� P� P� P����{lg�isut�x&s�44Wo+����N�;��QԣZ�3s��@o9s����m�.���k���	��v�:Q�z|x6k}M<hC(��<��*�"0x�qSZa^II�����N_4,E7;�v��"I�t"��r[wV���3��1U�qi��I
���������|�����XOg�S ���J&�T�U`E�8�B��F,�1� �~�@�]bby��J<*��6��C}y��T'Ο7Oz��ǋ��}3�ʀ@p�K\���H��Q��m�=��@
�щ�%�Q�0E�K}5�j7m�,kH�������<Cق����{�&)5�&�A* l��i�$*�b�s�h�A�j�G

rnq�Dl!T����e�`
�cNZ��� ���l4�0��ۗ��Z�?f�@d�=�
���w�� ��ۏ02j+���H�
����Vr�8d\~N"9�!)h"�Ah"�BA"�7|cp���JQ�������^���.���X�U
�X��a�=����)qW7C,�4KUl�)o���TgހH�-ɂ#�lW��.����$tpZ[b
m��W��7���*-����Չ�����|�
�F����C���b�"0#���Dc'=�`��$�`������"|�t�7�gp������r���������אڣ�4P;#e�!<�5g���*$�R�4�n�T��cŤ*�TH	=�ګ��i%�U��mu<m<���y��=�qԺ��8)��}dQ����>n����=P$P�j�-X�le�D�x
e.�'H��ZJI�\�pMR��p�m�cQ�����A�(�-'��:}Z��cT�7@t���W�y���f���o�K�E]<k���B��j��؈�肗y�-O���0�
�L>֯dc;W�Ef����L����&�S�*s���6uO�׮V���/��*���|�ދ֢�)*s�G�[EI T���]��2��|����h���Ј�s�(D�׏vVY������S8x���)�h��Ѭ�7�¾�n��PprTƪ�1��:����
a�W�8ѕ�ёEA�(��uz�����������+�2�K�-Jp��=��mmz}���Il���˘8��HuD�Z�5�Y/e�1;����L�L���| "Z���O��l`�B��bk����:F�adWy�X��� �T�˖)6���ʶ���+�(~��^��r cv\-1E^�A�=�(������S��d�#�
gbwP\}�.�'y��c�L�d���Z��Z�&qȈwia���u�e7�2Q�Z�f�d^شɍŨ��c-]#�.Jn��#�腈ßIH��W���pܵeh�nvaU��0���+��СP�Qӎa!�]�LMz�}L܊��Mx�j�}"J(�NF�Z����4�A/݆��h�]@�ؼ6��!�ʖ<�Zߣϡ� r	`ต,�r�s_�Qg�qzɺ���׋_��K`y��q�X�Ԋ-Ti��T# 1pNz��p� U�jq��D�ô�᏷�+�f�����q�"�?�]���0�`���BA�7G׋�99V���s��s6`}msDjV8Ro��&���>�o���g�B5X~cҀ����*,�iӞ��XM�RֈF%_�V��ru��+�a��7�&���k��قA��tb�zZV�1%
��
��0BO��2���rtbo���թ0o�'̸y��.t��ۢ�)���YV�M�Ő����(l� ��o�S���'A���1[�侨�m�CVZ�y,��6��Q~+p��+L ��g� �[�>;��!� �������i �N�&���y�������$��ʇp(1�sb�*	� ;�9�p�C��ţ�t9y9
�2Z$��C_��~��xT� R�ex$e���5Yh�X>�w��B�-)Pob8`�qh��7���Q�����Ș�/�	��e��24��2-�6�FY����������pq�rS��z�Ƃa	��d݄��3ɥA3Q�~=��t��)�->�%L� 괮E�w?H��� %�L���#���#
F��0�:�XrFDgo�i%o �81L��Z�y| F��W��8�(�^�4�t�=5�~h��ߤB	 ���3��Bl��[d>�I ]x��L�/�38|>JZ��â�(6�v�y�,��0D�<�9}��:*�z�� �6q=VQ��d�т�o�$�')VA�B��� �
�*֕��+ѱ�b�^+�
X����4��M2��|JĶ�6bΨĹ�1
�P�*�����O?%���sٚ-��M�!
�*���WH^�q(�4�e�@�@i2��8؉��E܀���|&����W|p���ox`���.�|{��K�
!��C��K��4B�Bf���`�%s�1(�}���q� M��~L�\ϭ���wy*��/x��I�R�ʖa���ړ]S�|³)0�i���_i���V镆XKT8*�kh�F��5�`w��ނ�/�"|�<���f-���-��4P҉"���ބ�k�V�N7��<�%!FC[�D�� �A�r������F�(�C�U��47*����#�5"�L
�CL� b� H,@�%*'��
9e1���$� o~S z�M�BMܝ�@]�C��K�����0��%OE��O	��k<�?���P��tfU���aqM��j1��Bo�OL�EX���G �J�DJ�$����bO3{����N�D��-D��Di���6hb��n����Z��Y��Nu�؜�����j��۬Юr&�D��� �'D
�-R$0�
 Ŷ	��-/���
z u!�AwOž���yސr-��p1C`(�~�Ts%qZ$�xk#s���O�bU�eTo��q騻���b�sUf]�"�7@�ķ��$�i{�KKƄDUV��<Ia��`�40HC'3ۖ�c�V��A�h��X��F��#w�ɍ8G�K"u�8#&p�!v#�FH�&��f�0��3��4�*"k]�=�٨^���e^:ٕ⣆QEQx���]W����Nh�>I?怋RA��/>[���|�6�#95ΝR��f�\>/��NG�k��c0b��J��s��#�)b���X/�Rn��j*6��1 [��������]����<���T�5
�B�A��U�-�����}Ȗ>S�!R�C�����t�����N_r����(pʐ?�0+%K��4ɖ��n�����h�<�зOAb���*�=r!7e���K8�Y��\{��T�1���`��*N����ʭ���l�ֳ�,��bf��%뛍�\ i��"�2ͨ�"�<�f�3�u1�!�Z=_�ga	6^�ڛ�1��f��l�"_&���`�-�d�����7�X���_#|C���3Sy�����sg�cڙ�Za�c;�|���m��Y�_/"K��0Q��.6+�`��x'݀���
?Ms)�W޹�:��J7lU}Ζ�/,��E'XJV׫�()��j@ɞ��;[e�t��!o��&��'�8J~�v��!�4+R�����9pu�k�̱��V5A�����ZUN
�2�$:�ν!S`,�Z =5Jp{jI�s$K��ϫA�]]�k�B�1yP�H!��R1i(� &��qcC`��#��0M]�yv��x<�j��G�|ɂYN�hJƌ�WԲ���ev;tru�p�[�j���+�Է����ܩ�`�OMU*�y��H�TYkE�n&�@���ۀgoG]D��*��>_#�:��~�aT6�l����!�m��b��6�����aY!je�r����L�FG���oB�ARP���=�%���
��bYJ�����u<i��T��PU�8#p��pB���8��v�@>��
ba���L��{�y=���V;-!1�҃���Ly]�h|E�4��Tb%��pDS���`��JO͒��ۮ���I"f_o ����E��5q�|HJ��?[�#��BRcb��<��6dRrz�WS�"��
>�q7�����L�� A4�F=��$s!Y�<��
��IC��8�ba�9����ϩ��8�4�/.�4^x"��4�QЪ�SZ�"Z����D'� F4�
drr�����JՓ�����CR�a��1��q��7ݨ�i�B�d潦�+D�[G��r�|�C�Ƃ!贳���#���F�
��~9Pdb�%�9|�g~x��\ܱ`*�6]�n>�C	`
�-UƔU��Yt"��1�g��xM[���u
4XO�3Dr��d@ep/�z�����-��2@���0��.S���8�:��j�R<�.	hM�Dʺe����	8f�S�LJ~^J!	?��O,�ӆG^��
�xr]�ɯD�O`�*1C@��TϨO��&W�h0V��۸HF2�a��:��ه������3�
� �G)Ѩ�0pf���ǽ�4�D.zx������||M��yM�0��0+��z��BH��;�_�Ֆ���&�Z�Fঌ��^����Ba�_J�U��)�ǯȠ	���-�Dמ���@��I	O����+��i�a0Z�����{#���1�VRl�Ct�(�?U2����aҊ�e ��E��K�J��-"a6a���C�Os�=<��S7�Q�(���R3d�/p�����a����F�b�z�c�i*�iB}x��G  ���B3�
�gA97�0t��%v"![eZ�hb��]t��@R�މp ��-J"Lv `Cy07,%Չ1W#�]B���v)�Ǥ&ݞT���6���=�V�Ͳ��������]T$Ȃ -�����r���."�=��$��ڥ%K�٤L%�*Nc���B$���۩��.�����yg��~�{�I�_J�DcS���b�H��vʮ��Q�>d�J(�7�G�����|��V
0jZDf�~�k����fD�
�T\�o["��ݪ�4+:F����q�%���,T���S����O){��;8�
C?�n-�]/����K�NG�D0��8Y�g
����~�C�*.X����^ ���x�ІA�Pd���y��: ���\��2Y��-=[=�!V�d��{?<�p(tu�� 4���A��E��ɲ���;N�X�f|W2�d�rD0?gQ��RI�{��av>@/���� +;1��5�gS���1��oJ���D�!�H���v���
4ȋ�X�E��H	���;O�
�'�Q���p%�ȉ��/��ZBg�����ƛ)�@�vrg+�NN�er�o���/Q ��²Jo���*�Փ8��n~�u�4����~m��6VU�% �_C��}�+�=�X��S�i�j��:6���;�T9��U��F�:�:����!�c/:,�Ԛ���t�(��8Ԟ
���� ��Q����Ԏ��eD��,��:���n���#�c��)j�s��c�~%���s$�H��肷�6��J^�1%�B�R`�<�h
�0��W�v��Ra�%�8En7�1&���)��n��Ny�A��H�g�Y�0����(�|���hJS��YT*1���Z�_PA'����,�8�в����}Ĕ���¼g�=²��W�}�����vt�BD�+Ր�О	���S�I؎rA���>w05J�� ���ɱ�����fo�������P�:�ﱿ�:���!�V(���j	R,_�)]�_eg�:B#g~[�Re��L��� �iCI��U��̏*���`C��a�>9X`��K06���W��q����a8W!=���o�}R%'u�ð�� ��v� ,82�Iɂ,��8;Qx��}�����[��"�慠Y�z&
x��+ ݂�~�ܖp����;������5ڄ�߷����.L0e�Bdr��(I����fℶl�:�D����	S?=�`���mFca��}�Mk
���cH\�
��:7s@�n�p�~�FBqƜ~�����ɒY��3�sJ`BA3N������
��T�$��G�����7ҘM�Z�}oU&e r4��D)�8_�M�@��DRF���DVB,�s��["�Z�+z�'��5���NA�KDp>���P��ar(l\�n��'�d��Q���a6��y�qk)�6��	���.�|����TM�;Pbh��L����C ތ����� E�1����㐅ch��q�w�lV�������	E!;Q���)��%&D_W 5�{&�R�کO�9�������6�Y��'��KL��៏�w���?�u@A f ��MIr�ƌ��� �+��c��b.n�*`{& Dg��:��&lV^�{=%�9Ut6����x4"�A�����<FQ#5�NBߢ����"�&m���+�#�&�ھ*]�tBDTɼS�L�%��l��Դ����p���T���Ǭ�(���K�r��<���>�K�xB4W�ɕ ��B�((c���p�$w��{��ӌ���!��6@Lf�L�h%�ߒJ�F{�4�@L�|��6?/ɀ���n��U���i����?Pާ]��l�-�"�Q�y�)I*Dj�X�@,lB&qKR�����ĠD� �*nA �!7��N2סn�&��@���]�}�;�%IR�F�"X?1AG;�*a^s�#X�����3�×<:$�q=�uZ����y�I
�ڤ����=���W�~�"�b{|�
���6� c����y
.*�� ��k 'Q��0� G4�t��=B%��<��+A��'p�&��D:a��p�'k�)�if�`]o��(���"Jp��,��6��\qF�����;�G�f`����9 ��v����Р�;)��0a,V_�.Ō��
��%D]Xx�
%���09V�, �{��W�-�p	��]�2��<�R�_8Nht����S�@�&�X�W�"kD
9�[�>0/���'|)��x��ObD
ݨ)�u��p��wh8%H\�W��H��J�|�M�ݙ��2� �iG��`e	�]
MdyFL�� .l�?;l�2�,�:�d��)�8��P�|$�L�x�_�b�mg6������xp:�%N ð6���Ve�cng����O�z��5/H�ء1�/� ��R�ZF���-'��E.E0�!�ؚ���p
k�o��xm��h���{R��'U�ox-�H��߳�ο��qӊ;qn��{�
�tC��B�oV���XI�>�]Y��w���X��'�)~,7�����@�
A`���
P�B�Q5�*טlTDQ|=�3mB����eC4��/@g0!*�nK�I��F%�R��2+��!�_�P]���^&5�&BW��:(���L�
h����7��H"�!ע$o��S��7P�<�xI�#�
�􄣧.EE��ȼķ�h�
��_-V��Y%�E����b��ڤ>.���4a��i�@S�PcߓA�#a`"0\h@���"������힩s�8	�]��t�
S{����3�78���k˞�{��@�j=��REh�lJ��*XH�ia�/B�A�5�Gl���=ol�a�kUZɻ��яDB����ҽQ!�$��4[ t�,/||�Ϟ%������cB�O�@x$�"��#J��P�����Le�:���6�PҴB��)����b_h���=��w�ǶoHY���kB!o\��R����o���	x�}�z( ��fZ��%\m�5D�{��3��Cs�������w�ź��r����� &@��
K�ro�l<������|H�
aXR���pX�ɀ�Civ~��GM1f�}m��^pC����h@�:�첷�ݡ��k��D:� �h��,�ޘG���)�Xg���S=8����?u,���+�`�"7�q�>�ڹ��J���[��8I�9@x��mY<�+�s/���3�
̰�� ё�D;����0fڛ�3I��/T�^<S�.��`8�{WN#��dq#�6��,u�I�4wGX+G@�DCq��:��s�|&(Λ�� 5H� ,@���E2A���f��k���ڪ4�	s6O�ݱ
�x|7���5@��VQ�D�r/��,�eB�%�e/�BԱ���
DvE��=��0P�dv� �4��Y^��	�y�����������`�1�.$�7�s9��Mڊj�
\X�0�8�1�5)��J�7�Q�,�6�c�6SO^�X6�`�4B��[��;��v������@�ܑ��r -r�.�^�A.s��?caM�C,�>1ɟFQj���$��v�Ar��T��t8k�T *�%�BW!�^gi@ϒ�ȶ��
�����Q�����pBD�S�iѝ�q@��g�=�d&��ŏ�1��g}�]�2��\𣻴0�$3$�4ӣ�{�$�n^J�x}�� �"�-)�&�V��d"Ԟ�u��ड:Tsz,�u��Uu���
��rX$)�Y =YXL� ��~����/hzTUD���l�s2�HOG���.�L���RF%f`���0�)ϗ´��{ �aa��PDTz}޻�D*U����F��/XX����3ΐ�bA �w��k����]�`����
�.^�$���:�g]>��i���E����C��g��[޾�{`�Y����G�(���gE�L�̐���N��k>������E��+�fV��M�эI�?@���;+�63���
jF�v�	1��äi��fP�]����s�;wE��fy_`}ܖ��8�+�h�J�_B��km��U����<�T.���Gα��q[�!��>"~��H1cJ�h�L���z��^�ֵQS����D� ,�;�� ]�Lќ_E��_�E�1��#7w����~��ȭƾ������=��
�Kf�+o�eR�I�ᴦ�@�l�bKF��ѽ����C�"��W���UUC��Dt��+R�(�=!�������1sI��#�ȉ\�r��Xh#�\���wi�"�j�&�\ص
z���ܩ�"���;�ٿ�����,�{�f��~�b�v>�n��ހť1��s�� X7��UX����v_��C�:�P�<��I� &�炊*,���^���;/V�02�� ��(�^wq����Q!ֵ<[��+Z|�>)�Γ\^�R����fJ�����Q�&��L~b�Gd��
���pg��n�VC�3��V�1�w|��L�C
(uA_�>8D��A�~)9��I	N�������`/�Z�����o��6kXYL\̨Z�VqK���|��ռր�>�	m ���B��> v�<��i���>5�hjm�ٱ��5��)�6#-FYIwv��Z$I�=�hS��'�f�'�(��z��<N�S��@bQ�Y�s��`G����� )Q@�2=(d�x���.bjf��ER?�R��C�:��� ���t������Q�Ta6�<,�M'�9c!2H�G���w!�0H�
�q*�:LE�o���#��f���fADnj���Ǝ��/�y;]S����Q�Yw�Z����M��C>&���P�X�	��$F�8i��F��;x���5��%
p^��hj� �$��:w~���g��wC�0�`���I�+x����wE���Gԏr���<�Ay�6��qŬp�-qO�� I�v��a �ƅ!�^(l����C�;����+J����3<��3�T�yq��׸
9�6i�;0���x޷h�B���u�KЛ`�A��� Ds�b�s\������S��N�`�*�O4�����K�zB��׍������3�O��%�_��l�ш2�<`h�8�2H� ���
"/���/�� ]�h�}���#�߄X�(o�fs˿7]�)؉ ��Vn�8%�L'Q����z8S"��� �EE^~�(^cl���Sag<�� �Bp�F E�̅V(
J��JϼJ�k]�m�A��rX��Ț'&�B$�d���M���F�
*� 	u��Bh�\5�t9,4H�8@��[�Ivv�}Y$gvC�
_�%��s�V;�B�r����F'�q5$a
�
X˗CT�f*(3����r���KY�µNV0I���w������q�Z�m �(�d��M����Z���a��,����$�7p�&����425[�N�Iin�S�7?I��hK�
A�VvNH)s���7p�ʐ-g�u/tթ�@�a�P�2�ܪ��,c�l
����e/�����8�'��tX %i�՜�u��:F����H������D4}�	qNS@t��L@Ǝ(�A*����xl��@X�'����r�Im�y��r�X佮�wgL_<3	��$Ah�� ~p��M�X�rY�8���E�g���0â� ��a��6@t]�(Xw��(�R�Z.�8:H���`��-��#���M����O`�H�XC�٪�i��4[�z�K����Nd��f� ��.�\�f���^80�K���D��r&�dɉ�D~Q�@�����&�=��"� ����&Z��,gsB�N�vlr���e��� �K�̷�	zC�sHQ�E�q+�$�0-,y5�\����b0�Hɘ�%��@�F�J�MBm�8ޚ"��UM����
�pc��Pb�� �
�6�ō�̇*�\͘r��@SU� ˸�&�b[2v��@�`a�d��d�����K�8�E u�%�Â�j<zӰ崖��W5�¢�����_~�O�U˴�n�鴞��"��8u��Ql���+R٘�Lk���%}��f~^��{p�#i��ա�������_�kk�ƀ&���Q4fu��Ε��
B�����5ٮ;�^}z���H������<�r_��5�	� |����a�&�jƒ+�s1y� ���m��d�����@�6b���SS7�쮲@z�_ �y��
�Zt���
�m������ �u�N�=�
�ex���E�=���R?�@)���u�� )�OM[��ʘ��=}]"�:t���q�o����
��8Q0��0�Z&���(蜐����[�v0
2��1�a' � !��������R/�'�x4�W��p ��P�"���iŻ��N��xdCD,_���x;{�M>�&EG<���x)� ��0D���Y�
g�ꯖb4@t�`ҙ!�
=	��_<m[(�AU��n�m��Q_%�L^\��`�w��!s��ـ������A)����h,����!h, ����r�A�L���z"���)�`2��j��_:
;YP��� �-�Q�G��@d&A��sJ",fF:]�����`ؠ3��ӻr��,���X����(5A�'��O�e�9�M���YvaH+T䥬�%���lZP	��]��$�q��}(O�Rw�Ά��J>���u�6۟�.����7���N���ݢ�>lɹL�^��
yz����8�0{���5$,�2�D>S1-�(y�P5f�BHB�hNY�{��E��A�kJ(ݮ���ϧg�Fu{�t�0 Q��lA��T�,
	��t5�8%�;�����*w�4���&
Y#tOr��oFy��j��q[ГvrǁÃs
B�9�s롯�����W��5�Y�ՖП�y�Y�q�����ۊ�=R$+�Ma�U�ΞJ*�h	[�"=���,mX�+���8r��\W�WQ��Z�
��h��v��g������nt�^�O�'g�I;�	ǌ�u;��$�ܥ��|�]&� ����r��<99�g:^(�0-s2�2�șR8*�t0`H��G� �D��*�Cr��?�{��'��Ht�3/hƑ1��"H��V.R���c(q�J2�Ck���z4���S����N2[�Gc������A�Qey�I����AD��3�+kDkѽ�-��"F�6���&��vr�nП 
�Q�J�Rw�e����,�f:Q@2��wZ�����)2�s�̥��!������J�/s/�� �ʄ�?�!�UdP[;XX^�jI07�!z������&m�J�kY��d�
�v�`����s9�'MS����T �u�Ս�?�L��S֥����KͳT���9���Zo�LI��R�@
y��y�J'H?&G��2t�PSi�$p��Q�> �V�|N�ř�r��W-+E�� ����A~Jf�J�.J` ��R��,��z����Q�Q�L�	�ػ꼁����&���g*^��s����s�� �뾵���1�ˑ����Es�� Ӿ( @
����
$�K�(������XeY�l!Q��FW>�=uM6�U��o��I9�\�l��qt�~�L�B&Rm�����s�va���;����`D?��`ʑ˰h:�W����`�p��x��RwI��80�q�����Ē��t���R	I�LI���e+�""u!��V�z�k��w 1��7���"$G���'�OF�/���y'�NhV��KY�vjn�ȳE�ᕬ�Y�6���`.��*j�BpcIA|5���0�d�)�������ȯsN�<=DP��'B���Aӳ���ՊB��Ƀ�J W)]x�"��.��o���b�AEYp�����殭�W�;2�
�A@���l~�^�� eZZu��2�@�| �ύ�! ��`����[�U���.��KJfb��la>`�Ⱥ7�Y�1�~Yz�4�I�w�T�8�O2O���B�Z�%����
^QU�����wx�"����,Ǽ8�H�*��	�Ǚ��Ͳ�3I$�Ah�Q�Ri��`�eހ\)�\���㈟d�ZK%���1q�Z�'���z�}3ꬃ�+.�W� Y�ѐ-c�D�H�rJſ�/K� 4ˁ͢�Y��=��:�����1��v��#�э�Hs���(]@N̝Z�����ȧ��S�xf��:�L2��|����TI��L�ZwǷ�D�B6`���,b���"����͋�DtEH#;�D *�K5�s�r5
�GD�}�`��y�U�XSl���������)�����K5�{ϡ`�ѡ56�%30(b���=hf�2d���C@�
tf�D+&d�68�P��K5�:[�"?�o��$tۉ�j�h�5I�SU����� +5�҉��*L��bd"�[�Ϗa��E`��xi�/�np�uc�+���E���T)�p4���r]�˗��L���)viET��p�
x��N^-���B�X��
va
�-�P/%!�$F(&'���1��2�! 2 O@�p�����X�-/��������K�	�
c���LC��P9�C�e�8"�R��[�@��
�gX�lCB�n�a���I��"��g�?!���B�R,���+"*^���=x�k�h���
��|,�o��XP���� � s�)�E���0��� a	$�}c� �X��/�L��v��ٿ���P#��:1�KH�7�c�,���Lā�W�>�ِr$K���Z$Z��D��3ih��(�f�P�%�a7Ȃ&֝~�	H�s����cD-��`}�<�����?�7�Rd-�CF�C!�H�O�Tx�Q��`��h��fc�^�����XaR����t�!�Ti���P�	H�99ލ
|s��ۓ��e�`�
q�W�J��$�@I��SGZЪ�|��S��a�7��Y�PS�%zĜ�$�c��54i \G}��G�[y�d��&��./�#D����U�B��hHB�Me+:%�0�؃H���2���m&�w	75�%Yl1�iU;�2�w�%#��@;D���d%�s�QP)%�[�s���h��AET�h�#�&�ƶ�^��o��QB1�ib��844�V� ��� Q��k��E� b��D)d��W걒S�ȃZ@]f�ad^¶�up'��}�b��ɦ]o�(��h_Z��949����*�P֌m��%����4�:"L����h2����I`sCkƦנP�f��R/fc��ꢫw�_^�m��7�����]
PACKAGER_BIN;
Packager_Php_Wrapper::$Contents[10]=<<<'PACKAGER_GZIP'
�      ��k�,Gr�]������Lq��EҴl]��(����a7��Eqv	?~�㜓Y�3�������~ n�LuUVfddĉ?�����ez��W_�՗?��=�M_��|����W_~����?�����������?��_L_?�b������?��������g����ӿ�w9�'����/?�>:��/�����׿~�ux��W���/��/�_|���v�Ǹо���̹���ۏ&{nm����������d��g�'o?Y?���}�}�G?{���_�?���:}������_}��ۿ��W���_���_}4����ߜ>y�|������N���g��}����闟�������#?�����ן~��j���?��~�<%�?�>�`����/����������#b������ÿ��?ڨ>��-������ۅ��~3�?��/�d~ߋ����ls���ɜ�s�<�y
ejumi
uIe����t
u
پu�ir���&�ͮ��7.���+g���)8����b������%�>p�&�\>��/S�����7obh�oxT��V�?�^��\�S���o�.�g?�K�Sp������rIu�������>����R��}��'������/����i�s��_�Wۀ��vQp�=>{_�/y��= �/�z{e秔���Q������)�q��R��,і����SZ�l�q�)��
Oiq��j5aȳ]R�}rɄ�_�o�fv��{-��EZN��`�`�2���W�O�?���1�b7r&E��w}�>�y��מ�k6����_���ɮ�v�R4��Nfg*6U��W�b
�����^O��f��h�0� �I����:���a��>iqOu��j����A߱'<-g�h_�)�k�?cq�����Z�<v�����!g�����_�k	IK��7��8۽l�ն��E��;g��!��ü��%-|��xI�4�������0���e,_*r�LR�S��[ۛ.Hq��p��@����Cn�}�}i15�o�xgÞm}O�֦X�08n�f��-�Ozψۭ��tu��s�J��%>�&�Ίm
�U3d�{��;5�N���z=ɀ�ʶ�B
�ʣ�p�@�t#�k(u:����!�gGC���sZ0�P+׼6j=�	��{����V����p0;��^+�e��L#aO�$꿡����?5�6כ�0�g��%x��9]lt6��.[�`n���s�o�8��f/�|��`b��v����/f�b.��9�>���
ln2(Xfz��_�
�� i��S�
?@(�4��g:xY��p �nE�e���)����� Ap��	�܎w�vp�y)\�!4���Fl���:�k�n����'����Dn�f���h�t���r�h�UF*��)>��^:g8o渝�88t:2a���K�\�@��N](ݏ�o
A�|�Fg��N������҄�U�LTZة�۔acS&�.߉W��i�ef�~u�b��:��1me�x.KJ7#���8�*y�M2�G��H�Kh��N�mE_g�9ZTE=<��╳��9�p�w��V�DC(����x/,�bKJǽ�	��j��ݏ�91\�L�Go��5K �T%4���� ?Q���D#������2�:��Q�
z�����B�RЛR�{����bp���Ѭ��M���p�X�������s^�l*� 1�q�Ovq�g~��}C��B;�������c�)f:f�
Nl���Cg�ۏ�t���<�����HB�Q�߬����[-L}G0�Ol�.�s0q����ɏ!`�NX�3i�����ІÔ{�|`cNE�jz��*;̓���p
���~�����-�(�rp4�L���m�W�tt�|�j/�cCG��8��T̾���=<W�m��w�C�xn���zp��Bc
sz��9׆�=]�V�K/���f��mP��

�	x��"���,ҟ� 5��%�IP(ǁ�oH�r !��QW�LK�p�t%��
W�����*�.QP
�*�z�6��D�a+������顅�`*T�GBMA�)<�x�S��
DuL�]Gq������t�o��������w�j�l1?"�io�w4��7���O_ݾ�vF�9F�5�ʅ-;�8�XP�r��]��vd�����f�'�K�d`uּ9d<�D�99mz�ۓ��H�%��8�ܼ�lI3��	�8��P�j��7Q�c����&O�@���b*0ϊ�pG�=�8=��:�E8/	^k�Q�ӻ�E(��«绻9^w�
������ٖ`����/�&����S�3"^��/���U_K`��;�4��S�rվ
��j�q�� Ȏ��n����Z��D�;�0�7o��Z�+ړ[�k�cq�6��0��ƼЄ�� ���v*"H�q�2���
��k��U� Y��wz2v�0�%ͱ�U�I���'�s�X�4����'�h>�7o�==�p��\hEo�I�5
Y�A2o��t�J��]ȸ �5��
�l�)��T�%��z[ �㘂����uD��"A���3R�K8�mT���C��M\|-���Y�N�����#��;J\��N�	eXZ�`~�s>�"��4>%3X3������8��{Z�w����ak5wN��i���S�������N$\�n9�/4�Ih��2�-g�i����&0r�Bh0��v�ެ�-m43&�� ��3f��37rd�F�B-�˔6[���C�f�`���V"u�l���p�̒�����.f���F��W���ռ�'�S?.xi���mb�6�.ޟ��v7���Vϖ���sq����]!��~�̵��N�t����5�Շ���>���ڏ��c��Nb`
 lov��<h3������.����G��!�V��wМ-�����.����a��@��h6�i�H�
ۺ҆�������݅ϱ�fD�r���3-dY�D�d����9
�l
��D�;�r�ݢۭ3R�OAD6�/���S�9đ>����Aq�ڔ������Ԑ��-+��
n�sY5o'���;�����f���r����뗓C[�Ʊ�o�����p���pB@K�=����Dx3Ւ6:,Y�C��a�Ӳ�]!V����
�G��+,��;��aE|�$1�#�DR玤B���!��2�	)	!�)��O&3eP	�M����'�FZN��_��TN/ŗ'[1q��M1��p�S2�r�_����t+�P/��1� ��UȢnҼ"q���鴇b���B��3�0��I�Wu��7E��ް�kJ�GCn#&}���7s���qJ��=��o��3�?<�-�R�-�A���wK�8
0��f&���;Y���� ߑVC")el��:��tr`��Qk����;?w�!�s�-�f�֘�� ���L�I�99_�OM�Ij]�}�^0m��1vm��";�!��Z%�
7~�ݷ��[I@K�a��� �I����Ex���5N������fR$��ၔ���~*��~�	'�Hl?��LG"��8(��,LTi��pԱ�Uc�BLOng�zt!�����J�������x��,@�l�S��9(�J$�� L���F���xM�1-D�f�7v��Y�v�ƭ�k�S_W�0�H��W���-���J�X$�6j�5�j�f�+�&:�p��X��v�[����L1Ѡ{pu�_� �Wt����S*���I3	�����o͐}��(Dwo�1�I^$�����نcc����O	]��+V˯H�I�2�>�����5�d��:���VA"�9A�6w��Gѩ�%$��L!���VQ:w�t�8��Q;�*�������t�v�ɂ����-�X�616�(��Y��]�������t5��Q\��ݦ�<
��
|r��h�ʃ�ʳ*p��(����Jڕ�"�_�88��F6�g�'���,
�.!x�o$�׳���f�{��y���ti�'�-u[}'��L��2��ġ^΋�i���wl���	Z2����sj�1d������|$�s��*��J�@s�y��@R�㶒�lי�f����v���f_�;d�ʫ}�zi�����1�	�|��HO"ф�OwL�������Tދ��l1{)ߝqey�}��$$,��]���^Ȋ�fsϻ�c�4pd��P;�*�߶-�U�$�~} ��JGU"�#H1?uO���l��ń�|0�P�����Bm_�A���-Ei�⋕��)�{�Z��i]p5�
d
fV��{��@e�
�>B��PH�n��Ĕ.��j��f���?��g����kϘZT	 g�W��1�����LP<!��l��f?
�||�ga.6�*�A���1y�x^�u��]}������:�ߵ�O�Z̈́��l#:�O�\�!X��{��*�L�qL*�J6�&
�3o��x&" �5�8p�}{r�W�Dv�W��|��v&|�� 0|��Q�Cg�����%V^k���5�	�)$�-CS\o�;lA��f���~��`4*3A��!.�/�}�Y]DW�����l�&ɅN]L]m�N� ���(=4�ĉ��p,+�C׊!�z])��U���DU���J�N9��*�YC�V�L�������2� b3h"u82�~$e3E1h�4̍�l%<����� 3	�)��9*PY�:���~a�,��k��{�
��@ Z�Aq��j2�0UDj�a�Ӝ��!��9�J�I#�&�Xջ����~�� ���X�n+hF>�AK8;c���2HU23H�RB%��,�Izz4��(#�ƭ�ixW+�h���]=������L(B�s׾�k�yL�=@SD���}���ٿ6t����S�+uE���͊�����p���
z7���^��!	���������3����s��|���Y�M�ix[��"���E��1�ԋ�9�q���ACM��Y�Â��Нo�4# d�-��Q�A�-s�&�)���q��F�/�p��:g���������Cl襴W�3cYUtn�E�Ɍ8q�K���\DDQY)>����`b�,���0'&W�
T�J@�}�F.��Q�'7kj̽��|��͢�]O�
����E
l�@��/��l�Z%�G��뒵e��T0eS/�l'�"kn*�CsU1��� C�1�L����J}�S�I��"%{U���)��ug@C>m넃��ׯi�y�7� ߘ��8*ff11���sC�8�[�&R#bώVֺjT�h)>.�B�5��#�L��R&(Æ��ผT�b�+�A��g��2D�ʶ��4�|Ō;D�i�Y/ޅ��=`e�����i$#��Dț 1ߟ$�������__K�� �|�Y2��zA
�zx�����Tz]I?u��7,L�Ap��:���`�ȟ/W6��&Hb�S G�ϩ�&?*��w{+c;�0��̡&�xb���%�"����DL��3<��'�
��n�g���K��nG�|����:��*:�0�#�,2�X
PAQ��q�F�-+k�I�iL�`��)���_���	yއ�f�
�NNE�S"$�EY��=�%�j�ʳ�fם��&�|ڣ����dQ��V����W�`�ȴAlB�i��`-��;2f��r
�E6�i�,ȣ�{Rl:�hFB��Ʋ����l����b$�⬼�hbB�%�8���w��Wr���3w�88r��c�v!��f� Z��_�
�����.�(<g��K����q��h�˞}h������{����B�K�FbL�LָC���Pw����$2o.*���I'Y� �J�p�#�K[Po�C(�L��֜d�GŃz��
�4�{��5��"�� �ǉ9�E���Ě
8�D
%��c�.~�MK/<��;[x~�a���d�`ϸ��) {��|X���*��Q�o�c��A��8�!Jov��G#A軫��f"a�vFio��ǉ��������6}
N=׃\�D��*�$�,o�=M�o����Gg��~N�A)����̅�ds~#K�9N���$���DɎIE�&�����ĸ:¸L�:%���.2�ZA��0���a����E9��,��(�ԺI)��1D�Y�*1�*����N�o�pQx]�ʢC�;�,�Bk�u��ĜI�%a�J�Z���4��<&���#Ә�y.#j���.,�-j�5����2s;�a�Igh�-�8�����D����ʓ'f�P�f�N�2;�T73���i(V�r;IU���H���1'��'U��+��VUWU�:L,"������%���{]��E#�F����zU%��f� U�dz2
���V�����{�N(z	��@׌�<J!=`����B�XP�����-<�����)�:��*�`�|~�/{���i�`�r�i�v�j��S���l��
�:�����S�����4�'�եH:�%� �r/	'2C�S۝��^1�?�z��gE��DgLݶ�9�v0��g�Va�+�|��d[��ٛ�C��R�ڶ'UmS�,��i�V�(2�9���5�aھ[XDǥX�K�y�����z�)���*�0��V�Ur��0|����Bp5EB�H~@�Xy��b%eΉPf�5*���
�ZO�ԇ�W��^d̑{���/�;~��q��O����� I��N ,�D&��di�����.�'�4{�x.m��B�u:w K9:�ºyч�,�](�]1d�s=:Ӄt~Oٞ��3�D�lV-�6�����J��xjv��L+�k�XT�jX!
?�4U�������F[�@��� ʵ@r�=��P�*!��M`���;�S�q�diC͸^wҳ�!h�wUH }�����0�O�tF�jƎ�ߔ�U�Q�@ ZY�)��D�� ��	bA�>2�*,�[�0�2BH$}�.U��hvf	Ff%��߼��F%�l ��a޻�x"�i?]��� �S��|t��.~0��;E��*��^��l�k5Xg<x��5���S��4+����*��v�)��e��x�[|���D�߆�(��1�-��'6�Cb��J��: �mUr4H@"K���v�숦��q��h^�l"
��C�QHD�]����*��1
 VH,��QF����n��g�i}��`�@�bK4d�P�Vi(�Q� ��"~H:d�H��&�X�R�J�����k��k�����"���'|�fuڵLL��gQY���z��Y�S�ջ饰�D�N��=�mi�n22"���Mi�ya6���׎���<$-ڶ�bW'u�	F�*���<�*��2��b��*���g�e�x�Є #�y}�
������8;�L���
S^��Nw��!�] �;����Oʪ�0�^#�����E��E�Uc��?�2�J��Ԏd�|>��o��A:u����@�.[}�D���,���?��?�������JsGJ�+$wz(�pV�͉R��b�7�	�
U���U�j�o��0#ʼ	��%�n
8@��٫.!R.3{�t���es
#ǒ�Im�T���q���@�HM�@ߐ�,֩���s�is�Y�mHi֤�p	�t������Ȕ�m��Ws'V����H� U օnP�G�"�00���yq��\�Y�;DI-V4B1I�8fgfeYl����Oip>j�Ԏm���
k"
��*��'�kL欢s�^*Mis���mYQ	����1:�ٞ2��p��|l{҇j��ʑ�Ͳ�s{U6��d���F�!F�y/�>��aq���,���t��3J- *�;S>��>���Ye֗ae�̵��\���� ������N5jRg���.���>���Y<�#*��ͩN-��3�E��C���dWV(\�z<k�I�frvV6��*��$c�
�	-��xiF��j���_B�����1�Rm`�
������*Цz]3"�l��;�}�~�~/+{������!z&Xי5�S�.��X���&X��g����*3ӻ��|���<��o����$���R(�8���7����;X��c����z�]���ZO��f���T�N%UQ<�����\KD|Y�pn�u�fN\F�vtժ;��˨������7)go%���cL��N��~�H�:�uR�}K�Y0��&+�{A#=
�,+%hxf�ͩ�|���v�`�U�	Mc8�َ�����H'ѓr�ѵ"Ν	�ۓ̽�,��q���c%�"�
�DL0C*d٣�`n � �ef�T�d��=�[O�fk����\(�ZqF��G^�FWW�3!(\ĵW���N,�ƜeV|�=�z�z� PP��偧��[��7���A�z�~3o��E����_�XK#�3�R���}59<�ĵG/*\ˢ.�TQ	�
�Vi
���#��K=U3�^�ء��7o2����t7�#�'m��O=��}��4�M�mv�����~G��v#�Q��`��M��S���Q�Ka+U�w|���_=�%��>�����/��Ud����dH�{?����0c��.l\�Pn�)g�
N26���>D7rB�_�D�(���]��Q�V�UO(sd�hr��*t4PdF�
�ZU�]�	�Be�Ǳ��ܵ4�No)m�*���A�/̀� ��ڮ������%��oQq�lݟUڤ�����LbC�K��]�ۤ<�iU_o׳_S�D/Vo�<���3�ۗ��9��2! �΅Z��'۔Ա�+�c[��?��Kz�^���/bzvoՔ�}k|�b�o�y��⤤z^"c�'��|�V�}����g��k��<�jߜ*@*���n�}�E4�֯����7����[�^�f���2B׵�UC���f��J{�s��p�1cG�uf�f��ƍ�f����2c��ō,5�@-��]ٱ�ʍEnz͌U��D>�&�L3pU\���?׵��*I3	us�c�����n���<�1�?��w�Xz�TaI%T��Q P��<OYG>Ƀ���v���ع 訯�\ζ!P@�>�Ʌ<6ģi߱�l��Z:>;tU��Y��!��ZeV
&
t��#��X��{�*��J�	�/��*���R@�Aɐ��EF��c�c��)��[]mu��0v�sɥ���v3	� 4Vea���샋��hi
y��%�����b���Y:?h����SU$�R#S�|��&B+f�K�Z�I��y��h���}�l׳h\:���ٌ���jtji)�C
�]�NY�i�O�|r�VȧX��,�#%��P>͞*s�Y��
Ծ�6�p�����QG`�Ʉ���𣣧��NC��+�d��) �y�!�N/�#�y�MU��;3���L�
�Z�����~k���d'Q�yJ���l�����f���s����,�Ro�	�fl�|���|�����9mp��mo��s��B���dzp?�������N�>1Q*��l$�F&����ӳ���=��6?%��dpw�w!�vv��f(�����g��}�懂� �x�}j!�6��`W��6���6�ߠ+
K
G����M�*!�P�:�ɑ�G��K�K���ڭ���c�:«H�6��E����ҎvZ�^Dn�i炴{i��pV�A��Qi�!
^a�[��Y>X�|�iԇ
��9�h��h�z!V_���-¾,'�3�E,!۬��Y{B*q0)���L�ʜzt��x8h��ޭ닑�ߐ��`�{`�h�+g�KF�K-����8�qe�6�`��o=V�`Z�P�J�NC��5M��<"�����=�IE��(֨Jp`C�j,�Q:
zU�*�t`B[�|�0v�ь^��-慛l"
O���}wZ��([��agM�
������?�� ��с�-E&�Њ�WL ��6�R��u�uB�bV�JJ�r��J�h呠SG���	[��u���e�5��ҲxR�+߇��g�w�ln�5v|������9��G�6�P2�̪1��j�C��)m��s�1�G�2m�18$��
�חW���x���~B�E�^���2z�zU��b*w0�ߏN΁ݴ�k�ݴ�Nx�J�ݬ�j���>`�孳u`8	��2�qk���dFL��0�*��6L�U#�:E��H{{����)�:CE�:�.������byF��L5H�}�/犔z��5�5�'�^���e��P6�Qc3ᘲO��|,2Y�9"^�id�+����yE���7`�gϙ�wHϩ	���^;��ݵՕ;�~�i�p��"�(�$4�^G���ȏ���^��[���!�#oE��}EW�^ɏ=���jk�s4��z��8j���]��;�LT-:�u�����s��5geׇ�X-9c�ƺ��Wһv��M��P�I�@O�AA3����d��d	�v[�~�8��}v@�"xa~��}:��6 /qK%�!��4r�Q�PF	av�k,H
��H���vQ��Ԝˮ�#�)��(+��W���C�`�夊$�l�\a��<�����^ȅ�eaQ'A����7�[aR�Ns�k�
P����V�.�WԉlY��!�su�5���n{ ?j_0j���9��O�&�R�c�ާ��)ޝ�Բp���o>>�~ǖz|�=}���w�^�������w�9����;r���wV���.���>��;a�||�>K=��Q����`>�����A��m'%��n;�^w��@~��d�?�v��[��>��;��v;	����ng��������"&�k�/�
v�`e �-bp�*#�6�PeU�@�$�=�Nr����o�>�48&2��蕯eG�u i4�*�Hj��A�ΎR��
fS�����7�䄜D���'���h�;��:~�fP�[�XP	m�}���&�e���8!�z�W3
�(�T/$�؜.lX�'�p�lƄHO=I ;�+��c攸���<p �AH(`J�[�ob)%��0�h�]�]m/��-hn���Lhqn��ȠD�B�Y�8"*��cD�܃V�w<g���P�
PACKAGER_GZIP;
Packager_Php_Wrapper::$Contents[11]=<<<'PACKAGER_BIN'
       @BASEc�[�  L   �FFTM\�]�  �   GDEF.   �    GPOS
 � � DFLT cyrl *grek :latn J     ��          ��          ��      " AZE  "CRT  "MOL  "ROM  "TRK  "  ��      cpsp kern size               n                     �~%v  
   )  Q $ % & ' ( ) * + , - . / 0 1 2 3 4 5 6 7 8 9 : ; < = p q r s t u v w x y z { | } ~  � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � � �  h    * ^ d j p d d v | � � � � ^ d d d d d d � ^ ^ d � d p p � p( d � � v v |2 �<R<R  ���  �   �   ���  �   L�� ��� ��u ��� ��� ��� � �  v�� � �  ��� ��} � j ��}  �  
 E s K s N s O s � s � s � s � s � � � �  &�� *�� 2�� 4�� w�� ��� ��� ��� ��� ��� ��� ��� ��� ��� ��� ��  �  �   � f � f  L�� ��� ��� ��� ���  L�� ��� ��� ��� ���  * & ' ) / 2 4 6 7 9 : < U w � � � � � � � � � � � � � � � � � � � � � � � � � � � � � <   LD 2 '  ��                                      ��  ��              ��  ��            ��                                 ��      %          
     % #��          ��                                              ��       9      ����          ��                               ��                            ����          ��                                      ��  ��              ��  ��            ��                       %     #   #                 ��       1           ��                                                              ����          ��                                          ������       ����  ����          ��                      �� =��    ��   1   3  %  ����     ) =��          ��                                                              ����          ��                      ��  ��      ����          1    ��     7 =��          ��                                  ����              ��       3            ��                                  ��       1       %           ;            �b '�����������^         ��������������������         ����������            ��           ��                                       
       ��           9   ��             ��        ����    ����       ��   #     '             ! %                      ��      ��  ������                   ��            �R��          �`      ��  ����  ����    ����    ������      �����9                        ��                     !     
              ��             + N  ��     ��  )     !  ��          ����     -  ���� /  ��  #          �L   ������  �T                    ��  ������        ����  �7��-            ��              ��                                     ����            ��          ������         !    
      #  ����      ��     ��            �h��      �����T��    ��  ����  ������ ��     ��  ����      +��                   ! 
�� 
                   '                                   N��  ��   R - 9�f  ��  �}  �}��  ���o��  ���������������� { #   F��                          ��      ��           ��   ������              ����           D��       !    ��      ��  ����  ������ ������  �������� q '  7��              ��   �� 
��      ��          ��    ����        ����    ��               F������   ;�� �Z  �����q  ����  ���d�������������������� s �� �=               ��    ��                      ��    ����          ��    ��                                                  
                          ��                                                                      V     ��                                         ��     ��  ��           
    ����                                        ��      ����          B      � s d ���                                      ��      ��                 ��      +��          ����      ��  ��                                                              ����     ������    ��                                                       ����     ��������                  %      ��                                 b #  ��   f  T��               s                                                                                                        �/�+�                                                                             ��                                                                           ��           #������   #   ��         3��      ��   1   +                    �           R�X����   9  '�u      ��  ��   ���{�� 
�� �� 
            ��  �                                                                                         P�`����   ?   +�H  ��  ��  ��    ���b�m��  ��                  �����P        �V       ��  �?                
          ��                               ��        ��  ��                                              �V      �                                                                              �� D   � 0   +         + '       ( & (                                     
 
  
  '                     $         %   
 
 
            
  
  
                                          ! $   ! $   "              
      $ >  D ^ " i i = n n > p � ? � � � � � � � � � �   �
    
            �� 
�V��                               #                                             ����  ���� ' ��        �\������  �V�%    ��      ��      ���u   � ��   ��            5   1         ' 
��  #��  ��  ��                                ������                                                                        ����     ��                 1 
 )    / %    7                 ����      ��  ��    ��  ��             !  ��  ��  %                                   
��  �R                  ����  ��  ��      ��                               
   ������  ����  ������            ��  ��  %                    ������    ����   
�`�f     ����������  ��        ����          ��          ��    �B            ����  ����            ��    ���� ������  ��             ����     ����  ����    �q         
        ����  �� ���y    ����  ��                        ����  
�/�7��   ��  ��      �{���������`�F    ��  ��  ��      ����   �3        ������  ��                     ���� ������  ��                                              
  ��                 ��                                                                                   
                                                            ��           ��                     
                                            ����   ����    ��     ��         
  ��������                                �� 
  �������� )                       ����                                        �� ����                                                                   ��      ����  ��  ��                      ��                                ��     ��  �� % /   
 !                ��                                           ����      �� 
          ��                                      �� 
������  ������  ��  ��                ��  �R��                                                                      ��������                              ��    ��  ��  ����                                                              ��   ��������                       ������                                 
   
  
��  �� /                - #    ��                                  
       ������                    -��    ��   '                                        ��           %               #    ����                                          N             '   1       -     L 5                                          D�� ��        ��        %��   f ' ;    ������          ��                            %      ��                  ����            ��                                    ��                  ��    ��                            ����    ��  ��   - '      '                �R                                                                        ����      �L                  ��  ����    �d ������  ��   % % %     %          ����   '  �`                 �b��  �����{�)  ������  �   ? ? ?     ?          +   & 
 
 &   $   %   #   % % %  ' '  ( (  + ,  . .  0 0  1 1  2 2  3 3 	 4 4  7 7 
 
 &   $   %   "   %    $ $  % %  & &  ' )  * *  + ,  . /  0 0 
 1 1  2 2  3 3  4 4  5 5  7 7  ; ;  = = 
     $ % ' ( + , . 0 1 2 3 4 7 ; = > ^ i p q r s t u v x y z { | } ~  � � � � � � � � � � � � � � � � � � � � � � � � � � �   �T 0 -   5�� �� F�� %���� '               ���� ���� 
�� /����������                ��    ��  �������� 
��������������������        ������       ����  ����     ��                     �m 
�� %�\ ����     ��  ��       �� ��       ��    ����                          ��       ����  ��  ��  ��     
      ��  ��     ���� 
����                                                   ��            ��      
   
��      ��  
             
          ������  ������  ������  ��  �� ����   �� 
                                           ����       ��  ��  ��     
     �� 
        ��                                 �y��������  �N�������T  ��  ��  ���������� ��  ���� ����  ��  ��  ����  ��������       + J '�� H H  �� %    ��      ������     �� !��  �� ��                           �� j ���� T�}�� R )�Z  ��    �����\���L�1 D�����P�L�����D D���`���^���w�� =���u�j����       �� 1 #  ��  ��  ��       ������     
�� ������ ��  
          ��            ���N����  �m������������������  ��   ��������      ����  ����     ��    ��          ��   )      5 
 %         ��         ����      �� ������ ��                          ��          ��   
  ��         
     ���� ��        ��                                 = ' �� J ; 3�� ' # 
  ��    /   ���� 1      9��  �� ��             ��        ������  ������  ������  ��  �� ��     �� 
              
   
��                     �� �� �� ���� 
   ��        
���� ��   �� �� H������              )            �T  ��  �q������      ��     
      ��  ��        ����  ����                           �� j ���� V�u�� 1 ��         ���������u L�������� ���� F�������������� 1���'������    ����  �� ����������    ��  ��       ����  ��    ����   ��      ��                                                          ��  ��       ����  ����                                                                 �� ��       ��      �� 
                                                                �� ��          ��  ��   
                                                                ��  ��       ����  ����                                                                 ����������   
����  ����  ��  ��                                                          �� ��   
   ����    �� 
                                                             �� '     �� + !  ��                                                              �� ����  �� 
���� )����   �� �� ������  �d��  ��                                         �� %     �� 1   ��    # #                 ��                                        ����������     ����  ����      ��                ��                                        ��  ��       ����       
                                                               
�� ��    
 
����    ��     ��                                                          ��           ��         
                                                             ���� 3     �� 7 #  ��    % )                 ��                                          ������       ����  ����  ��  ��                                                        ���� '��   �� �� 7������                                                               �� ��       ����    �� 
                                                            ��   ��  �� 
���� -����     ��     ��  ����  ��                                        ����  ��       ����  ���� 
   ��                                                          ��  y            j                               + F    �� H��         ��    ��      �� % 
        �� 7   ����                           ��                    ��                          ��                                  ����    ������  ����    ��  ������    ������      ������  ��������  ��                     ��      ��                ��       �� ��         
                                    ����    ������  ����    ��    ��      ������      ������  ��������  ��                       �  ���� ��\��   �b        ��        �� 5      �� )��   9����                          ��     �� ��     ��  ��            ���� 
          ��   
��                              ����    ��    ������  ��������      ��  ��         ��  ��������  ��                       (   *   ) > > ( ^ ^ ( i i + n n , � � * � � - � � . � � / � � - � � . � � / � � + � � ,     &   (   )   (   ' @ @ & ` ` & i i + n n * � � ) � � , � � , � � ( � � + � � *       > ^ i n � � � � � � � � � �      
 r � DFLT cyrl &grek 2latn >     ��        ��        ��    " AZE  "CRT  "MOL  "ROM  "TRK  "  ��    frac                    " 8                                                  �  3�   �3�  � fR    �           ADBE @  �  �   �K  �    $�                   �      x   Z @   ~ � � � � � � � � � � � � � � �:DHU[aeq~���� 
    " & / : _ �!"� ��     � � � � � � � � � � � � � � �9=GPX`dnx����      " & / 9 _ �!"� ������������������������������������������}�{�t�r�n�l�d�^�K����������������������R��!                                                                                                                           	

,�+X!!Y-�, Ұ+-�, /�+\X  G#Faj X db8!!Y!Y-�
  +� +� +�/� ֱ
99 ��90174632#".3#{J:9E <($: ��o<LL<&>$$>|��    o�u�   > �/�3�  +�2�/�ִ +��+� +�	+��99 013#3#o�&v$�%u���

+�@	+��+� +�
+�@	+��+� +�!+�6�?r�� +
�?t�� +
��+�+�+��	+��
+��

+�@.-	+�/��2�
+�@	+�1/�ֱ!�!�-+�2�, +�2�,�+�'�2+�!�9�-�9�,�999��$9�'�%999 �.� +99��'$9��901?32654&'.546753&#"#5.�5)^x:t�yX~b0����}7��1P4$y���N�n�^���)y^Xy3#G\rF����H�L%25QhAG��Y�p��5    A����  # ' 9 H � �5  +�= "+�/� "+�E/�- "+� /� "+�%2�I/� ֱ��+�	 +�	�(+�: +�:�@+�0�J+��$'$9�@:�%-5&=$9 �=�0@99� -�	99014>32#".732>54.#"3	4>32#".732654.#"A6_}Ib�Q6]zF6cS>#�eX>T&+I29U*�Hz���6^}I��6^zFEv\5�dY\\+J1:T*�h�o<c��m�m8!Fd�\��U�_EoY1V�����:�h�o<��m�m96i�o����CpY2W�  C��'� ' 2 E � �  +�#  +�,� +�C��F/� ֱ(�( +�3�(�>+���+��G+�3�9�>�#,1$9��/9��!$9 �,� 99�C� !16$901%5.54>3263#.'#".73267'>54.#"C":A2[�Y��@�t�|c,�?��2�X��h�q?�L�X[�8����96"55'"(E,Wa��I�LF�i>��O�|:	������6]�Dr�oT�NI=�{/J|F"'%*+2#B8"}   o�/�    �/�  +�/�ִ +�+ 013#o�&v���    ���A�   �
�+ 01 4.'3 ,)M_=��������ܵW��������   A�K�   � +�3�/�+ 015573%%#'5AB͆����J��Ҋ��}��*
  +� /�3��2� 
+�@	+�/�
ְ2�	 +�2�	

+�@		+�
	
+�@
 	+�
/�ֱ
+�@)	+�
+�@ 	+�++ �' �9��999��901357>54.#"'>32!b�JknKG-">pMX�<=M�tK�^H,?NwuSq~w�GiqV]NQN(9`P-F2�AP!;N]c4A}}s�xOi�  \���� > b �<  +��/�� /�(��?/�ֱ6� ��-�-
+�@	+�@+ �<� 9��9��0199� �#-99�(�$901?32>'4.+532>54.#"'>32#"&\4!V�?;dE44DSY/kk7m_;:b@O�55)p�Ie�a2��CrV2*Wz�co�I�%*6?> 0S>/�8`=+L<#9&�1!9axBr�/>[~IDlO.:    !  4� 
  Z �	  +� /�3��2�/�/�	ְ2��2�	
+�@	+�	
+�@	 	+�+�	�9 � �9��901533##%!47#!|��ȶ�.�=8���|�����y���ppv\�  \����   t �  +��/�
�
�L�M��#��!��"#!+�"#! � �#9 �!"LM....�!"LM....�@�*E�/:=?$9 �:�<9�H�%9�O� *4$9014>32#"&7##"&54>32>54.#"327#".%32>?&#"^H����pǚp:@l�LH`r�c�N��p�aK0s!D</G��}��i7e��a��#��lǦ{E�LF<vM.+C^�]ȇ�ҞX=r��mwȃHa`��}f��V.�s�!E_�IyɓQh���l��f5M^X=v��_K[]�F�l�    7  
�   , �   +�3� +� 
���/�+ ��90133#!!&'#7���˞������--��;��0e�[��T  ���J�  ( 2 w �  +�� +�0�)(
�)��3/� ֱ�)2��"+��- ���4+�-�
999��	90146$32&#" !267#"$&Oq��T�U1z��՗S,
Y�:%8�~����nլ"�p�=R������!�*c�  ���d�   N �
���/� ֱ	�2�	 
+�@		+�@		+�@		+�
���
/� ֱ	�2�	 
+�@		+�@		+�+ 013!!!!���-��Š���c     O��
���"/� ֱ��+��
+�@	+�#+��999��	99 ��9�� 99��	9��90146$32&#" !27!5!# '&Op�.�v�80���ܛU5�Q���Q����amڤ�s*�?R�������(���91�]  �  ��  ? �   +�3� +�3�
 
�	��/� ֱ�2��+�2��
3� +�3�/� ֱ�2�+ � �9901333673	#��2B����@�����8HU+����բ��    �  ��  , �   +�� +�/� ֱ� 
+�@	+�+ 0133!��x��۠       c�  � �   +�3� +�	3�/� ֱ��+��+�6���n +
����
��� �....�....�@� �9��	99��
9 � �990133363#5##'#g��X=3l�\�$dV����q8(��6����3��;�ۣ����4�P�������    �  ��  P �   +�3� +�	3�/� ֱ��+�
�+� �9��99�
�99 � �9901337&3#'��ث[���*�Z������hj�;�(������  O����  0 D �  +�� +�+��1/� ֱ��%+��2+�%�99 �+� 99014>32#".732>54.#"Og���xѡs<F}��q���b�);P^t?K�gR6$Mm�]\�oN&ج$�oF��焔���@n��D�whU<!,Pq��TZ��uEBt��     �  4�   X �   +� +�� 
���/� ֱ�2��+�	�+��99 ��9��	9��901363 #"'32>54&#"����(9 rL�d5;cr�Y��z:�{$\tA�vOR
2�+�+/�8+�6�&�.� �.ɰ6���� +
��������+ �..�...�@�+�99 �$�9�1�
 99014>32$%&#.732>54.#"Og������^>q�]��7����CY��xV/�(Pp�XK�gR6$Ll�[^�pN&կ$�oo��죋�|!	=!�K`/V���y_��p?,Pq��T[��tDCu��   �  i�  ' p �   +�3� +�%� 
���(/� ֱ�2��"+�	�)+�"�$9�	�999 � �9��99�%�	9��9013632#&.'#32>54&#"�����D7=*Lc;�7*3�!?!����e�Q���:�;>1�VF|]C8�';&����FT��    \���� , h �*  +�� +���-/�
+�@	+�
+�@ 	+�	+ 015!!#E�=�#����#    �����  7 �  +�� +�3�/� ֱ��+��+��9 01332653#".��4]{L���7c��b]��]4_f��x�o7��m���֓c-+_��      ��  Q �  +�  +�33�/� ֱ�
� ����� �.�..�@ � �9013363#��r+5t�������(����J��;    !  ,�  � �  +�3�  +�333�/� ֱ��+��+�6����S +
� ������>�� +
������� �.....�......�@��9 � �999013363363#'##!ɰ>/`�ȴN[���^ǺK#O��������k������i��;1������     7  ��  & �   +�
3�/�+ � �99013	33673	#&'#7��O��[-4R���>�ݿ_J:e������Ym�Z�2�	F��v���    ��  2 �  +�  +�3�/�ֱ�+��99 � �90133>73#��y'
���6/� ֱ)�)�1+�2��7+�) �99�1�
#	�h��)NzLc��n�e\f���]�{a> ƭ�)e}߹Q�m?�k)(   S���;  = �  +�� +���/� ֱ�+ ��9�� 	999��9014>32&#"327#".SR�րO�+,^�Y�\2ϡ}p!Q�B���yіV"�3?n�R��2���  S��;  0 c �  +�  +�!� +�-�
/�1/� ֱ��'+�	2����/�2+�'�99��9 �-!� 	$9014>3233#'##".732>76=4'.#"SL��as�'�	�	d�T?wdS; �)MxL@tU		�ia�K�؏P\Ez�����=\8$Aav�XQ�l=7iF#0�1 _~k�   S���;  1 j �  +�� +�)�
���2/� ֱ�2�� +��3+� �999��999 ��9��9�� 99014>32!327#".!454'.#"S,Vw�[H{YE,�;eK�|$�Ρ�|�2%:b>$A4."_��h9#;RXdZ,9!_�V+7�E��""(VA*&/274     !  �,  X �  +� +�3� �2�/���/�ְ2��2�
+�@	+�
+�@ 	+�+ ��
9��	90153547632&#"!!#!�{f�WM5E0I.�����3�xc�!7PW49��n�   S�64; , ? y �
  E �  +� +�	� +�/�ֱ
I.��{�:��F<=2F!6!2EF     �    0 �   +�
3� +�/�/� ֱ�2�+ � �9901333673	#��..:��h����b�+?8n�M���m�q    �  a   �   +�/�/� ֱ��+ 0133����   �  �; 4 n �2  +�#33�  +� +�3�*�2�5/�2ֱ1��1�$+�#�#�+��6+�1�9�#2�9��9 �*2�
$90133632367>32#4.#"#4.#"#4��r�4_L9+N1nI.ZaG/�2hLOz�7U68eA�$��9N/O;&%Ad�i��Vh�McJ6*�q|?jM*9U2&8��Y  �  ';  P �  +�3�  +� +��� /�ֱ���+��!+��9��9 ��990133>32#4.#"#4��AWt?0_hM3�8aB[�
�
/�/+��99�
�	9 �+ � 
	$9014>32373###".732676=4'.#"S9_}�Eu�*�	�]�R\�yH�'KzN_�!	�h���t��[*eQ��t�MU6R4N�ʃQ�m?nb3+�/ ^}�   �  �;  < �  +�  +� +�
��/�ֱ��+��9 �
$$9� �999 �$� 9�� $9��901?32654&'$54>32&#"#"X.2�CchXk��3]�SM�,.duR\Yn��]�z�2�,WFDU(g�AqU1%�AT>?K,4�s^�R  (���#  U �  +�� +�3� �2�/�ְ2�	�2�	
+�@		+�	
+�@ 	+�+ ��9� �9015357!!327#"'&5(����CMD+	N\�KK���9����fg
+�
�9��9 ��990133267653#'##".���[���;VwC,RUE7�k����hJ-5����o�#A=%'Ic�    	$  ! �  +�  +�3�/�
��
����� �
....�
....�@��99 � �99901336733673#&'##(ď 
3�/�+ � �99013	336?3	#'&'#z��֘*C-?����sڞ Q3=��:qO_�� ���.�\\�  ��$  # �  +�
3�/���/� + � �90133>73
'67>7>54'��)����k�`-aC0ZN+W!$��lmYN#m�
+�@. 	+�#� ��2 +�2/�3� +�2�2
+�@	+�'2�5+�2.�99 � &�.99��99��990152>74'&54>;#3#".547654=,B%/WsG,$^R��U[$.FpX0Ao-)@v�2IpD!y^]!zm:�,+�<m{$^_x EvQDo�#�     ���Ol   �/� ִ +� +�+ 013������p   7�1� 8 � � +��8/� �(/�' +�9/�ְ2�2 +�2�2
+�@2'	+�� ��
+�@	+� 2�:+�2.�
99 �( �299�'�
99��
�/��2�!/� ִ  +� �+�
�9��9��901&6323273#".'.#"k�vB~wGD_&s�%IZ5,ZjN;1(!~̟�*9"�W�K$)$	
+�@	+�#/� ֱ��+�2� +�2�$+��99 ��9014753&#"327#5.'&��Ȋ�g,^�i�U#>Vh:�m!$�J�f�=}��(!��5�7j�mGz\B!8�&��MC�  {  	� & � �   +�$�/�3��2�/���'/�ֱ�
+�@&	+�@	+�� ���/��
+�@ 	+�(+��	9��#$99��9 �$ �9��9��99��90135>54'#53&54>32&#"!!!{p�
��?o�Z�W*Qt>^7<��
2� /�3�/�ְ2��
+�@	+�2�
+�@	+�2�+��99 � �90133673!!!!#!5!5!5!#��/(!7���x��V�����S����=eb]n��il�l��l�l   ���   / �	/�3��2���/� ֱ��+��+ 014632#"&%4>32#".A/-<=0-?�3.=>/)Q.A@/.BC-3@/.B)   O A}�  ' E � �/� +�A/�; +�3/�- +�#/� +�F/� ִ +��(+�7 +�7�+�
 +�G+�7�#-0?A$9 �;A�?9�3�
 (1>$9�-�09014>32#".73>54.#"4>32&#"3267#".Oh������gg������hmV��ur̒VV��rtΓV�Dt�SP�asd�BF�a@v'i�]�e6���kk������kk���x؜[Z��{xٜ\\�ہ[�g;%V2Q�ZW�T TD>k�     ? �d�    3	#3	#?"���%�F"���#�(��l�m���l�m    A	_�   5!A	��     Z<�   6 A � � +� +�
+�@56	+�.2�?/�  +�B/� ִ +��+�6 +�72�6�<+�12�$ +�,2�$�+�	 +�C+�6�
1 ,
"8 
9 �� 9017326'4'73#"&w :=)6�fyG>[%AQ/'Q�o^ #N�sS>/F)  4 �W�    7	3	3	#4%�ۛ#��ɛ$�ܙ#����l�m'�l�m�  y�6 - ! 0 t �% +�- +�/���1/� ֱ��"+�)
�2+� �9�"�9�	�9�
�
    , �   +�3� +� 
���/�+ ��90133#!3#!&'#7���˞���d�̜���--��;��0��O�[��T     7  
    / �   +�3� +� 
��/�/�+ ��90133#!!&'#37���˞������--������;��0e�[��T��  7  
    2 �   +�3� +� 
��/�3�/�+ ��90133#!73#'#!&'#7���˞������碊�\��--��;��0�����Q�[��T    7  
   $ ,  �   +�3� +�% 
��/��"+��2�-/�ִ$ +�$�+� +�.+�$�%99��)*$9��&99 �%�)9��$990133#!&63232673#"'.#"!&'#7���˞����PF!8+d�8N*.?��--��;��0fz		#2�*a�G�[��T  7  
    ( i �   +�3� +� 
��/�&3�� 2�)/�ֱ��+�#�*+��999��99�#�999 ��90133#!4632#".!&'#4632#"&7���˞���s>-.<<00M��--�>/-==1.;��;��0�-A@..A3���[��T�-A@./@A  7  
�    ( } �   +�3� +� 
��/� +�%/� +�)/�ִ +��"+� +�*+��9�"�
�3��
���/�+�6��w�P +
�.�.��	������	+�	+��
�o�    �  �   R �   +�	� +�� 
���/� ֱ	�2�	 
+�@		+�@		+�@		+�+�	 �9 013!!!!!3#���<���� �̜Š�.����    �  �   M �   +�	� +�� 
��/�/� ֱ	�2�	 
+�@		+�@		+�@		+�+ 013!!!!!3���<���������Š�.�����     �  �   X �   +�	� +�� 
��/�3�/� ֱ	�2�	 
+�@		+�@		+�@		+�+�	 �9 013!!!!!73#'#���<����$��棊�Š�.�������   �  �	   " ~ �   +�	� +�� 
�� /�3��2�#/� ֱ	�2�	 
+�@		+�@		+�@		+� � ���	�+��$+�	�99��9 013!!!!!462#"&%4632#"&���>����?[;;0-=�?/-<<1-=Š�.����,A?./AA/,A?./AA  ��  }   ' �  +� +�/�ֱ�	+��99 013#37�˛=������;    �  G   * �  +� +� /�/�ֱ�	+��99 0133������������;    ��  3   0 �  +�	 +� /�3�/�ֱ�
�9+��9�*7�-99�+�9 � �99�-�79901337&3#'&>32	32673#"'.#"��ث[���*�Zq#D//
������hj�;�(������Ce8
a     O���  0 4 G �  +�� +�+��5/� ֱ��%+��6+�%�13$9 �+� 99014>32#".732>54.#"3#Og���xѡs<F}��q���b�);P^t?K�gR6$Mm�]\�oN&��˛ج$�oF��焔���@n��D�whU<!,Pq��TZ��uEBt����     O���  0 4 G �  +�� +�+��5/� ֱ��%+��6+�%�13$9 �+� 99014>32#".732>54.#"3Og���xѡs<F}��q���b�);P^t?K�gR6$Mm�]\�oN&f����ج$�oF��焔���@n��D�whU<!,Pq��TZ��uEBt�����    O���  0 8 G �  +�� +�+��9/� ֱ��%+��:+�%�14$9 �+� 99014>32#".732>54.#"73#'#Og���xѡs<F}��q���b�);P^t?K�gR6$Mm�]\�oN&�ߓ梊�ج$�oF��焔���@n��D�whU<!,Pq��TZ��uEBt�������  O���  0 R � �  +�� +�+�I/�C�PCI+�4�F2�S/� ֱ��1+�R +�R�F+�G +�G�%+��T+�FR�+4I$9 �+� 99�I�1R99014>32#".732>54.#"&632	32673#"'.#"Og���xѡs<F}��q���b�);P^t?K�gR6$Mm�]\�oN&�PF/	e�4Q	&.ج$�oF��焔���@n��D�whU<!,Pq��TZ��uEBt���dy
	#3�)_    O���	  0 @ L j �  +�� +�+�>/�J3�8�D2�M/� ֱ��1+�;�;�A+�G�G�%+��N+�A;�+$9 �+� 99014>32#".732>54.#"4>32#"&%4632#"&Og���xѡs<F}��q���b�);P^t?K�gR6$Mm�]\�oN&�
	999 �,�9�"�

�3!
���5/� ֱ*�*�2+�2��6+�* �&999�2�
!'()$9��99 �!� 4$9�
�9��9014$54.#"'>32#'##".3#32676=$MJ42\>2d[%,C�b^�X8�0�kN~N*�����fMc�	�?��8G3#$�*22RsvC�t�f�D[4Wl���z[]fJ!�
  M���� % 0 4 } �  +�!  +�)� +�
�/!
���5/� ֱ&�&�.+�2��6+�& �99�.�
!124$9��3999 �!� 0$9�
�9��9014$54.#"'>32#'##".732676=$3MJ42\>2d[%,C�b^�X8�0�kN~N*�fMc�	�?�������8G3#$�*22RsvC�t�f�D[4WlQ[]fJ!�
�9��    M���� % - 8 � �  +�!  +�1� +�
�7!
���9/� ֱ.�.�6+�2��:+�. �&999�6�
!'(*-$9��)999 �!� 8$9�
�9��9014$54.#"'>32#'##".3#'#32676=$MJ42\>2d[%,C�b^�X8�0�kN~N*�Άғ�ufMc�	�?��8G3#$�*22RsvC�t�f�D[4Wl�9�����z[]fJ!�
   M���� % C N? �  +�!  +�G�8 +�,3�A�@2� +�
�M!
��5;
8
�<3�5�42�O/� ֱD�&D +�C +�D�L+�2��8 ��9 +�P+�6���+ +
�@.�4.�@�,��4�<���Q�a +�,�-,4+�3,4+�@�=@<+�?@<+�-,4 � �#9�39�?@<9�=9 �-3=?....�,-34<=?@........�@�8C�
!+;G$9�9�99 �M� D$9��N99�
�9��9�;�&C99014$54.#"'>32#'##".&>3232673#"&'.#"32676=$MJ42\>2d[%,C�b^�X8�0�kN~N*�&9#2#g� <,#(2WfMc�	�?��8G3#$�*22RsvC�t�f�D[4Wl�5V:

(4�c�U[]fJ!�
    M���� % 2 = K � �  +�!  +�6� +�
�<!
��0/�I3�)�B2�L/� ֱ3�&3 +�-�3�;+�2���E ��>�>/�E�M+�-&�!9�>�
6999�E�99 �<� 3$9��=99�
�9��9014$54.#"'>32#'##".4632#"&32676=$4>32#"&MJ42\>2d[%,C�b^�X8�0�kN~N*�A.0>0->5fMc�	�?a2.=3.=��8G3#$�*22RsvC�t�f�D[4Wls.A3-CC�[]fJ!�
*3@/4C  M���/ % 0 > L � �  +�!  +�)�J +�4 +� +�
�/!
��<C
4
�< +�M/� ֱ&�&�1+�? +�?�.+�2��8.+�G +�G/�8 +�N+�?1�!9�G�
)4<$9�8�99 �/� &$9��099�
�9��9�JC�8199014$54.#"'>32#'##".732676=$4632#"&732>54&#"MJ42\>2d[%,C�b^�X8�0�kN~N*�fMc�	�?#{e@c59d>`}o3!4?41:��8G3#$�*22RsvC�t�f�D[4WlQ[]fJ!�
9Yv6^;8[4sT5#!6!4GH     O��O; : J W � �/  +�63�*�>2� +�3��R2�K%/
�K�2�K�F��X/� ֱ;�;�C+�2�%�K2�%�L+�"�Y+�; �99�C�6999�%�23$9�L�*/R$9�"�$,-999 �%*� ,23;$9�F/�?9��"$9��9014$54.#"'>323>32!327#"&'##".73676=&!6.#"OM1
���3/� ֱ�2�� +��4+� �&/1$9��999 ��9��9�� 99014>32!327#".!6.#"3#S,Vw�[H{YE,�;eK�|$�Ρ�|�2
���3/� ֱ�2�� +��4+� �&/02$9��1$9 ��9��9�� 99014>32!327#".!6.#"3S,Vw�[H{YE,�;eK�|$�Ρ�|�2
���7/� ֱ�2�� +��8+� �&/13$9��2$9 ��9��9�� 99014>32!327#".!6.#"3#'#S,Vw�[H{YE,�;eK�|$�Ρ�|�2
��8/�E3�2�>2�H/� ֱ�2��/+�5�5� +��B +�;�;/�B�I+�;5�&$9 ��9�� 99014>32!327#".!6.#"4632#"&%4632#"&S,Vw�[H{YE,�;eK�|$�Ρ�|�2
�63�/��?/�ֱ�� +�> +��+��3+�2 +�2/�3 +�@+�6���2 +
�;.�-�;�$��-�6����ş +�$�%$-+�,$-+�;�7;6+�:;6+�%$- � �#9�,9�:;69�79 �%,-7:.....�$%,-67:;........�@��9�2>�#5$9 �5 � >990133>32#4.#"#4&63232673#"&'.#"��AWt?0_hM3�8aB[�

f�!=(
(4�c     S��`�  ) - G �  +�� +�$��./� ֱ��+�	�/+��*,$9 �$�	 99014>32#".732>54.#"3#SS��m��=g��NU�~]3�Q�\[�S 5D^7BmK3&���	�֎M���r��Z)1_��kt�kj�v.]\O="/Ojt���  S��`�  ) - G �  +�� +�$��./� ֱ��+�	�/+��*,$9 �$�	 99014>32#".732>54.#"3SS��m��=g��NU�~]3�Q�\[�S 5D^7BmK3Ͼ���	�֎M���r��Z)1_��kt�kj�v.]\O="/Ojtg9��   S��`�  ) 1 G �  +�� +�$��2/� ֱ��+�	�3+��*-$9 �$�	 99014>32#".732>54.#"3#'#SS��m��=g��NU�~]3�Q�\[�S 5D^7BmK3.φђ�}	�֎M���r��Z)1_��kt�kj�v.]\O="/Ojtg9����  S��`�  ) O � �  +�� +�$�D/�>�M>D+�-�A2�P/� ֱ��*+�O +�O�A+�B +�B�+�	�Q+�AO�-$D$9 �$�	 99�D�*O99014>32#".732>54.#"&63232673#"&'.#"SS��m��=g��NU�~]3�Q�\[�S 5D^7BmK33RG
g� <,2	�֎M���r��Z)1_��kt�kj�v.]\O="/Ojt�jz	(4�	
c     S��`�  ) 9 F j �  +�� +�$�6/�C3�/�<2�G/� ֱ��*+�3�3�:+�?�?�+�	�H+�:3�$$9 �$�	 99014>32#".732>54.#"4>32#".%462#".SS��m��=g��NU�~]3�Q�\[�S 5D^7BmK3	*0=02�A[>3 2	�֎M���r��Z)1_��kt�kj�v.]\O="/Ojt)3.B4.A@/44  S��`t  ' 2 x �  +�*�  +� +�!�	 +�3/� ֱ��/+�
	999 �*�99�!�
99014>327#"''7&&#"32>54'#SR��n�v\V^NT*Jcu{?�saQ\��M�Jp9aF7!�IiJ~V1J�ՍMK�;�K�|^�y_;K�B���me@"<N]`�u=>l�X�p     ��� �  ! a �  +�  +�� +�3�"/� ֱ��
+�
� !$9��9 ��990133267653#'##".3#���[���;VwC,RUE7�����k����hJ-5����o�#A=%'Ic����     ��� �  ! a �  +�  +�� +�3�"/� ֱ��
+�
�!$9��9�
+�
� "%$9��9�
+�
+�,�,/�3�
�0699 ��990133267653#'##".4632#"&%4>32#".���[���;VwC,RUE7�@/,=*->�3.==02�k����hJ-5����o�#A=%'Ic��.A@/)C-3@/.B4   ���  " # �  +�
3�/���#/�$+ � �90133>73
'67>7>54'3��)����k�`-aC0ZN+W!����$��lmYN#m�
3�/��)/�63�"�02�9/�ֱ&�&�,+�3�:+�&�99�,�99�3�
9 � �90133>73
'67>7>54'4632#"&%4>32#"&��)����k�`-aC0ZN+W!�@/1>0->�3.>?//<$��lmYN#m�
���"/� ֱ��+� +�#+�6�<��2 +
� ����!��!+ �!.�!...�@��$9��9 ��9� �
�(/�#�@2
���B/� ֱ7�7�?+�2�� ?+�+ +�+/�  +�C+�7 �99�+�
2:$9� ?�-/99��#(999 �2#� %+999�:�-9�@� /7.$9��A99�
�9014$54.#"'>32#327#"&547'##".732676=$MJ42\>2d[%,C�b^�X8	6 69060JlWli0�kN~N*�fMc�	�?��8G3#$�*22RsvC�tO}3*u467d5bYv��D[4WlQ[]fJ$�
     O���  # = �  +�� +���$/� ֱ�%+ ��9�� 
999��	90146$32&#" !267#"$&3Oq��T�U1z��՗S,
Y�:%8�~����nR����լ"�p�=R������!�*c����    S����  ! = �  +�� +���"/� ֱ�#+ ��9�� 	999��9014>32&#"327#".3SR�րO�+,^�Y�\2ϡ}p!Q�B��������yіV"�3?n�R��2���Q9��    O���  ' = �  +�� +���(/� ֱ�)+ ��9�� 
999��	90146$32&#" !267#"$&3373#Oq��T�U1z��՗S,
Y�:%8�~����n�����ޔլ"�p�=R������!�*c���  S����  % = �  +�� +���&/� ֱ�'+ ��9�� 	999��9014>32&#"327#".3373#SR�րO�+,^�Y�\2ϡ}p!Q�B���Ԕ���ϊyіV"�3?n�R��2��������  ���d   # R �
/�D/� ֱ��'+�	2����/��3+�; +�E+�'�99�3�1799�;�8C99 �-!� 	$9�
�7;C999014>3233#'##".732>76=4'.#"654.'7SL��as�'�	�	d�T?wdS; �)MxL@tU		�ia�KN� 0/�؏P\Ez�����=\8$Aav�XQ�l=7iF#0�1 _~k�7Xl6-Y3-R65 ����m�  ! y �  +�� +�� 
� 3��2�"/�ְ2��2�
+�@ 	+�
+�@ 	+��+�	�#+��999 � �	9��9015363 #"'3   !"!!������mgi��ֱ��@2C���م[��u��|!�������ihl���	G2,��   S��� # 8 � �  +�  +�)� +�5�/�3��2�/�9/� ֱ$�$�/+�	
+�@/	+���/�
+�@	+�:+�/$�99��9 �5� 	$9014>323!5!533##'##".732>76=4'.#"SL��as�'�Q����	�	d�T?wdS; �)MxL@tU		�ia�K�؏P\Ey��y�Y���=\8$Aav�XQ�l=7iF#0�1 _~k�     ��<�� " i �   +�3�	� +��/�� 
���#/� ֱ	�2�	�+��
+�@	+�@	+�@	+�$+ � �99013!!!!!"#327#"&54>7���<���/O6,4,Kg]l:L,Š�.���IX'(g.^T8pM     S�?�; 5 C � �2  +��  +� +�>�'/�"�62
�6��D/� ֱ�62��++� +��7+��E+�+�>999�7�"'./$9��$%$9 �2"�$+999��9��9�6� 99014>32!327327#".54675"#.!6.#"S,Vw�[H{YE,�;eK�"\-_D4%;,Gj<W0_>	'��{�0	*8U49_A0_��h9#;RXdZ,=_�V+7�#Jb+-/b4'N6I�*��!BH>2(?SS  �  �   U �   +�	� +�� 
��/�/� ֱ	�2�	 
+�@		+�@		+�@		+�+�	 �9 013!!!!!3373#���<���� ����ߓŠ�.������   S����  . 6 m �  +�� +�&�
���7/� ֱ�2�� +��8+� �&/4$9��999 ��9��9�� 99014>32!327#".!6.#"3373#S,Vw�[H{YE,�;eK�|$�Ρ�|�2
/� ֱ� 
+�@	+�+� �	99 0133!3��x��������۠��  �  9T   % �  +�/�/�ֱ�	+��99 0133������S������  �  ��   b �   +�� +�3� 
� +�/� ֱ� 
+�@	+��	+��+�	�999��9 ��90133!>54'7��x�8G]J�$4!7KN+��۠�G<H>W3/M4%     �  �(   G �   +�/�/� ֱ��+�
99 � �	
�	��/� ֱ� 
+�@	+��+�
�+ 01334632#"&��`>++::-+<��Y-@?.-AA    ��  �� 
+�@		+�	
+�@	+�+ �	� 
  +� +�/�/�
ְ2�	�2�	

+�@		+�
	
+�@
	+�
�99015737#��������������w     �  �   V �   +�3� +�	3�/�/� ֱ��+�
�+� �9��$9�
�99 � �9901337&3#'3��ث[���*�Z����������hj�;�(��������  �  '�  # [ �  +�3�  +� +���$/�ֱ���+��%+��9�� !#$9��"9 ��990133>32#4.#"#43��AWt?0_hM3�8aB[�
�+� �9��$9�
�99 � �9901337&3#'3373#��ث[���*�ZL�����������hj�;�(���������    �  '�  ' ^ �  +�3�  +� +���(/�ֱ���+��)+�� 99��!$&'$9��%9 ��990133>32#4.#"#43373#��AWt?0_hM3�8aB[�
�
+�@	+�.+�& �$9 ��&9�
�H��U/� ֱ2�2�:+��H2��I+��V+�:2�-99��	()$9�I�
���,/� ֱ�2��"+�	�-+�"�()+$9�	�*$9 � �9��99�%�	9��9013632#&.'#32>54&#"73�����D7=*Lc;�7*3�!?!����e�Q���:e�����;>1�VF|]C8�';&����FT�����    �  ��   B �  +�  +� +�
��/�ֱ��+��9��9 �
���0/� ֱ�%2��*+�	�1+� �9�*�"$$9�	�999 � �9�%�99�-�	9��9013632#&.'#3373#32>54&#"�����D7=*Lc;�7*3�!?!���Q����ߓ��e�Q���:�;>1�VF|]C8�';&���������FT��   y  ��   D �  +� +� +�
�� /�ֱ�
�!+�
�9��99 ��
99013373#33>32&#"#4y����Ί��=M\0#.BmF
$&')$9� �($9 �$� 9�� $9��901?32654&'$54>32&#"#"3X.2�CchXk��3]�SM�,.duR\Yn��]�z������2�,WFDU(g�AqU1%�AT>?K,4�s^�R�9��    \��� , 4 p �*  +�� +���5/�
!*.134$9�$�"2$9 �*� 9��

$'*,-$9� �+$9 �$� 9�� $9��901?32654&'$54>32&#"#"3373#X.2�CchXk��3]�SM�,.duR\Yn��]�z�1����Ί2�,WFDU(g�AqU1%�AT>?K,4�s^�R���� ��  C   J �  +� +� �2�/�/�ֱ�
+�@	+�
+�@ 	+�+��
$9 015!!#3373#E�=�̣���ޔ#����#똘�     (��/  ' { �  +�� +�3� �2�(/�ְ2�	�2�	
+�@		+�	
+�@ 	+�	�+�! +�)+�	�'$9�!�999 ��9� �9015357!!327#"'&5654.'7(����COA/N^�KK[S�-'3)���;����gf
�) +�</� ֱ��+�, +�,�4+�& +�&�
+�
+�
� "#%$9��9 ��990133267653#'##".333���[���;VwC,RUE7խ��í���k����hJ-5����o�#A=%'Ic�f)��)��    ��   ) k �  +�  +�3�'/�3�!�2�*/�ֱ�+��/���+�$�++��99��99��	9 � �90133>73#462#"&%4>32#"&��y'
22�/���)/�*+�6�?��� +
���� 
�����+�
+� � +� + � ....�
 ........�@ �	�9��90173267#537>3&#"!!#""6Ea_2��
"2>>41;`YvuZUrsT"
�.�
f�!<+$'1�jz	(4�c    A	_�   5!A	��     A	_�   5!A	��     A	_�   5!A	��     A�o   � /����/�+ 015!A�넄  A�No   � /����/�+ 015!A
/�ֱ�+ 01>?K&"	�%z-�0���:���N     .��t   � /� +�/�ֱ�	+ 016?.$K�%y-��d+s���M    M���   A � /�3� +�/� ֱ��+��+��9��9 � �9016?6?M%y-{#L%y.{$Kֈ4M
 6 �/� 	+� 	+�/� ִ
+�+� �99 013	#?"���#�(��l�m     4 ���  ! �/� ְ2�
+�+� �9 017	3	4%�ۛ#�ݕ���l�m  � V$�  # 6 � � /�!�/�'�4/��/�3�
+�@
22��2�,
+�@,	+�� +�/�
+�@	+�8+�$ � !99�,�99��9 �'�99�4� 999��	
99014>3235!5!533##'##"&5!32676=4'.#"�:e�L8`A������#�`��0���tgJt
%4F%iy�\�f82"�l��l�quL|AM��2��}o�WH"g!8)�    ��?� / y �*  +�#� /�3� +�2�/�3� +�2�/���0/�ֱ�
+�@	+�2�
+�@	+� 2�1+��/99 � #�&9��90153547#53676!2.#"!!!!3267#"&'&'~��(����+-�F�s`!c��|��_v�O�/%8�c��O�$m!">o挶G�#vd�o@%m�f,�&4e_��    Cq0�  ( � +�	33�  +�2� +�% +�2� 
+�@ 	+�(222�)/�ִ +�
+�@	+�
+�@ 	+��+�( +�(�+� +�*+�6�?��. +
��	��(�'��� +
�#���%��
�.���&�����+�+��+����z +�#� #+�!#+�"#+�"# � �#9�!9� 9� � �#9�9�9 @
%999��9 015!##33>73#.'##.'#C�uW,�fg�.w'lzlbcc���T�� w	q(��_r�)��T.)29m��      ''  ' �   +� +�/� ִ
�
���.j�
M�N
NNN�ONO�PFP�Q*QfQ�Q�RDR�R�SPSzS�T`T`T`T`T`T`T`T`T`T`T`T`TnT|T�T�T�T�UU(UlU�U�V&V|V|V�V�V�WjW�X�Y    X                    �  	   �    	   �  	   �  	  8 �  	  $ �  	  t  	  "�  	 �  	  4�  	 	 B�  	  2*  	  H\  	 � �  	 � 0� �   1 9 9 2 ,   1 9 9 4 ,   1 9 9 7 ,   2 0 0 0 ,   2 0 0 4   A d o b e   S y s t e m s   I n c o r p o r a t e d .   A l l   r i g h t s   r e s e r v e d . M y r i a d   P r o R e g u l a r 2 . 0 6 2 ; A D B E ; M y r i a d P r o - R e g u l a r M y r i a d   P r o   R e g u l a r V e r s i o n   2 . 0 6 2 ; P S   2 . 0 0 0 ; h o t c o n v   1 . 0 . 5 7 ; m a k e o t f . l i b 2 . 0 . 2 1 8 9 5 M y r i a d P r o - R e g u l a r M y r i a d   i s   e i t h e r   a   r e g i s t e r e d   t r a d e m a r k   o r   a   t r a d e m a r k   o f   A d o b e   S y s t e m s   I n c o r p o r a t e d   i n   t h e   U n i t e d   S t a t e s   a n d / o r   o t h e r   c o u n t r i e s . A d o b e   S y s t e m s   I n c o r p o r a t e d R o b e r t   S l i m b a c h   a n d   C a r o l   T w o m b l y h t t p : / / w w w . a d o b e . c o m / t y p e h t t p : / / w w w . a d o b e . c o m / t y p e / l e g a l . h t m l W e b f o n t   1 . 0 M o n   J u n   1 1   0 8 : 0 6 : 1 5   2 0 1 2       �g f                             	 
   

Zdotaccent
zdotaccentuni2000uni2001uni2002uni2003uni2004uni2005uni2006uni2007uni2008uni2009uni200Auni2010uni2011
figuredashuni202Funi205FdongEurouniE000����� K�PX��Y�F+X!�YK�RX!��Y�+\X � E�+D� E�+�+D� E�+�+D� E�  +�+D� E��+�+D� E�Q+�+D�	 E�1+�+D�
 E�	"+�+D� E�
(+�+D� E�+D�
PACKAGER_BIN;
Packager_Php_Wrapper::$Contents[12]=<<<'PACKAGER_BIN'
wOFF     ��    H                       BASE  �   J   �c�[�FFTM        \�]�GDEF  $       . GPOS  D  �  8
12��y V 4 xڽ[
]�^ꣷ��+z�ޥ��o�w�{��������i��1������Zi���}�(z;8����������'*k���Q��l�+{���+h�zǷA�2:Ku8���p<�;�ԩ&�G�
��:B��3�?A=���Qug'��k�tZ����&~��(�y�����>��O����/�o���i�j�6��V�-���>����Q��� ��˨P/������RF�-G[1����8�>w��= ��� �E�=�ۃ�=�ۃ�=��U$����3י��_��6G_�|�p�����a?]��	�},R��|��̿U��;�n��
�iDM��si�[����_�HGCs��x�)����$5��s���cS������κ�K������P�H�-=^y ��Ԥ���=uJ��=YM �&��4�$�>��@V�pwF�T'��@k3�&�Z��c旌�E�MZ�4휳���
�'I77p����;��<��{:Z�{ԓ�i���
�󕏯����nVW��>��N��M,"3���zs��� '>	I��@�^A�K���f��f���%5Vn��5�����b��i5l��p��YCw`�M�Z�������H��};��J\� T؃�M|!p;j$�{�4��*��0�!f`�k5Ԣ/��K�̃v
Go�|����(Ji���Ƃ��|Q���
�H,K��u�R�W���0��6�K��C�z�&���r2)��Ɲ��b�z��Ī]hq�=(�7
g���~�~���W��\Ko��,��/*��F�	�|��� /fý"�1��ӈ`&$��a�B�[�Oع;9~.���03�щ�9��sF�D�.p��W�cL|��g�0Ǭ����'�vLWǴ�6���q�.|������G�</�^��{�N�r~璟=��kBm�zf�ը�G��8�Փ"]S2�ᒌL�k_3��|�љ��-z��@�`�؍X1���6E>C������H���X����A�cZ�Yg��(��"�W����B�%�L�Q�	i���ysѬ��eq-�7a
� PE��(
�$QY#��z/�O����M���
�M�œ��q%[P)�5\jT
]\��BG��
]*�.�Х�:��	u"B�*�S@�4H4���Q���4z_1u*�<`%"�8��z�B/W��
�\�
p��R��� ���:�B�J�c%���o��4,4��V	M����i�D �4�#`����c�U���
�pj��JvgSF��r�Ӵ����f��w�o����x�o˫/q����F�l+�Ǭ�Mߩ~[7[����c��(y�сnn�Vs����(���������xwR�@�x��4|0�f��|�>ܜX�A}]x%��F�s��	����4��IL�Y�/�]f5y�y*���W�M�d=4�n9��f��葇
��-����yE|^�h�1�����6��mD~�o�������Ǹ�<���%�#���?`��0��������!�[/ڶ:�v9"b[�(��a6��~�uɱ\�x����$>{��Df����vL|P>|<	�5��G�	��E�$�k�G��>����NbL5"ôNb�Q�.�_������n���.j���91̪'�u��o�:���q�k��D<y\�Q����vD�G�uZVfy&�����K).+>�����4ދ�\ �A�b@������Kcԝ�=
F��T)�><�����뢷3z�+�{�؇R4%�[y���3g�C���q��}��ϬK�⬝K	�.�Q����˾n��)�����Ӯd��!Uӆγ:K7�up�i19j��C���-�f:-�T��07�y��_g(o��9ɗx�����MWC�¼�Iɞ���,�vZ�	�>����h
�����)!:f�ݘ�R���vj?n������u����Yȗce�:�ޣJE�����Y�d)���:���ϳT�ٺ&����#f7���y��O-U�B٫\9�bȌ �T�f��_v�
��]�� �\y�`(�#Kv�p�Y"�V�X�H��Y�m͒ok���Fɔ�JV�]�8��� 6I��]r:��<`����$��Q�>p,�A2d^O-�!k�{�8��A2X��Z���i���Q2F�V�T&;:�Ғ�:�3:s����4�{)���*]x�c`d``�b(bhb`qq�	a�J�,�aPK/J�f0�I,�c�c`�a����[���1�U�A�9(H��� � _ �

����;�4���:	�!�qK��ͺ�����b00����.?�R��4�j˰��Ѽ�3��4@Skm���!��qK�˦�6����$���tUS�����]���`�*́��Vy&ҷ$�,
9�����@�HƼIJ;ㆵƑ���6O��<�Mmo��Y�w�K:�Ȇ�b;b)�	DBFU��Ͻ,�R��@��������D<��u1Vz~���ˊ�V�΋Bwo�j��)��^ξ���Ac�����J��<,�4hCz7z���ꈫ�>�'ӿ�Z     �� x��}|U���U˲5�.*�%Kn�lU��qzb;��HBR	I @B!�J�K���P>�CY�K��ޖ��z���۷�b�;���vB�������-ɖ5��{�9�S�a�kNM6*�d��LgRYS��)�\EE*�e*�`	�1Q����N���Tt�V�@Q!�.}�Y���T����D*D��,.�d��7
�dUu"���s��)�y�Y�RT_�-��صgy�����F��Qy���3�2˹߰W)�a8F�42T�.F�h�ڊ04!�;��Z��5�jRѥ��D-,C��2��QU�$�۷�x_)����oV���x���}���2.2�I Rk~$�P�ٖW�ED���dy��k�P'gp���J��J����C)�.��E!��XW�Ĩ|im�*��dUt6��
Ac�����a1�/,Q�Ȗ�q�
!^�bӪ`,Y/6���c�D(0t�jSE'G���;\�S���'VCg�Ug�O��[��
^�&�1��_�DYWAޘ
�U!�I�~�-)X�B�q��p<���\,O�"�M���p���$x4�O,Hv��f��]s���\7��s��C�wU��zs��������>�k�������x��X5t۫��}��s��$+��e؋�O�{��glΒ�i9��哌��0~&�g�3���S�焺lҳ!�����(ԥ����qA5���#�
�I`�)���aAWp	�5n$�h^��h	}�U~K�ϼ�%>{㈹���gn�7�ѳ�[0�q��\1"��X�(7|éHO|������
�n��J'��^b��aT9��8�k(�����h��"��Il� �(3�N�L�~�	�Q%�U�J�k[���z��;����y��6���I�K�ב��Y����[�L���ģ�ܛ��b�bK��tH��9�f�ߧqh��M����c뵵�����#�;Ă�⦙���ڷ|���#���64�ڡ�bIyE��3��x#g�	Q{P��@6�q���B����Q�3��;��`[��2�p����W���Ho7�Û��fG���-k�հ/�;v%�$ҷ�~w{���Ó��y�����<�����ye���,�$Ʋ��
@h��ԀǍMDŪ=%m�c������Ht�����m��?-;���Q��'e~�p�h'N���������:Y���+�ez-bR�h�s"d�2@�t���8%88+G�6��&~�����v�t:}�	���`��h
V#-AM"�e��k�*v�=�w:N��S>X��ifR:T��Gȇ?� )v*�9�T3X�=0Qx����W����4T�� y�)fL#jc,ʂ�a;F�td�o��>�ͧ�t�=7���T�e�C�")x~nzK�����z��LI�5��n�~��9�+�����*�%5ؒ�e����)���A�9NA�&2�$��QI�����O��X���&������z� ��������h���;&:�{RN����M�ħ:��
��g$�l�S:�Ͳ�(���H,Ѩ�U�ڏ�p*@�)r��m���+G
	��ĸ�G(,:Ƌ��0��As	�a���Gr,`���"^���X#�"�h$2O�~�h� �j����s8O�oF�=ikS��!QGqD��Z�$�lv��vns�ݱXي�#�����U�¤|�'�-k�.S��Voj,��r��騹��bt�'��^�N�Y7h�Rd7N�n���vk���A�DA.�@'NcRZY��"���,��9$h�	�aQ��#pᔆ��
6WK��7�J������7��\����� A�J�|4�Q�����÷�>����ꆚ�C��k��Nݺ���=�+��H�����XĬ��2�A�Ѩ��|�2wH�����{��n��[���7�F����ǹN=�@���8��<�
���:^$�Ii	�Ρ�Z��ȖA;�U�G�M?0�����U3��{�z�ک�:n�骥/5�)
��9c��9�S�w�ڪ_�~aצQ��Q�?���'���L������&� MHT#i�T�� ��o�U��.X�	�`�E�i����N�`͕@DԘ���#�:�SG�`�8��&�t�H"�%jըM+����)9ey��zE���W�6��#K�}y�+d��y
|�k���{�BG��%���T�=D�2��"jQ�X �y����������(6�����(��
.�:=tzYÙ�x< ���r����-[v!��B�~Jy��ʌb��H��!�MɣZ���D�j��8�[��}� 7N����?���֍
GW�[_r����ǛcK"�'�9��6�gv=��%�
��Hr�O�m�[�����.o�j��}a�qRl����;v,��*=�1�s��/� #&3�Cp1�D%�7�`�ͅ<�l>�d���+��V�Eq/j})��Z�L�

�������mpEz����^�jp�Lص���J40I�'@�P�4��g(y	�s� |E~�����o�Tm=����n����%�j�w[��7g��I�{��6����[�J�VJ^��7�~}&qJ<U|G��I�NjI;	�H�E��i�vR\eÂ��ҁ��tDf��<����컯��W�ٻ���D��;Z�+\�,��q���=��>�x>
J��U�?)�J4��R�3�,_���ī�F5>���A^�N^�6��8��^h�A>u<�8�����J�����[䲎�n��SZl���<�v�Pv�y�բ���̋\�)b2�"q��<�j�l��������ԔEd)Q�ό��y����'w~��F������y�D�wA����J?��e�ɘ���J��{3�٧�T.Ɯ�V3�����PV.ф+�ń��¦	YFQ�Jf֮̕��m	_>�&�_m�'�}L~��t���;]��4U,Ӓ�yW�d�����7���w��"���{ �Z@��R��h�
M��n�a5�%�f�g/��O���:��uL�?�G���F���a�0�Ա�p��u=��~�Ƨ�_��O�}�RV7f֚�Q7.�{ۖ�3sƽ��}쯞"޷��鹯���}~s�o��'�x������1+��3a�S�2h�=]}�Ƃ~���L�O��5=]9f�E��,c�)�A'�.t�1��C-�9���B��d�������?�ȩ"�ė�u[i�h��?�>?V7o�cS_|pC���q�wƚ�������?玸}��ݹ���+�>8��WBEB^D�f��Z�"B�.�	��4�F8Ya��Lc-5�|>z�1�#M�w��|g?��tbL!�[0C�Rʼ�L#��ܤy�r(��'J#zm�V�b�L����t����	*����{�rV��3��N���S�m��w��z�t̊����=z����_���gq���	��ֿ
׺�
��ء�CΤ�l� �F?�C�a�����;ٴ�շ�\ӵx�O�ъ;�
c����Ť���n8��<���/�ɞG��^Pʌ����L��\�1iG�"0��g X�?�0l)\�1�A����kF?���ļ�͝y�֙Qv6w����,O��n٩C7�=/P1��ct@��}�q�JQ��t
`��Օ�&�|��KI��V�Hv���!�"��g���n|f]��u�����I�Gi��b~�q���t�J�-��j���ya_��O�Ճ�.2�����d�R�IB3�����1�ȿ�ͷ����鯽���֋�l
O��oQx��>����5�����b��DGH��a�/�NK�|a�S@����ZDI�,�UD��0+Έ,Z_O���b��$L�$G�K�����1=���{�?Ӎ�g_�:{��vA��3����L]v������-k��Kpm`��^�6^qʐ�*�FZ5��-9�P5cu���7VѨ�e��_�>_�+t���O�6U��^􏤽�)6��8%��ʮ��%\s��� ?I)�,(z:�ZB) �h$�S��Ban��Yܖ.�k��p�#�v�BPZsr���4uZǶ�]�gXr�t=���q�Q�VR���4�IS��*,�a�G��ȝ'O�]����u�ي�O���9�3��	�b/;a��7��ü�iy��|3����h:#�C}�J�J��A$Vr�0��j�L�P�w���������Z�i�J�S짹�\FNMf(��+y};y���.Ez����T7�����L���᧧-�ƀF��t�݊�'�d�$�U���
np��H����f�Q��	Oa���Gm2�d�+�XU���W�6���J_�%k�[���h�[��ɲ�
I-S�t��B7�Ò�b�\�W��Z�<���RYii`���9+��c��e��d[	���?JMLnwó�_9�����f�JG��7��-�~���z�~��_��?lX�*����m����l��~��EIOݸ)�U&ݳwN�Hl��{��T�Nj)7�}�p"�d0�U%`.���(��SDd�=X	FG���+�Du�R�<v6`�<>�C�W�B��p!����I`z[�st	�w_s�=��
bC�F:Bҧ_�v튜X7ϵ��N��M�:u%���O:����T2M�z&��EJ{� b�]�P����f�=���U��
+Ϭ����T���v���^�C`����4;�J�{�_!�8�3<Pg���U�M�5���y۾��c���%Ӄ�W�i�
�^ᇳkg�ɸ)7�� ��\5���3�R��#'Vm�i��,
��V��X��j
`uY�1� Ɨ�!�_*�,���b�	}��q�z�Fg�N�ʊ��+G��z9�ht���%{bb�fA�!�e���7\��PG��$�e���{�d'-��m��xy�J�ڦ+�ʓþ��͜j���x��X�C>k��GsGz�D��3�!4�J0�Ez���lR�RNr�q䐞'u
s��5MU���n�������oH���4��y�˦V��P��dd;���kf�0��v]�W�&ݫ���`�-�l>@Y�x��G�C�4���ǳǜU�M�m�n���(Pۏ{���=�7,�eo�Ļ��ys������-�
Lm��Vl�:�,��0���K�e��Tۥ=:��&��ˊt��>�W�A`E���Ϧqy�*�$������\�gb5z!z�VY�EfĊ"�jYZ#?��Ye�����?4b�����r���U�s�q3Y?�u��
.�>�˞�1ќM�V@�fi�Qo��9�Y|gycCی*���l�^
1��im\�m��u�( u?M���������Mx�m�v�.�EE
/�>���M.����d�9藅G��
L4��ҒH��R�O��cWJ�(����K�異K��+#kw]ݻ��R�]x���:6��
��.���$vB|8�=G8V ��~`�� h��p������&H��m�{&,�f��B���F�y�#�j�d(.��/�K�|�0�� 2��E, ��fZe�V�D��&��L����%�WO
�F��7( ܶ������|hp#�=�{͚�k�ɣ�5�
1	�]�ވtg�؉�
h���&���ә�X�H�?&H�D�g���6x�o5�IQ2bZ�r���u���R7G~v�S��b����[FyMe^�Sg��/��&=�lT@��b}��K+W��h�Ρ-�zi��PW���ϖ[�ytR�H�V��P{�I��<�69"ϵ��=������N�Ya9�g��ݧ��T�S+AϗS��p��m0�{�<R���0�Å��Ғ�a�c�ѡ�Y�����'h@�)�HfO���߾�}���Y�?0��8iQ�en�#�_~�a#�ާ����cllw�
qٰ
���!�9�!a|���E���5X"d�d��
~ɀ�� ��
�7T��G�lh�����`Ks(8�5��8��U�=L�r�rcb��f+#䆺�%�����gڵ��<�k�jb�`�e���R�rBz�0`ԫ+K�<�_�L��#�JO�����ֵ _��B�?��8K�Ս��F����e����k�f�rX���<5�UKülǢ�?����g.����-��烫V�lפI��_��ݓ^�f��1�

笞۠���i^�/\��̻�ٞ[N^����[n=udɒ#�����=�ɴ�>�f��3c�}�m�~pa]�uRx�i��O(*�0�qɝR}K���Ͻ�(aG�K푾7���/HɽC�'��l)ٓ^�^FvK�g�Y2gtQ��3�8
�|��H��y�1��%i{��-��)*1|Xk`��R��&��x�yf���-(ָ0a�	�Ul�c�z�4��X�'�j�mo����9������֭�o�
κ~�T{�N��[���`-�\
Ve0�eڕ��j�5�{vP��8/�`�N��Vz�+�j͜S�d�(d~(���*e��KG�����:�E��2Z��c�
ؿ�K��{Jշ����ɡVʏ�G��kx��,��l.����_=�]�c�
��
���QKԩ9�t����թ�	4�;��]8	��z��� ��~@f1 ��Ȭ�\3�c�|Fh[�+�W��DI���/�<;�H&EM�t������͉���|R��ͩ�n
�m8��h%��B'�+
B���(����H��}��)�%�Y_��ʹ�s}�#��Kp�=�Kt\h�/��deTx��J���Z��V/h��Xm0$G�R�3�\y�8Y�B�M��������i��5��?�믍��'���:���O����I{̀V4e��.3+{#��nL.	��Z`��jX��f�{4J�Þ3na�^�C���*�����SnFn��I�)RY}���@[�z�=a�k
R�T��gRvg$9�7U�Λ�.6/����_n���s2�lY��rrm ��oȟ�3���珄����������� ى�G���XTv�j.�EX�B��"B�~�����+n��bň�%2��R��^�2��i ���jP]VF������k˰�+V�U���#b���Ay98���7kxZ%�>� ��c,�f]I)�>F
8�|�����B4(4�J�q�V�8��Wcߜ�e������*:#�����\/��{
~�h"���5$��@����m>W�D�����ŚV�&��ƺa��I^Vmv����9��b^;�NB�#]B�Q��&/JS��,�M����
�'_�P��M�u��X�.+�4���f�睚�/"�oH2�
�>�/�̾4��/���L�@2e4t��oǎ�����Xh���~�#�6F\�����`�#�
����eXϕ��G�՚�U���F���=[��WT��8��o͊�+���G�@{��v�tH�Z�Κ�����u�H�]Ħjic��]Ye�h��>DݚPfk|���:skđp�Ě��%��#?�{a�\�i����s͂�y�����6.�G\�haS����m
8:)7���s���`���;u�|�K=���7�r��rn��;�13(��Q��:҄��A���%���ɉA��*�ZJ�6������f���^��}i7��;�w�2���#S�'6���z�\WqIY���|�d��l��9�af��]۾���#��ڎ�]ۇU�B_�&M���mI�T��s�e@�����.н]��ߺ�M$y6���]��P���:��T2�E ��4���G�_$��L�ڙ|��8��C�|�{���=_/��o�d�u��/�|@�ďnʏZf�����Ր�V� ��؃�1 =�>Nu�)��!ڐ8��T�1p0�s*�,�*
:�M�P����,;�Ȁ�=�&�F�:�9\r�.�#����p�>~m[�Q�rrm?gXf/|+���;+�������7��43	k�|��gb��<����y�̭R%gnM�`b��⦸�-��}>�yl6�[;�'F��)w[ Ձ��t��yr��F��E�1`Á~��[�L�GN�r�!�DK�Rj盪*�~y�m���Pl��p�Qn�
r1L�(�
V������R�}ԇ��zh��:稛m��p�.c�����3/K_�и���=+��� z����9�P|�����0���px��U��3\�4�$p��Go��0���������is�$*��vW(�HZ0�|���7�B�p�2��@z�4����0=�3������ospP��"��؊��,�����8q�.H�um��6��:,�(��Uګ6Cj���Ȳ�2��Έ>~Xi��MB��υ:xK%�g�)���*��X���e�=���|���9T�`��n${h/fC�+\xA�|���Z�2�5j���s�?^|�����^���/������������"������Pw�
�
)��
/���UT�!�������ԡ�xA�#Z��p���ѕ}�p�s�����/ΚP�����s-�(����W�T����"41ը��!���a�O�1c7�/%�)����W,�M��;T�
u��1)�u���Lw��!/��[B�h����V�@�g���s�OV��N�Fa�i�d1�%M:=W�����3�GK�*]î��\5�Q�����5/�UDk-��M�n��?3I����T��4rnE d����Gl/W(ȶ��=hxc�Q�4~�Y=������>e�rFk�hA~���=6�Z��s����ܬ��������&��2��7)6�|�E��)
���~�K�h��YwlT�̝Ϻi�N��*i��t�6�'�]w�7�K#0>˴��V�XR=��K�����ѭX)��j<m}�z�׭������g�[��4��<�z*0�͵J��Zl)P�(�奮G/գ�R'9c���tͰ�#o�F݉Q��b��a��]y�#��h�����!�v0
���&��D뼁Q'�o��eU� Q�����J�2��ے���&:�UZ�Z}���%���!M�!�/��c�]��.��o+p��%
��=Ŷ�l3��!ޫ��:��]Zi��hY��=�,=8ۨ_��,���G��)`+�(��Pe�3b����2o�s�@fg�Ao�"��Av�%&�������6PQ��sS��! �6�������|qvF#!ޥ��e��������T6;�M@�s�D��&P2zj��X[�-J��t���@�է�&o�������_�����Cl;��&�W	���8+ch��B�CB�+��|�EW�E仍��,�V)����',j�Û�=x�(����9U�[��z�٫�[��6�n{v��OϺ�`�7�d��VZ�}��D�pv�/Q��'T�m���
�nV��θ�+��tF8}�sK:��;�RZ/�Ow�R�r���B��6,^�I� ��2c|��"Ϗ2?���K?�py���%_����^��rwǯ�n�&$j�L����%]����^��~���~P��(-�	��5;q��W��ơ�w'%�W�,�����;����Y��� �A�#x��=T�j�����ɬQKŭBrkU�R�26Y�0���R&<�e�Mφ�d��8b 3���bs�����n>4Z�]/F����.��w����G?{~l�]�x�G�_L����~������XQ������y�)|��Lᦲ6"�1Ow=���s&���)�ui`�B��t�O������ ء�ޭh��)��m'#S
��!z:�
i,G
��!���GTH(�����;B���Å��xd������KsC�׊�D��V��V�8����r�n���e�:񌫨�-��Y���(�+QwEn?��y��:�����~Ӭߛ�e��(�����,R쀞7ƛf]�"\���-��"_�K� ��q;Gyϲ~ꆅ�猑.,	}y=��DoU�j��w.��ᕒ��	G��xR!B���{Nplx�:�Ԓ{��K�l"��l`]�L��^���:�d��kp��r�F�社w3o?	�7��w��%5w�
Y�%�h��Gy�Pu9��u���P��UMɕ��Ɏ�u2��z��6���]�jY�����!懲�2?������T���G���+�ev�����\�	�#K�0my�5�u*������mO�g!�-R�J4��V�&��͋�b��g���]��u�#_�I:�.���H�iɄB6>��yp��#G�$�-޸�u}�/Qڏ�>�"���9Kj��\�pʉ���..���r���y����{q߯�_�5�o9�"Ȍ,/�0���H��/���?X%J�B/�7^���%s����<�{Q�V�D���*� 
�A����Q��Oؠ�$k�Ng�I(��I�H����X'r�f�6A�#�y[L%�/�)I<[�3ٳ��;���^�L3�)�##8P�f͚�+��M4���qy�6j{��,�J�G@�!�+��<�G�x��:&r�H����%Ep�B���y���O@�c.siV?_9wuNה;wk2k��~�Ľ�V����*�ƙ�M��=%�Nl͚ֱ�6����؞R��:�U@.t�:�4�cUj!2����j��jl�8���D�\��6�$���J�F�2��K�^|%ƒ��K}�滼}q�R�v圾c[��(*�ZF����˧U�/�~n�ApF&�u��$�_��<��X��):I�̊
�j��]���<n���҅��N>���w_�m�v`�W.�6��M�
�S|�kb�w;�ѨN)ō��!�	g!q0m629;��s��&�f9v@�M^OC�	z^^M����4�WOY;��jyu�4@Be}!�xx/�����᪚z�%����ҥ���w�}n�a]
�X�K�%w���b��,p��Y�n:S^���Y�nZF�ݴ�n�ʨx��1)�>QM�*�\��Ո�v�
V#�d���=<�OM��m�s�W%Ո��y��;��Jo�;�jD�����s�-�Z��R�5��P��0��o�M���Y��ҩn,#��5-��K,d���Wq��s���;�=A��}d�ceu��
3�lM�6�SYaA���
O<��X�����v�po`;L�!)'� ��6Y�GR�+��vJ���QK6���?����W'��=��4�M\�-�1��w�Z����[/�Ci���G\�«�A�+�66�ި.���۹z>�T1mqj�-���wd,Q�M�
�9�<�Q����4�q��Y�&���c�b��u�J��!ǫ'å����@k44*r���.3ۄ��%܃oc^d�a�^2�Px<�JF*�[�1�JJ��<a0��P�1]�U��S����)sq\�뵱���ȡ�K�u�>b��0�*�U�^Zڂ��u挃��0,2�m�V)�8�h.uV[U�%iK���H	u0���
�V�0V_^���`�H_��p�����q�)����ȕl�ޞ���ox�\�����s?��̾w�w��Kg�p�d�������W?yG�o�����=�>��yd/��pW/�<d�i�}
(B�+{:/�׵)�e�5tρ�=����8�ZDxrNxũ)�w 8bMu9�tk�,��L�f��Nb$r��]��"���.��jm�i%c>���g.E��U}�L��k�2GG��=3�wr�ɺ=�p��d���{��{�����z�������?to��su����;w=jݻ�wq\�߯j&q��D�S]�Ӛ���Г�S4
 �g� x�c`d``o����������~@d�� ��9   x�m�MhQ�O�{3�RAj�HA	J�\T��bBRb$�R�E�R��HiR*�-bD��N�p��EK7��D�E����ә0`g2��w�$6I�xG��ZA��pܔQ�� o��Pbu3�_��]/F��R����Sk���;#'��P�"�=G9���5�GTWQ���uY� �f�դ�g�³.��
�g�1�
	:	�	���:$�EXI�B8K�Cx��1?�=��
�
L\�!�%�%�Dp@pU�0/�&�+dQȮ�{�,��9�B����� Ⴐ#aG³��E|� �o�}       X                xڝS�NQ=����P+���2��T��		��"+�%�j�������XYY��	��;{A$4�v�̜�;3w �3,�9 �E�����hla�ǰ�o��KOcٸ�x�0�~�,���s�1�4��k�jǁu���G�?����)dy\�
v����Dۨ"@>qw�!$nQ�8D�vё�'�*�k�ش6PC���h>�Oy���T���"q�}5\3ޣ�e�Y���}��(j}$n\f{�s*���
؋��"��[�ɳ��}\�F��|2�`�3�p�|�sIk�Y+:ޡLq��NZyC&�S��@�k�Ͳ&�P���Cy�����uE[0����;��ڒ�.q'�_�(b���6�	]K0ԋ�|Mo(=+��jJ:�K]E���h�Ȯ*��+���Ǹ%R�&oQ[2k�u&�QǑyE���E_Hv���#�I��G�H|�茶
�!�9�7����H棬)~�ܣ�li�zF�[Sp �ι0   x�m��oLQ���O�355T�Rj)Z��Lw��Nm���R�53�ez/�s-�'D��ų%� �-!�طX����t΍�8�9�s~�����Љ��a�"��I�H�A2N\��7�t�CW��Fw��A=�E&��C}�G6��@��`�0�\�F>��HF1�1x�ᧀB�(��R�K9��&2�
&3�JT1�iLg3�f5�2�9�QO��e�Y@Y�b���eh��8;��a�������S����Y�� !�x�#�$�//x�s���y�+���nV��*Z��s�5�Ƥ
���EU���G�4:"��c~�,�1 x�=�1�@�l�&!��lf�$*���I�*�ѻ�Z��.�Ge���v�{�x�>�X%y��a�Z7k����$�C8�#�j_Y�d9jE���;�V_���@�g��j3ai��M�ܭ�xK���5�@g��@��C[5���`/7���`��ܰ�/C��a�����a
ʉ� L�$���Y  O��7  
PACKAGER_BIN;
Packager_Php_Wrapper::$Contents[13]=<<<'PACKAGER_BIN'
           �  6        �	  �       h  f  (       @                                                                                                                                                                                                          � � T� �� �� �� �� �� �� Y�                                                                                     � R� �� �� �� �� �� �� �� �� �� �� Y                                                                        � � �� �� �� �� �� �� �� �� �� �� �� �� �� ��                                                                 � �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �                                                            � T� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� _                                                    � � �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� 	                                                � S� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� ^                                                � �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �                                                � �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �                                                � �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �� �                                                � ������/��.���� �� �� �� �� �� �� �� ������ ������ �                                             �:
g�������� ��� ��� ��� ��� ��� �������r��������������������������������� �� �� �� �� �� �� �� �� �� �� ��"����� ��� ��� ��� ��� ��� ������������������������������������������ �� �� �� �� �� �� �� �� �� �� �� ����� ��������������������������������������������������������� �� �� �� �� �� �� �� �� �� �� �� �������������������������������������������������������������� �� �� �� �� �� �� �� �� �� �� �� ��{����������������������������������������������������������� �� �� �� �� �� �� �� �� �� �� �� ��
[����������������������������������������������������������� �x �� �� �� �� �� �� �� �� �� �� ��&����������������������������������������������������������� � �� �� �� �� �� �� �� �� �� �� �� ����������������������������������������������������������     �| �� �� �� �� �� �� �� �� �� �� ��)�����������������������������������������������������         � � �� �� �� �� �� �� �� �� �� �� ��S�������������������������������������������������             � � �� �� �� �� �� �� �� �� �� �� ��
S�������������������������������������������                     � �r �� �� �� �� �� �� �� �� �� �� �O��H��������������������������������y��                                 � �k � �� �� �� �� � �W �        ����S��������������������o��                                                                                                                                                    �����������  ��  ��  �  ?�  ?�  ?�  ?�  ?�  ?�  �  �  �  �                                      �  �  �  �  ������(      0                                                                                                                                                              � � �� �� �� �� �� �� !                                                            � p� �� �� �� �� �� �� �� �� v�                                                 � �� �� �� �� �� �� �� �� �� �� �� �                                            � G� �� �� �� �� �� �� �� �� �� �� �� �� N                                        � �� �� �� �� �� �� �� �� �� �� �� �� �� ��                                 � '� �� �� �� �� �� �� �� �� �� �� �� �� �� �� /                                � X� �� �� �� �� �� �� �� �� �� �� �� �� �� �� `                                � f� �� �� �� �� �� �� �� �� �� �� �� �� �� �� n                                �Ve�e����	�������d���� �� ����D�	�c��l�	�a��D��Il                         � ���������������������w�
�i������������������      � �� ��Y�������������� ����������~����������� � �� ��
����������� ��� �������y��������������� �� �� �� ��
��g����� ��� ����������������������� �� �� �� �� �� �������������������������������� �� �� �� �� �� �������������������������������� �� �� �� �� �� ��|����������������������������� �P �� �� �� �� ��-����������������������������`     � �� �� �� �� ��
PACKAGER_BIN;
Packager_Php_Wrapper::$Contents[14]=<<<'PACKAGER_BIN'
�PNG

   
U����G�CZcL�`�.rSjL<�{ ^��b��)1ƞ�`�j�! � 1 ���n�7��v����V�/y�����o�{�.�!hjæ�4j��P�9,(y���ī��E, �Q��`r@}�:��3 �Po���ϙ@��m ��f��x�t�#�Ta�cs@�pY �=C����1��%���r��L��}此E7�(�� _M �28�
q����� �$#�M�2�`����p�� ÁGDW���[]?�cOʋV2[hXtWO����!�Nd����l�$N�ڸ/Q#��DgKݩ�ѱٮ#+��
	�����7�y(�g�j��[�ah
=o�}>sl��̦�a�B�O7�-A��ʏNk�շW �+Ӕ�E^P��Q�F��IL���[�[I��Łe�@=�V
����=��2oUDC�ɨ��`p�D34�7�U�arP>5T���:�bM��Vj��\�ד` �\�S$T�F%�Zk࡯��}�M3p���u1���*.��j�M�}'*����B5uN����PKT��h�j�������|CeF���5��;։ӣCK�k���"��J�
�׃���
h� ��(p @A�@�'Հ�<��B�oW�z�����sZ��V@vKX�����} }��*�8����b�v��i?�&�}*��^�P��/-@�*�+|���
��G� �p��j�v    IEND�B`�
PACKAGER_BIN;
Packager_Php_Wrapper::$Contents[15]=<<<'PACKAGER_TEXT'
<?xml version="1.0" encoding="utf-8" ?>
<doc:data xmlns:doc="/Documents.xsd">
	<doc:title>MvcCore - domovská stránka</doc:title>
	<doc:description></doc:description>
	<doc:keywords></doc:keywords>
	<doc:robots>index,follow,noarchive</doc:robots>
	<doc:og-image></doc:og-image>
	<doc:og-title></doc:og-title>
	<doc:og-description></doc:og-description>
	<doc:itemprop-name></doc:itemprop-name>
	<doc:itemprop-description></doc:itemprop-description>
	<doc:perex></doc:perex>
	<doc:body>
		<h1>MvcCore</h1>
	</doc:body>
</doc:data>
PACKAGER_TEXT;
Packager_Php_Wrapper::$Contents[16]=<<<'PACKAGER_TEXT'
<?xml version="1.0" encoding="utf-8" ?>
<doc:data xmlns:doc="/Documents.xsd">
	<doc:title>Stáhnout</doc:title>
	<doc:description></doc:description>
	<doc:keywords></doc:keywords>
	<doc:robots>index,follow</doc:robots>
	<doc:og-image></doc:og-image>
	<doc:og-title></doc:og-title>
	<doc:og-description></doc:og-description>
	<doc:itemprop-name></doc:itemprop-name>
	<doc:itemprop-description></doc:itemprop-description>
	<doc:perex></doc:perex>
	<doc:body>
		<h1>Stáhnout</h1>		
	</doc:body>
</doc:data>
PACKAGER_TEXT;
Packager_Php_Wrapper::$Contents[17]=<<<'PACKAGER_TEXT'
<?xml version="1.0" encoding="utf-8" ?>
<doc:data xmlns:doc="/Documents.xsd">
	<doc:title>Rozšíření</doc:title>
	<doc:description></doc:description>
	<doc:keywords></doc:keywords>
	<doc:robots>index,follow,noarchive</doc:robots>
	<doc:og-image></doc:og-image>
	<doc:og-title></doc:og-title>
	<doc:og-description></doc:og-description>
	<doc:itemprop-name></doc:itemprop-name>
	<doc:itemprop-description></doc:itemprop-description>
	<doc:perex></doc:perex>
	<doc:body>

		<h1>Rozšíření</h1>
		
	</doc:body>
</doc:data>
PACKAGER_TEXT;
Packager_Php_Wrapper::$Contents[18]=<<<'PACKAGER_TEXT'
<?xml version="1.0" encoding="utf-8" ?>
<doc:data xmlns:doc="/Documents.xsd">
	<doc:title>Dokumentace</doc:title>
	<doc:description></doc:description>
	<doc:keywords></doc:keywords>
	<doc:robots>index,follow,noarchive</doc:robots>
	<doc:og-image></doc:og-image>
	<doc:og-title></doc:og-title>
	<doc:og-description></doc:og-description>
	<doc:itemprop-name></doc:itemprop-name>
	<doc:itemprop-description></doc:itemprop-description>
	<doc:perex></doc:perex>
	<doc:body>
		<h1>Dokumentace</h1>
	</doc:body>
</doc:data>
PACKAGER_TEXT;
Packager_Php_Wrapper::$Contents[19]=<<<'PACKAGER_TEXT'
<?xml version="1.0" encoding="utf-8" ?>
<doc:data xmlns:doc="/Documents.xsd">
	<doc:title>Zásuvné moduly</doc:title>
	<doc:description></doc:description>
	<doc:keywords></doc:keywords>
	<doc:robots>index,follow,noarchive</doc:robots>
	<doc:og-image></doc:og-image>
	<doc:og-title></doc:og-title>
	<doc:og-description></doc:og-description>
	<doc:itemprop-name></doc:itemprop-name>
	<doc:itemprop-description></doc:itemprop-description>
	<doc:perex></doc:perex>
	<doc:body>
		<h1>Zásuvné moduly</h1>
	</doc:body>
</doc:data>
PACKAGER_TEXT;
Packager_Php_Wrapper::$Contents[20]=<<<'PACKAGER_TEXT'
<?xml version="1.0" encoding="utf-8" ?>
<doc:data xmlns:doc="/Documents.xsd">
	<doc:title>MvcCore - homepage</doc:title>
	<doc:description></doc:description>
	<doc:keywords></doc:keywords>
	<doc:robots>index,follow,noarchive</doc:robots>
	<doc:og-image></doc:og-image>
	<doc:og-title></doc:og-title>
	<doc:og-description></doc:og-description>
	<doc:itemprop-name></doc:itemprop-name>
	<doc:itemprop-description></doc:itemprop-description>
	<doc:perex></doc:perex>
	<doc:body>
		<h1>MvcCore - homepage</h1>
	</doc:body>
</doc:data>
PACKAGER_TEXT;
Packager_Php_Wrapper::$Contents[21]=<<<'PACKAGER_TEXT'
<?xml version="1.0" encoding="utf-8" ?>
<doc:data xmlns:doc="/Documents.xsd">
	<doc:title>Download</doc:title>
	<doc:description></doc:description>
	<doc:keywords></doc:keywords>
	<doc:robots>index,follow</doc:robots>
	<doc:og-image></doc:og-image>
	<doc:og-title></doc:og-title>
	<doc:og-description></doc:og-description>
	<doc:itemprop-name></doc:itemprop-name>
	<doc:itemprop-description></doc:itemprop-description>
	<doc:perex></doc:perex>
	<doc:body>
		<h1>Download</h1>		
	</doc:body>
</doc:data>
PACKAGER_TEXT;
Packager_Php_Wrapper::$Contents[22]=<<<'PACKAGER_TEXT'
<?xml version="1.0" encoding="utf-8" ?>
<doc:data xmlns:doc="/Documents.xsd">
	<doc:title>Extensions</doc:title>
	<doc:description></doc:description>
	<doc:keywords></doc:keywords>
	<doc:robots>index,follow,noarchive</doc:robots>
	<doc:og-image></doc:og-image>
	<doc:og-title></doc:og-title>
	<doc:og-description></doc:og-description>
	<doc:itemprop-name></doc:itemprop-name>
	<doc:itemprop-description></doc:itemprop-description>
	<doc:perex></doc:perex>
	<doc:body>
		<h1>Extensions</h1>
	</doc:body>
</doc:data>
PACKAGER_TEXT;
Packager_Php_Wrapper::$Contents[23]=<<<'PACKAGER_TEXT'
<?xml version="1.0" encoding="utf-8" ?>
<doc:data xmlns:doc="/Documents.xsd">
	<doc:title>Documentation</doc:title>
	<doc:description></doc:description>
	<doc:keywords></doc:keywords>
	<doc:robots>index,follow,noarchive</doc:robots>
	<doc:og-image></doc:og-image>
	<doc:og-title></doc:og-title>
	<doc:og-description></doc:og-description>
	<doc:itemprop-name></doc:itemprop-name>
	<doc:itemprop-description></doc:itemprop-description>
	<doc:perex></doc:perex>
	<doc:body>
		<h1>Documentation</h1>
	</doc:body>
</doc:data>
PACKAGER_TEXT;
Packager_Php_Wrapper::$Contents[24]=<<<'PACKAGER_TEXT'
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE xs:schema [
	<!ENTITY amp "&#38;#38;">
]>
<xs:schema targetNamespace="doc" attributeFormDefault="unqualified" elementFormDefault="qualified" xmlns:xs="http://www.w3.org/2001/XMLSchema">
	<xs:element name="data">
		<xs:complexType>
			<xs:sequence>
				<xs:element name="title" type="xs:string" />
				<xs:element name="description" type="xs:string" />
				<xs:element name="keywords" type="xs:string" />
				<xs:element name="robots" type="xs:string" />
				<xs:element name="og-image" type="xs:string" />
				<xs:element name="og-title" type="xs:string" />
				<xs:element name="og-description" type="xs:string" />
				<xs:element name="itemprop-name" type="xs:string" />
				<xs:element name="itemprop-description" type="xs:string" />
				<xs:element name="perex" type="xs:string" />
				<xs:element name="body" type="xs:html" />
			</xs:sequence>
		</xs:complexType>
	</xs:element>
</xs:schema>
PACKAGER_TEXT;
Packager_Php_Wrapper::$Contents[25]=<<<'PACKAGER_GZIP'
�      �TYO�0~���TA(�U�\U{J���ˊ�}u�Ib�đ�^T��;N�]iEQ�t|����y�ˬH�Ԙ(Ӫ�Q��\D'��nd,�ek�B.�w�Ђ�ߐO$����N�<�>�xK+)A�w�K�P՘��f�o���l�f��ZEz���^�hП�21�z$S�d�܃2΁���.j�z~�ݩg*��H��#�X�Oc����������6���D^XZ���2v!��Y��W%�;-A�c�l���kx���������մ�����WDu�9�D��9&�v���~��bY2���ƣ����+��9�d�a�	h���'���z>����X�P��2a�c�դ�gW��d����)p�L�f\�Tέ�}B��$>�I�����פǧ�g�X�Ga�
F��t�΍��91J
NZ�������T:1��$<�
PACKAGER_GZIP;
Packager_Php_Wrapper::$Contents[26]=<<<'PACKAGER_GZIP'
�      �[�s۶��ޙ�2�k�L�m�����8I�4�i�6���I��M�^��ce��{���h7ݹ_D ����ѣ�QY�*
�Ju����X�"�+�=CH�PGC�~���U9�E^���	�Utwg���`"Z�D��9q��evkU���+ {"�k\�c'�W��,�"�Z���1�i-��bւ�բȯG+y=��ϊ"/,vѣ���BT#��*na�FU>
�(�)�]���A&x�^���N�����'��<�������y󻍶�ڐ���[, �Ӝ�J�h�~I#��^���V��zg��j!����TvS�T�'�H\������:���e�Ƒ�\���L��*�ȸ�F���LIsM��2��
kB��Q`G~0�ЙEso%~dXXlw��Z<�� F��63[���,Z�t���TOIŵ��Q��H���ac_��'�ȱ���
aiNy�� �lr�g ��H+j/~�x��?�7���9j�=�����������b�
��qt������\���j$oҲ�cd2��g���^PHq��J_�[�I�BK%ww�o�*y8`��,�u�1�:�"�+���Y�T9�
 ���:�"�T��$��l�"r>K�ӥ�K��ZKh	[��v�-���e�����7V��D9��`�4�*�F�!<.��J�_96�d��d�/[4�d�8p��F!Rt��`�Mx����D�YY�]���O��kX4ӛҲ#C�s<m�i`;"X�Z��F��U���l:�PcF"Cow(o@�W�j��2/��t����rd�ᣴ:�n2�e)�[�C:���F�i���8]��뼈��} GaoF(\ܲo<����l������$�ؤ�A)���х�롱,��p���{��.�8KtGq��W,��u��* ���i��c�lyz	�W��@��j��vzb#e��-�r���� ���!Y:Q�Y�f��&{hB�:�'���)��5��F��Q��vK���� a�D,,����7I�slo��u�v5F#A�"��W�%�u�鯥�s"@=�����)l���$s���O���t�����luu���l�o8	�=^�ɻG��{Z�(����{O��'����HH��{�w��$#�H���*~|�� �gr`�6��zp&�,��c�x=4.�1� ��]g�}�^��X�j�G�o��7Bm���Fq�/��X��7��  ]Q�F�.�����]&-2!���ǭ�#D���Ԡ���v58�$T����O��-��!$ޱJ	Z%���=#"d2A��mK݇�ٶk�!+	?KČh:?˪1Fx�.4Qg5��L�5�qi�͏1�XK��Ar����M��
.U-�����/P��U��|S+	<'t����^�X�E�5��n�y�g��RLl��R%d���o0[/��##�Ү��-�d"��2�^ ��������F!�"/ �W��hwu����&{t�`�C���fm~���,V|tw��-X,| �/`�R��s 5Z�A��a�m��A�ot�V�dP@�\�<��!���B)v�6)���*�!������!� E
q;�.�轕z5A��]�����/��d��f�G�&QOG�\�EUN�,DF�������/�v���\����'��Lx��8��@�K�b�����,� &łD�
�3 W���}�>�,�g-K��������2{QU���qL��T����vD$U)£�����C `y�.`c�<0�d�e��<�^��� ?ԯLu�g���t�K�
ju�s���w0Н��u��F�Q�GS��>(lD���('�c��@��#�~=0B"�~�((*����/
���(i�Q�H�qn�P� ��Mj��#8b�?��OA����GU��g��7��a�^VL��R�?�:�P�a<�s
J|%!V%ғ񽉚�L��"�" Ĩ�
�5��#���6oc�)R��[��8�4��^)��A�~s#��J��M[���h)C1%sEOz-l��TKiD_)A�ᕁ�S �V�Do��`h&��)��z����_��.Q�:��A�6�����KlH�.�<Sx~�n�]�#�C]�������e��C|�]����>�b(@U����?nZ����L~hާ����Uz��ŭkuR-Wx ���:8֟��R��|z��4��qGl�ڞo���f��Q��!/��)W�������u ��ŰqDGSSK��������j��&�����F�<02)��t�GyS��G�(7q`&�jn��������Ѳ���T����'T	�������1�Yf�piU�Ju�
;cV�K��k.�H�
��*M�޵�8w�+���Ł��N�t�]dSfd�zDq��}�g��6�1nVh:�cD�)�\/�#£?�kT�1�d�̮-���1�͗-�9�F�w�����=�|������}���q��P�y	��+2��?�c�mVzu�Z�����"��(���֢�.]*0) �α1�"��g㰦-зf�Q-��&��$�^GФ6'?�;;����MPvt�:�1_�/�f����f29<�9��n�C��x~���y�u�<^c�	��n}W��
��`,�k0�ۅ3��lW@g��N�m�T�Ne�	�⍨N�� ~pt����/c+��~��.т%�h�7��i�oTH�Z
��Ёa� �3)���ϡ�|\�zjNp1um�P�Իo������25�*������^��X�	�.]B�~��|e��n-�:�U�����v�����~�(�y�Sbއ����q���3�n|�b���Π��x#��l���|�l���RϿ��]6��F%/���?���oz�o�v�z��W�S[E�����)+�.E�٘C�(�������p*��1��kx����Z��p�j
�za��~h���m�b�=�_�UE<_6�F@���EH�ѿggs�n�g���WGZA՚����9J8���:6�7B�:+��]U��],�)�P2��g�ؚ�g�Y�ȞBi&��g��9��So����ν�6~U>:��c��i�>���,f�v��
��ɍ�>���s�F����X:��7���v�7��(s�%`[�I�;}x@�t�����N�֟wН"u�:O�ح:�O+��{@�*A%�~�]����d��r�wh��4���a��Y�]�ބ�o�������0]��W����Á����XoM7��ZM����Y�fn���Y�As�툷Eg�C�z���6����5��6_��}a�mC���	������p͞��+��I>\�'����Fm}`�< �W���H��G��!��x�/�M��j[tu0�;�E������r_���!�V��8����=�\�:�ğmr�+RE!N���a��HW��J�6�_3�j�;������o��������O��>}�����
:� �M���oX�c3����xlon���������4�A�u��?|k�On&��q��FUz�/4 j ����Fk��::  
PACKAGER_GZIP;
Packager_Php_Wrapper::$Contents[27]=<<<'PACKAGER_GZIP'
�      ̱
�  н�p���{B�4���'5���X����<�+��%��{B�+��]/���RF��Iݰ/��b�`�	YJ
PACKAGER_GZIP;
Packager_Php_Wrapper::$Contents[28]=<<<'PACKAGER_TEXT'
Display;Zobrazit
classic;klasicky
mobile;pro mobily
PACKAGER_TEXT;
Packager_Php_Wrapper::$Contents[29]=<<<'PACKAGER_TEXT'
<div id="mvccore-dumps"><div id="mvccore-dumps-items">%mvccoreDumps%</div><input id="mvccore-dumps-btn" type="button" value="Dumps(%mvccoreDumpsCount%)" /></div>
<style>#mvccore-dumps{display:table;position:fixed;bottom:0;right:0;z-index:999999;margin:10px;overflow:auto;background:#e8e8e8;box-shadow:0 0 10px rgba(0,0,0,0.5);border-radius:5px;opacity:0;}#mvccore-dumps *{font-family:consolas,courier !important;}#mvccore-dumps-items .item{background:#fff;margin:5px 5px 0 5px;border-radius:3px;}#mvccore-dumps-items .title{background:#888;color:#fff;font-weight:bold;padding:5px;margin:0;}#mvccore-dumps-items .value{padding:10px;}#mvccore-dumps-items .value pre{margin:0;}#mvccore-dumps-items .value small.file{display:block;font-size:10px;color:#888;}#mvccore-dumps input{font-weight:bold;float:right;margin:5px;padding:2px 7px 2px 10px;}</style>
<script>(function(){var a=/MSIE [5-8]/g.test(navigator.userAgent),b=document,c=window,d=b.getElementById("mvccore-dumps"),e=b.getElementById("mvccore-dumps-items"),f=b.getElementById("mvccore-dumps-btn"),g=a?"attachEvent":"addEventListener",h=d.style,k=e.style,m=d.offsetHeight,n=!0;function p(){if(n){var l=c.innerHeight-20;h.overflow=l>m?"hidden":"auto";h.height=Math.min(l,m)+"px"}}function q(){n?(k.display="none",h.height="auto"):k.display="block";n=!n}h.display="block";c[g]("resize",p);f[g]("click",q);p();%mvccoreDumpsClose%h.opacity=1})();</script>
PACKAGER_TEXT;
class MvcCore_Route{/** @var string */public$Name='';/** @var string */public$Controller='';/** @var string */public$Action='';/** @var string */public$Pattern='';/** @var string */public$Reverse='';/** @var array */public$Params=array();public static function GetInstance($object){if(gettype($object)=='array'){return new static($object);}else{return new static((array)$object);}}public function __construct($nameOrConfig=NULL,$controller=NULL,$action=NULL,$pattern=NULL,$reverse=NULL,$params=array()){$args=func_get_args();if(count($args)==1&&gettype($args[0])=='array'){$data=(object)$args[0];$name=isset($data->name)?$data->name:'';$controller=isset($data->controller)?$data->controller:'';$action=isset($data->action)?$data->action:'';$pattern=isset($data->pattern)?$data->pattern:'';$reverse=isset($data->reverse)?$data->reverse:'';$params=isset($data->params)?$data->params:array();}else{list($name,$controller,$action,$pattern,$reverse,$params)=$args;}if(!$controller&&!$action&&strpos($name,':')!==FALSE){list($controller,$action)=explode(':',$name);}$this->Name=$name;$this->Controller=$controller;$this->Action=$action;$this->Pattern=$pattern;$this->Reverse=$reverse?$reverse:trim($pattern,'#^$');$this->Params=$params;}public function SetName($name){$this->Name=$name;return$this;}public function SetController($controller){$this->Controller=$controller;return$this;}public function SetAction($action){$this->Action=$action;return$this;}public function SetPattern($pattern){$this->Pattern=$pattern;return$this;}public function SetReverse($reverse){$this->Reverse=$reverse;return$this;}public function SetParams($params=array()){$this->Params=$params;return$this;}}
class MvcCore_Tool{public static function GetDashedFromPascalCase($pascalCase=''){return strtolower(preg_replace("#([a-z])([A-Z])#","$1-$2",lcfirst($pascalCase)));}public static function GetPascalCaseFromDashed($dashed=''){$a=explode('/',$dashed);foreach($a as&$b)$b=ucfirst(str_replace('-','',ucwords($b,'-')));return implode('/',$a);}public static function GetUnderscoredFromPascalCase($pascalCase=''){return strtolower(preg_replace("#([a-z])([A-Z])#","$1_$2",lcfirst($pascalCase)));}public static function GetPascalCaseFromUnderscored($underscored=''){$a=explode('/',$underscored);foreach($a as&$b)$b=ucfirst(str_replace('_','',ucwords($b,'_')));return implode('/',$a);}public static function EncodeJson($data){$flags=JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_HEX_AMP|(defined('JSON_UNESCAPED_SLASHES')?JSON_UNESCAPED_SLASHES:0)|(defined('JSON_UNESCAPED_UNICODE')?JSON_UNESCAPED_UNICODE:0)|(defined('JSON_PRESERVE_ZERO_FRACTION')?JSON_PRESERVE_ZERO_FRACTION:0);$json=json_encode($data,$flags);if($errorCode=json_last_error()){throw new Exception(json_last_error_msg(),$errorCode);}if(PHP_VERSION_ID<70100){$json=strtr($json,array("\xe2\x80\xa8"=>'\u2028',"\xe2\x80\xa9"=>'\u2029',));}return$json;}public static function DecodeJson(&$jsonStr){$result=(object)array('success'=>TRUE,'data'=>null,'errorData'=>array(),);$jsonData=@json_decode($jsonStr);$errorCode=json_last_error();if($errorCode==JSON_ERROR_NONE){$result->data=$jsonData;}else{$result->success=FALSE;$result->errorData=array(json_last_error_msg(),$errorCode);}return$result;}}
class MvcCore_Response{const OK=200;const MOVED_PERMANENTLY=301;const SEE_OTHER=303;const NOT_FOUND=404;const INTERNAL_SERVER_ERROR=500;public static$CodeMessages=array(self::OK=>'OK',self::MOVED_PERMANENTLY=>'Moved Permanently',self::SEE_OTHER=>'See Other',self::NOT_FOUND=>'Not Found',self::INTERNAL_SERVER_ERROR=>'Internal Server Error',);/** @var int */public$Code=self::OK;/** @var array */public$Headers=array();/** @var string */public$Body='';public static function GetInstance($code=self::OK,$headers=array(),$body=''){$responseClass=MvcCore::GetInstance()->GetResponseClass();return new$responseClass($code,$headers,$body);}public function __construct($code=self::OK,$headers=array(),$body=''){$this->Code=$code;$this->Headers=$headers;$this->Body=$body;}public function SetCode($code){$this->Code=$code;return$this;}public function SetHeader($name,$value){header($name.": ".$value);$this->Headers[$name]=$value;return$this;}public function SetBody(&$body){$this->Body=&$body;return$this;}public function PrependBody(&$body){$this->Body=$body.$this->Body;return$this;}public function AppendBody(&$body){$this->Body.=$body;return$this;}public function UpdateHeaders(){$rawHeaders=headers_list();$name='';$value='';foreach($rawHeaders as$rawHeader){$doubleDotPos=strpos($rawHeader,':');if($doubleDotPos!==FALSE){$name=trim(substr($rawHeader,0,$doubleDotPos));$value=trim(substr($rawHeader,$doubleDotPos+1));}else{$name=$rawHeader;$value='';}$this->Headers[$name]=$value;}}public function IsRedirect(){return isset($this->Headers['Location']);}public function IsHtmlOutput(){if(isset($this->Headers['Content-Type'])){$value=$this->Headers['Content-Type'];return strpos($value,'text/html')!==FALSE||strpos($value,'application/xhtml+xml')!==FALSE;}return FALSE;}public function Send(){if(!headers_sent()){$code=$this->Code;$status=isset(static::$CodeMessages[$code])?' '.static::$CodeMessages[$code]:'';header("HTTP/1.0 $code $status");foreach($this->Headers as$name=>$value){header($name.": ".$value);}$this->addTimeAndMemoryHeader();}echo $this->Body;}protected function addTimeAndMemoryHeader(){$mtBegin=MvcCore::GetInstance()->GetMicrotime();$time=number_format((microtime(TRUE)-$mtBegin)*1000,1,'.',' ');$ram=function_exists('memory_get_peak_usage')?number_format(memory_get_peak_usage()/1000000,2,'.',' '):'n/a';header("X-MvcCore-Cpu-Ram: $time ms, $ram MB");}}
class MvcCoreExt_ViewHelpers_Assets{const GROUP_NAME_DEFAULT='default';const FILE_MODIFICATION_DATE_FORMAT='Y-m-d_H-i-s';/** @var MvcCore_View */protected$view;/** @var string */protected$actualGroupName='';/** @var string */protected$streamWrapper='';/** @var array */protected static$globalOptions=array('jsJoin'=>0,'jsMinify'=>0,'cssJoin'=>0,'cssMinify'=>0,'tmpDir'=>'/Var/Tmp','fileChecking'=>'filemtime','assetsUrl'=>NULL,);/** @var string */protected static$appRoot='';/** @var string */protected static$tmpDir='';/** @var string */protected static$basePath=NULL;/** @var boolean */protected static$logingAndExceptions=TRUE;/** @var boolean */protected static$fileChecking=FALSE;/** @var boolean */protected static$fileRendering=FALSE;/** @var boolean */protected static$assetsUrlCompletion=NULL;/** @var string */protected static$systemConfigHash='';public function __construct($view){$this->view=$view;$app=MvcCore::GetInstance();$request=$app->GetRequest();self::$appRoot=$request->AppRoot;if(is_null(self::$basePath))self::$basePath=$request->BasePath;self::$logingAndExceptions=MvcCore_Config::IsDevelopment();$mvcCoreCompiledMode=$app->GetCompiled();if(!$mvcCoreCompiledMode)self::$fileChecking=TRUE;if(!$mvcCoreCompiledMode||$mvcCoreCompiledMode=='SFU'){self::$fileRendering=TRUE;}if(is_null(self::$assetsUrlCompletion)){if($mvcCoreCompiledMode&&$mvcCoreCompiledMode!='PHP_STRICT_HDD'){self::$assetsUrlCompletion=TRUE;}else{self::$assetsUrlCompletion=FALSE;}}self::$systemConfigHash=md5(json_encode(self::$globalOptions));}public static function SetGlobalOptions($options=array()){self::$globalOptions=array_merge(self::$globalOptions,(array)$options);if(isset($options['assetsUrl'])&&!is_null($options['assetsUrl'])){self::$assetsUrlCompletion=(bool)$options['assetsUrl'];}}public static function SetAssetUrlCompletion($enable=TRUE){self::$assetsUrlCompletion=$enable;}public static function SetBasePath($basePath){self::$basePath=$basePath;}protected static function getFileImprint($fullPath){$fileChecking=self::$globalOptions['fileChecking'];if($fileChecking=='filemtime'){return Packager_Php_Wrapper::Filemtime($fullPath);}else{return(string)call_user_func($fileChecking,$fullPath);}}public function __toString(){return$this->Render();}public function AssetUrl($path=''){$result='';if(self::$assetsUrlCompletion){$result='?controller=controller&action=asset&path='.$path;}else{$result='__RELATIVE_BASE_PATH__'.$path;}return$result;}public function CssJsFileUrl($path=''){$result='';if(self::$assetsUrlCompletion){$result=$this->view->AssetUrl($path);}else{$result=self::$basePath.$path;}return$result;}protected function getCtrlActionKey(){$requestParams=MvcCore::GetInstance()->GetRequest()->Params;return$requestParams['controller'].'/'.$requestParams['action'];}protected function filterItemsForNotPossibleMinifiedAndPossibleMinifiedItems($items){$itemsToRenderMinimized=array();$itemsToRenderSeparately=array();foreach($items as&$item){$itemArr=array_merge((array)$item,array());unset($itemArr['path']);if(isset($itemArr['render']))unset($itemArr['render']);if(isset($itemArr['external']))unset($itemArr['external']);$renderArrayKey=md5(json_encode($itemArr));if($itemArr['doNotMinify']){if(isset($itemsToRenderSeparately[$renderArrayKey])){$itemsToRenderSeparately[$renderArrayKey][]=$item;}else{$itemsToRenderSeparately[$renderArrayKey]=array($item);}}else{if(isset($itemsToRenderMinimized[$renderArrayKey])){$itemsToRenderMinimized[$renderArrayKey][]=$item;}else{$itemsToRenderMinimized[$renderArrayKey]=array($item);}}}return array($itemsToRenderMinimized,$itemsToRenderSeparately,);}protected function addFileModificationImprintToHrefUrl($url,$path){$questionMarkPos=strpos($url,'?');$separator=($questionMarkPos===FALSE)?'?':'&';$strippedUrl=$questionMarkPos!==FALSE?substr($url,$questionMarkPos):$url;$srcPath=$this->getAppRoot().substr($strippedUrl,strlen(self::$basePath));if(self::$globalOptions['fileChecking']=='filemtime'){$fileMTime=self::getFileImprint($srcPath);$url.=$separator.'_fmt='.date(self::FILE_MODIFICATION_DATE_FORMAT,(int)$fileMTime);}else{$url.=$separator.'_md5='.self::getFileImprint($srcPath);}return$url;}protected function getIndentString($indent=0){$indentStr='';if(is_numeric($indent)){$indInt=intval($indent);if($indInt>0){$i=0;while($i<$indInt){$indentStr.="\t";$i+=1;}}}else if(is_string($indent)){$indentStr=$indent;}return$indentStr;}protected function getAppRoot(){return self::$appRoot;}protected function getTmpDir(){if(!self::$tmpDir){$tmpDir=$this->getAppRoot().self::$globalOptions['tmpDir'];if(!MvcCore::GetInstance()->GetCompiled()){if(!Packager_Php_Wrapper::IsDir($tmpDir))mkdir($tmpDir,0777,TRUE);if(!is_writable($tmpDir)){try{@chmod($tmpDir,0777);}catch(Exception$e){throw new Exception('['.__CLASS__.'] '.$e->getMessage());}}}self::$tmpDir=$tmpDir;}return self::$tmpDir;}protected function saveFileContent($fullPath='',&$fileContent=''){$streamWrapper='';$netteSafeStreamClass='Nette\Utils\SafeStream';$netteSafeStreamExists=class_exists($netteSafeStreamClass);if(self::$fileRendering){if($netteSafeStreamExists){$netteSafeStreamProtocol=constant($netteSafeStreamClass.'::PROTOCOL');(new ReflectionMethod($netteSafeStreamClass,'register'))->invoke(NULL);$streamWrapper=$netteSafeStreamProtocol.'://';}}$fw=fopen($streamWrapper.$fullPath,'w');$index=0;$bufferLength=1048576;$buffer='';while($buffer=mb_substr($fileContent,$index,$bufferLength)){fwrite($fw,$buffer);$index+=$bufferLength;}fclose($fw);@chmod($fullPath,0766);if(self::$fileRendering){if($netteSafeStreamExists)stream_wrapper_unregister($netteSafeStreamProtocol);}}protected function log($msg='',$logType='debug'){if(self::$logingAndExceptions){MvcCore_Debug::Log($msg,$logType);}}protected function exception($msg){if(self::$logingAndExceptions){throw new Exception('['.get_class($this).'] '.$msg);}}protected function warning($msg){if(self::$logingAndExceptions){MvcCore_Debug::BarDump('['.get_class($this).'] '.$msg,MvcCore_Debug::DEBUG);}}protected function exceptionHandler($e){if(self::$logingAndExceptions){MvcCore_Debug::Exception($e);}}protected function getTmpFileFullPathByPartFilesInfo($filesGroupInfo=array(),$minify=FALSE,$extension=''){return implode('',array($this->getTmpDir(),'/'.($minify?'minified':'rendered').'_'.$extension.'_',md5(implode(',',$filesGroupInfo).'_'.$minify),'.'.$extension));}}
class App_Bootstrap{public static function Init(){$app=MvcCore::GetInstance();if(class_exists('MvcCoreExt_Tracy')){MvcCoreExt_Tracy::$Editor='MSVS2015';$app->SetDebugClass('MvcCoreExt_Tracy');}$app->SetRouterClass(MvcCoreExt_LangRouter::class)->SetDefaultControllerName('Front_Index');MvcCore_View::AddHelpersClassBases('MvcCoreExt_ViewHelpers');/** @var $router MvcCoreExt_LangRouter */$router=&MvcCore_Router::GetInstance();$router->SetAllowedLangs('en','cs')->SetFirstRequestStrictlyByUserAgent()->SetRoutes(array('Admin_Index:Index'=>array('pattern'=>"#^/admin#",),'Front_Index:Index'=>new MvcCoreExt_LangRouter_Route(array('name'=>'Front_Index:Index','pattern'=>"#^([a-zA-Z0-9/_\-]*)#",'reverse'=>'{%path}',)),));}}
class App_Views_Helpers_Nl2Br{public function Nl2Br($str=NULL){return str_replace(array("\n\r","\n"),array("\n","<br />"),$str);}}
class MvcCore_Session extends ArrayObject{/** @var string */const SESSION_METADATA_KEY='__MC';/** @var string */protected$__name='default';/** @var bool */protected static$started=FALSE;/** @var array|stdClass */protected static$meta=array();/** @var array */protected static$instances=array();public static function Start(){if(static::$started)return;if(!MvcCore::GetInstance()->GetRequest()->IsAppRequest())return;$sessionNotStarted=function_exists('session_status')?session_status()==PHP_SESSION_NONE:session_id()=='';if($sessionNotStarted){session_start();static::setUpMeta();static::setUpData();}static::$started=TRUE;}protected static function setUpMeta(){$metaKey=static::SESSION_METADATA_KEY;$meta=array();if(isset($_SESSION[$metaKey])){$meta=@unserialize($_SESSION[$metaKey]);}if(!$meta){$meta=array('names'=>array(),'hoops'=>array(),'expirations'=>array(),);}static::$meta=(object)$meta;}protected static function setUpData(){$hoops=&static::$meta->hoops;$names=&static::$meta->names;$expirations=&static::$meta->expirations;foreach($hoops as$name=>$hoop){$hoops[$name]-=1;}$now=time();foreach($names as$name=>$one){$unset=array();if(isset($hoops[$name])){if($hoops[$name]<0)$unset[]='hoops';}if(isset($expirations[$name])){if($expirations[$name]<$now)$unset[]='expirations';}if($unset){$currentErrRepLevels=error_reporting();error_reporting(0);foreach($unset as$unsetKey){if(isset(static::$meta->$unsetKey)&&isset(static::$meta->$unsetKey[$name]))unset(static::$meta->$unsetKey[$name]);}error_reporting($currentErrRepLevels);unset($names[$name]);unset($_SESSION[$name]);}}}public static function Close(){register_shutdown_function(function(){foreach(static::$instances as&$instance){if(count($instance)===0)$instance->Destroy();}$metaKey=static::SESSION_METADATA_KEY;$_SESSION[$metaKey]=serialize(static::$meta);@session_write_close();});}public static function&GetNamespace($name='default'){if(!isset(static::$instances[$name])){static::$instances[$name]=new static($name);}return static::$instances[$name];}public function __construct($name='default'){if(!static::$started)static::Start();$this->__name=$name;static::$meta->names[$name]=1;if(!isset($_SESSION[$name]))$_SESSION[$name]=array();static::$instances[$name]=$this;}public function SetExpirationHoops($hoops){static::$meta->hoops[$this->__name]=$hoops;return$this;}public function SetExpirationSeconds($seconds){static::$meta->expirations[$this->__name]=time()+$seconds;return$this;}public function Destroy(){$name=$this->__name;$names=&static::$meta->names;$hoops=&static::$meta->hoops;$expirations=&static::$meta->expirations;$instances=&static::$instances;if(isset($names[$name]))unset($names[$name]);if(isset($hoops[$name]))unset($hoops[$name]);if(isset($expirations[$name]))unset($expirations[$name]);if(isset($_SESSION[$name]))unset($_SESSION[$name]);if(isset($instances[$name]))unset($instances[$name]);}public function __isset($key){return isset($_SESSION[$this->__name][$key]);}public function __unset($key){$name=$this->__name;if(isset($_SESSION[$name][$key]))unset($_SESSION[$name][$key]);}public function __get($key){$name=$this->__name;if(isset($_SESSION[$name][$key]))return$_SESSION[$name][$key];return NULL;}public function __set($key,$value){$_SESSION[$this->__name][$key]=$value;}public function count(){return count($_SESSION[$this->__name]);}}
class App_Views_Helpers_Translate{private$_controller;public function __construct(MvcCore_View&$view){$this->_controller=$view->Controller;}public function Translate($key='',$lang=''){return$this->_controller->Translate($key,$lang);}}
class MvcCoreExt_ViewHelpers_LineBreaks{/** @var array */public$WeekWords=array('en'=>'a,an,the,and,but,or,when,of,in,to,with',"cs"=>"a,ač,aj,ak,ať,ba,co,či,do,i,k,ke,ku,o,pro,při,s,sa,se,si,sú,v,ve,z,za,ze,že",);/** @var array */public$Shortcuts=array("cs"=>array('př. kr.','př. n. l.','s. r. o.','a. s.','v. o. s.','o. s. ř.',),);/** @var string */public$Units="%,‰,mm,cm,dm,m,km,g,dkg,kg,t,ar,ha,ml,dcl,l,cm²,m²,km²,cm³,m³,°C,°F,K";/** @var App_Views_Helpers_LineBreaks */protected static$instance;/** @var string */protected$lang="";/** @var string */protected$text="";/** @var array */protected$weekWords=array();/** @var string[] */protected$units=array();/** @var string[] */protected$shortcuts=array();public function GetInstance(MvcCore_View&$view=NULL){if(!self::$instance)new self($view);return self::$instance;}public function __construct(MvcCore_View&$view=NULL){$ctrl=$view?$view->Controller:MvcCore::GetInstance()->GetController();if(property_exists(get_class($ctrl),'Lang')){$this->lang=$ctrl::$Lang;}self::$instance=$this;}public function SetWeekWords($weekWords,$lang=''){if(!$lang)$lang=$this->lang;$this->WeekWords[$lang]=$weekWords;return$this;}public function SetShortcuts($shortcuts,$lang=''){if(!$lang)$lang=$this->lang;$this->Shortcuts[$lang]=$shortcuts;return$this;}public function SetUnits($units){$this->Units=$units;return$this;}protected function getWeekWordsUnitsAndShortcuts($lang){if(!isset($this->weekWords[$lang])&&isset($this->WeekWords[$lang])){$this->weekWords[$lang]=explode(',',$this->WeekWords[$lang]);}else{$this->weekWords[$lang]=array();}if(!$this->units){$this->units=explode(',',$this->Units);}if(!isset($this->shortcuts[$lang])&&isset($this->Shortcuts[$lang])){$shortcuts=array();foreach($this->Shortcuts[$lang]as$shortcut)$shortcuts[$shortcut]=str_replace(' ','&nbsp;',$shortcut);$this->shortcuts[$lang]=&$shortcuts;}else{$this->shortcuts[$lang]=array();}return array($this->weekWords[$lang],$this->units,$this->shortcuts[$lang]);}public function LineBreaks($text,$lang=""){$this->text=$text;$word="";$lang=$lang?$lang:$this->lang;list($weekWords,$units,$shortcuts)=$this->getWeekWordsUnitsAndShortcuts($lang);$this->text=preg_replace("#\t+#mu"," ",$this->text);$this->text=preg_replace("#[ ]{2,}#mu"," ",$this->text);for($i=0,$l=count($weekWords);$i<$l;$i+=1){$word=$weekWords[$i];$this->processWeakWord($word);$word=mb_strtoupper(mb_substr($word,0,1))+mb_substr($word,1);$this->processWeakWord($word);}for($i=0,$l=count($units);$i<$l;$i+=1){$word=$units[$i];$regExp="#([0-9])\\s(".$word.")#mu";$this->text=preg_replace($regExp,"$1&nbsp;$2",$this->text);}foreach($shortcuts as$sourceShortcut=>$targetShortcut){$this->text=str_replace($sourceShortcut,$targetShortcut,$this->text);}$this->text=preg_replace("#([0-9])\s([0-9])#","$1&nbsp;$2",$this->text);return$this->text;}protected function processWeakWord($word){$index=0;$text=' '.$this->text.' ';while(TRUE){$index=mb_strpos($text,' '.$word.' ');if($index!==FALSE){$text=mb_substr($text,0,$index+1).$word.'&nbsp;'.mb_substr($text,$index+1+mb_strlen($word)+1);$index+=1+mb_strlen($word)+6;}else{break;}}$this->text=mb_substr($text,1,mb_strlen($text)-2);}}
class App_Views_Helpers_Facebook{private$_baseUrlEncoded;private$_facebookAppId;public function __construct(MvcCore_View&$view){$this->_baseUrlEncoded=urlencode($view->Controller->GetRequest()->RequestUrl);$cfg=MvcCore_Config::GetSystem();$this->_facebookAppId=(string)$cfg->general->fb->appId;}public function Facebook(){return$this;}public function ShareButton($cssClass=''){$r='<iframe src="https://www.facebook.com/plugins/share_button.php?href='.$this->_baseUrlEncoded.'&layout=box_count&size=large&mobile_iframe=true&appId='.$this->_facebookAppId.'&width=72&height=60" width="72" height="60" class="'.'facebook-share-btn-large '.$cssClass.'" scrolling="no" frameborder="0" allowTransparency="true"></iframe>';return$r;}}
class App_Views_Helpers_Format{public function Format($template,$args){$arguments=func_get_args();if(count($arguments)==0)return'';if(count($arguments)==1)return$arguments[0];$str=array_shift($arguments);foreach($arguments as$key=>$val){$str=str_replace('{'.$key.'}',(string)$val,$str);}return$str;}}
class MvcCoreExt_LangRouter_Route extends MvcCore_Route{public function __construct($nameOrConfig=NULL,$controller=NULL,$action=NULL,$pattern=NULL,$reverse=NULL,$params=array()){$args=func_get_args();if(count($args)==1&&gettype($args[0])=='array'){$data=(object)$args[0];$name=isset($data->name)?$data->name:'';$controller=isset($data->controller)?$data->controller:'';$action=isset($data->action)?$data->action:'';$pattern=isset($data->pattern)?$data->pattern:'';$reverse=isset($data->reverse)?$data->reverse:'';$params=isset($data->params)?$data->params:array();}else{list($name,$controller,$action,$pattern,$reverse,$params)=$args;}if(!$controller&&!$action&&strpos($name,':')!==FALSE){list($controller,$action)=explode(':',$name);}$this->Name=$name;$this->Controller=$controller;$this->Action=$action;$this->Pattern=$pattern;if($reverse){$this->Reverse=$reverse;}else{if(gettype($pattern)=='array'){$reverse=array();foreach($pattern as$lang=>$value)$reverse[$lang]=trim($value,'#^$');$this->Reverse=$reverse;}else{$this->Reverse=trim($pattern,'#^$');}}$this->Params=$params;}}
class MvcCoreExt_ViewHelpers_Js extends MvcCoreExt_ViewHelpers_Assets{const EXTERNAL_MIN_CACHE_TIME=86400;/** @var callable */public static$MinifyCallable=array('JSMin','minify');/** @var array */protected static$scriptsGroupContainer=array();public function Js($groupName=self::GROUP_NAME_DEFAULT){$this->actualGroupName=$groupName;$this->_getScriptsGroupContainer($groupName);return$this;}public function Contains($path='',$async=FALSE,$defer=FALSE,$doNotMinify=FALSE){$result=FALSE;$scriptsGroup=&$this->_getScriptsGroupContainer($this->actualGroupName);foreach($scriptsGroup as&$item){if($item->path==$path){if($item->async==$async&&$item->defer==$defer&&$item->doNotMinify==$doNotMinify){$result=TRUE;break;}}}return$result;}public function AppendExternal($path='',$async=FALSE,$defer=FALSE,$doNotMinify=FALSE){return$this->Append($path,$async,$defer,$doNotMinify,TRUE);}public function PrependExternal($path='',$async=FALSE,$defer=FALSE,$doNotMinify=FALSE){return$this->Prepend($path,$async,$defer,$doNotMinify,TRUE);}public function OffsetExternal($index=0,$path='',$async=FALSE,$defer=FALSE,$doNotMinify=FALSE){return$this->Offset($index,$path,$async,$defer,$doNotMinify,TRUE);}public function Append($path='',$async=FALSE,$defer=FALSE,$doNotMinify=FALSE,$external=FALSE){$item=$this->_completeItem($path,$async,$defer,$doNotMinify,$external);$actialGroupItems=&$this->_getScriptsGroupContainer($this->actualGroupName);array_push($actialGroupItems,$item);return$this;}public function Prepend($path='',$async=FALSE,$defer=FALSE,$doNotMinify=FALSE,$external=FALSE){$item=$this->_completeItem($path,$async,$defer,$doNotMinify,$external);$actualGroupItems=&$this->_getScriptsGroupContainer($this->actualGroupName);array_unshift($actualGroupItems,$item);return$this;}public function Offset($index=0,$path='',$async=FALSE,$defer=FALSE,$doNotMinify=FALSE,$external=FALSE){$item=$this->_completeItem($path,$async,$defer,$doNotMinify,$external);$actialGroupItems=&$this->_getScriptsGroupContainer($this->actualGroupName);$newItems=array();$added=FALSE;foreach($actialGroupItems as$key=>&$groupItem){if($key==$index){$newItems[]=$item;$added=TRUE;}$newItems[]=$groupItem;}if(!$added)$newItems[]=$item;self::$scriptsGroupContainer[$this->getCtrlActionKey()][$this->actualGroupName]=$newItems;return$this;}private function&_getScriptsGroupContainer($name=''){$ctrlActionKey=$this->getCtrlActionKey();if(!isset(self::$scriptsGroupContainer[$ctrlActionKey])){self::$scriptsGroupContainer[$ctrlActionKey]=array();}if(!isset(self::$scriptsGroupContainer[$ctrlActionKey][$name])){self::$scriptsGroupContainer[$ctrlActionKey][$name]=array();}return self::$scriptsGroupContainer[$ctrlActionKey][$name];}private function _completeItem($path,$async,$defer,$doNotMinify,$external){if(self::$logingAndExceptions){if(!$path)$this->exception('Path to *.js can\'t be an empty string.');$duplication=$this->_isDuplicateScript($path);if($duplication)$this->warning("Script '$path' is already added in js group: '$duplication'.");}return(object)array('path'=>$path,'async'=>$async,'defer'=>$defer,'doNotMinify'=>$doNotMinify,'external'=>$external,);}private function _isDuplicateScript($path){$result='';$allGroupItems=&self::$scriptsGroupContainer[$this->getCtrlActionKey()];foreach($allGroupItems as$groupName=>$groupItems){foreach($groupItems as$item){if($item->path==$path){$result=$groupName;break;}}}return$result;}public function Render($indent=0){$actualGroupItems=&$this->_getScriptsGroupContainer($this->actualGroupName);if(count($actualGroupItems)===0)return'';$minify=(bool)self::$globalOptions['jsMinify'];$joinTogether=(bool)self::$globalOptions['jsJoin'];if($joinTogether){$result=$this->_renderItemsTogether($this->actualGroupName,$actualGroupItems,$indent,$minify);}else{$result=$this->_renderItemsSeparated($this->actualGroupName,$actualGroupItems,$indent,$minify);}return$result;}private function _renderItemsSeparated($actualGroupName='',$items=array(),$indent=0,$minify=FALSE){$indentStr=$this->getIndentString($indent);$resultItems=array();if(self::$fileRendering)$resultItems[]='<!-- js group begin: '.$actualGroupName.' -->';$appCompilation=MvcCore::GetInstance()->GetCompiled();foreach($items as$item){if($item->external){$item->src=$this->CssJsFileUrl($this->_downloadFileToTmpAndGetNewHref($item,$minify));}else if($minify&&!$item->doNotMinify){$item->src=$this->CssJsFileUrl($this->_renderFileToTmpAndGetNewHref($item,$minify));}else{$item->src=$this->CssJsFileUrl($item->path);}if(!$appCompilation){if($item->external){$tmpOrSrcPath=substr($item->src,strlen(self::$basePath));}else{$tmpOrSrcPath=$item->src;}$item->src=$this->addFileModificationImprintToHrefUrl($item->src,$item->path);}$resultItems[]=$this->_renderItemSeparated($item);}if(self::$fileRendering)$resultItems[]='<!-- js group end: '.$actualGroupName.' -->';return$indentStr.implode(PHP_EOL.$indentStr,$resultItems);}private function _renderFileToTmpAndGetNewHref($item,$minify=FALSE){$path=$item->path;$tmpFileName='/rendered_js_'.self::$systemConfigHash.'_'.trim(str_replace('/','_',$path),"_");$srcFileFullPath=$this->getAppRoot().$path;$tmpFileFullPath=$this->getTmpDir().$tmpFileName;if(self::$fileRendering){if(Packager_Php_Wrapper::FileExists($srcFileFullPath)){$srcFileModDate=Packager_Php_Wrapper::Filemtime($srcFileFullPath);}else{$srcFileModDate=1;}if(Packager_Php_Wrapper::FileExists($tmpFileFullPath)){$tmpFileModDate=Packager_Php_Wrapper::Filemtime($tmpFileFullPath);}else{$tmpFileModDate=0;}if($srcFileModDate!==FALSE&&$tmpFileModDate!==FALSE){if($srcFileModDate>$tmpFileModDate){$fileContent=Packager_Php_Wrapper::FileGetContents($srcFileFullPath);if($minify){$fileContent=$this->_minify($fileContent,$path);}$this->saveFileContent($tmpFileFullPath,$fileContent);$this->log("Js file rendered ('$tmpFileFullPath').",'debug');}}}$tmpPath=substr($tmpFileFullPath,strlen($this->getAppRoot()));return$tmpPath;}private function _downloadFileToTmpAndGetNewHref($item,$minify=FALSE){$path=$item->path;$tmpFileFullPath=$this->getTmpDir().'/external_js_'.md5($path).'.js';if(self::$fileRendering){if(Packager_Php_Wrapper::FileExists($tmpFileFullPath)){$cacheFileTime=Packager_Php_Wrapper::Filemtime($tmpFileFullPath);}else{$cacheFileTime=0;}if(time()>$cacheFileTime+self::EXTERNAL_MIN_CACHE_TIME){while(TRUE){$newPath=$this->_getPossiblyRedirectedPath($path);if($newPath===$path){break;}else{$path=$newPath;}}$fr=fopen($path,'r');$fileContent='';$bufferLength=102400;$buffer='';while($buffer=fread($fr,$bufferLength)){$fileContent.=$buffer;}fclose($fr);if($minify){$fileContent=$this->_minify($fileContent,$path);}$this->saveFileContent($tmpFileFullPath,$fileContent);$this->log("External js file downloaded ('$tmpFileFullPath').",'debug');}}$tmpPath=substr($tmpFileFullPath,strlen($this->getAppRoot()));return$tmpPath;}private function _getPossiblyRedirectedPath($path=''){$fp=fopen($path,'r');$metaData=stream_get_meta_data($fp);foreach($metaData['wrapper_data']as$response){if(strtolower(substr($response,0,10))=='location: '){$path=substr($response,10);}}return$path;}private function _renderItemSeparated(stdClass$item){$result='<script type="text/javascript"';if($item->async)$result.=' async="async"';if($item->async)$result.=' defer="defer"';if(!$item->external&&self::$fileChecking){$fullPath=$this->getAppRoot().$item->path;if(!Packager_Php_Wrapper::FileExists($fullPath)){$this->log("File not found in CSS view rendering process ('$fullPath').",'error');}}$result.=' src="'.$item->src.'"></script>';return$result;}private function _minify(&$js,$path){$result='';if(!class_exists(static::$MinifyCallable[0])){$this->exception("Class '".static::$MinifyCallable[0]."' doesn't exist. Use: https://github.com/mrclay/minify -> /min/lib/JSMin.php");}try{$result=call_user_func(static::$MinifyCallable,$js);}catch(Exception$e){$this->exception("Unable to minify javascript ('$path').");}return$result;}private function _renderItemsTogether($actualGroupName='',$items=array(),$indent,$minify=FALSE){list($itemsToRenderMinimized,$itemsToRenderSeparately)=$this->filterItemsForNotPossibleMinifiedAndPossibleMinifiedItems($items);$indentStr=$this->getIndentString($indent);$resultItems=array();if(self::$fileRendering)$resultItems[]='<!-- js group begin: '.$actualGroupName.' -->';foreach($itemsToRenderSeparately as&$itemsToRender){$resultItems[]=$this->_renderItemsTogetherAsGroup($itemsToRender,FALSE);}foreach($itemsToRenderMinimized as&$itemsToRender){$resultItems[]=$this->_renderItemsTogetherAsGroup($itemsToRender,$minify);}if(self::$fileRendering)$resultItems[]=$indentStr.'<!-- js group end: '.$actualGroupName.' -->';return$indentStr.implode(PHP_EOL,$resultItems);}private function _renderItemsTogetherAsGroup($itemsToRender=array(),$minify=FALSE){$filesGroupInfo=array();foreach($itemsToRender as$item){if($item->external){$srcFileFullPath=$this->_downloadFileToTmpAndGetNewHref($item,$minify);$filesGroupInfo[]=$item->path.'?_'.self::getFileImprint($this->getAppRoot().$srcFileFullPath);}else{if(self::$fileChecking){$fullPath=$this->getAppRoot().$item->path;if(!Packager_Php_Wrapper::FileExists($fullPath)){$this->exception("File not found in JS view rendering process ('$fullPath').");}$filesGroupInfo[]=$item->path.'?_'.self::getFileImprint($fullPath);}else{$filesGroupInfo[]=$item->path;}}}$tmpFileFullPath=$this->getTmpFileFullPathByPartFilesInfo($filesGroupInfo,$minify,'js');if(self::$fileRendering){if(!Packager_Php_Wrapper::FileExists($tmpFileFullPath)){$resultContent='';foreach($itemsToRender as$hashKey=>$item){$srcFileFullPath=$this->getAppRoot().$item->path;if($item->external){$srcFileFullPath=$this->_downloadFileToTmpAndGetNewHref($item,$minify);$fileContent=Packager_Php_Wrapper::FileGetContents($this->getAppRoot().$srcFileFullPath);}else if($minify){$fileContent=Packager_Php_Wrapper::FileGetContents($srcFileFullPath);if($minify)$fileContent=$this->_minify($fileContent,$item->path);}else{$fileContent=Packager_Php_Wrapper::FileGetContents($srcFileFullPath);}$resultContent.=PHP_EOL."/* ".$item->path." */".PHP_EOL.$fileContent.PHP_EOL;}$this->saveFileContent($tmpFileFullPath,$resultContent);$this->log("Js files group rendered ('$tmpFileFullPath').",'debug');}}$firstItem=array_merge((array)$itemsToRender[0],array());$pathToTmp=substr($tmpFileFullPath,strlen($this->getAppRoot()));$firstItem['src']=$this->CssJsFileUrl($pathToTmp);return$this->_renderItemSeparated((object)$firstItem);}}
class MvcCoreExt_ViewHelpers_Css extends MvcCoreExt_ViewHelpers_Assets{/** @var callable */public static$MinifyCallable=array('Minify_CSS','minify');/** @var array */private static$_allowedMediaTypes=array('all','aural','braille','handheld','projection','print','screen','tty','tv',);/** @var $scriptsGroupContainer array */protected static$linksGroupContainer=array();public function Css($groupName=self::GROUP_NAME_DEFAULT){$this->actualGroupName=$groupName;$this->_getLinksGroupContainer($groupName);return$this;}public function Contains($path='',$media='all',$doNotMinify=FALSE){$result=FALSE;$linksGroup=&$this->_getLinksGroupContainer($this->actualGroupName);foreach($linksGroup as&$item){if($item->path==$path){if($item->media==$media&&$item->doNotMinify==$doNotMinify){$result=TRUE;break;}}}return$result;}public function AppendRendered($path='',$media='all',$doNotMinify=FALSE){return$this->Append($path,$media,TRUE,$doNotMinify);}public function PrependRendered($path='',$media='all',$doNotMinify=FALSE){return$this->Prepend($path,$media,TRUE,$doNotMinify);}public function OffsetSetRendered($index=0,$path='',$media='all',$doNotMinify=FALSE){return$this->OffsetSet($index,$path,$media,TRUE,$doNotMinify);}public function Append($path='',$media='all',$renderPhpTags=FALSE,$doNotMinify=FALSE){$item=$this->_completeItem($path,$media,$renderPhpTags,$doNotMinify);$currentGroupRecords=&$this->_getLinksGroupContainer($this->actualGroupName);array_push($currentGroupRecords,$item);return$this;}public function Prepend($path='',$media='all',$renderPhpTags=FALSE,$doNotMinify=FALSE){$item=$this->_completeItem($path,$media,$renderPhpTags,$doNotMinify);$currentGroupRecords=&$this->_getLinksGroupContainer($this->actualGroupName);array_unshift($currentGroupRecords,$item);return$this;}public function OffsetSet($index=0,$path='',$media='all',$renderPhpTags=FALSE,$doNotMinify=FALSE){$item=$this->_completeItem($path,$media,$renderPhpTags,$doNotMinify);$currentGroupRecords=&$this->_getLinksGroupContainer($this->actualGroupName);$newItems=array();$added=FALSE;foreach($currentGroupRecords as$key=>$groupItem){if($key==$index){$newItems[]=$item;$added=TRUE;}$newItems[]=$groupItem;}if(!$added)$newItems[]=$item;self::$linksGroupContainer[$this->getCtrlActionKey()][$this->actualGroupName]=$newItems;return$this;}private function _completeItem($path,$media,$render,$doNotMinify){if(self::$fileChecking){if(!$path)$this->exception('Path to *.css can\'t be an empty string.');if(!in_array($media,self::$_allowedMediaTypes))$this->exception('Media could be only values: '.implode(', ',self::$_allowedMediaTypes).'.');$duplication=$this->_isDuplicateStylesheet($path);if($duplication)$this->warning("Stylesheet '$path' is already added in css group: '$duplication'.");}return(object)array('path'=>$path,'media'=>$media,'render'=>$render,'doNotMinify'=>$doNotMinify,);}private function _isDuplicateStylesheet($path){$result='';$currentRecords=self::$linksGroupContainer[$this->getCtrlActionKey()];foreach($currentRecords as$groupName=>$groupItems){foreach($groupItems as$item){if($item->path==$path){$result=$groupName;break;}}}return$result;}public function Render($indent=0){$currentGroupRecords=&$this->_getLinksGroupContainer($this->actualGroupName);if(count($currentGroupRecords)===0)return'';$minify=(bool)self::$globalOptions['cssMinify'];$joinTogether=(bool)self::$globalOptions['cssJoin'];if($joinTogether){$result=$this->_renderItemsTogether($this->actualGroupName,$currentGroupRecords,$indent,$minify);}else{$result=$this->_renderItemsSeparated($this->actualGroupName,$currentGroupRecords,$indent,$minify);}return$result;}private function&_getLinksGroupContainer($name=''){$ctrlActionKey=$this->getCtrlActionKey();if(!isset(self::$linksGroupContainer[$ctrlActionKey])){self::$linksGroupContainer[$ctrlActionKey]=array();}if(!isset(self::$linksGroupContainer[$ctrlActionKey][$name])){self::$linksGroupContainer[$ctrlActionKey][$name]=array();}return self::$linksGroupContainer[$ctrlActionKey][$name];}private function _minify(&$css,$path){$result='';if(!class_exists(static::$MinifyCallable[0])){$this->exception("Class '".static::$MinifyCallable[0]."' doesn't exist. Use: https://github.com/mrclay/minify -> /min/lib/Minify/CSS.php");}try{$result=call_user_func(static::$MinifyCallable,$css);}catch(Exception$e){$this->exception("Unable to minify stylesheet ('$path').");}return$result;}private function _renderItemsTogether($actualGroupName='',$items=array(),$indent=0,$minify=FALSE){list($itemsToRenderMinimized,$itemsToRenderSeparately)=$this->filterItemsForNotPossibleMinifiedAndPossibleMinifiedItems($items);$indentStr=$this->getIndentString($indent);$resultItems=array();if(self::$fileRendering)$resultItems[]='<!-- css group begin: '.$actualGroupName.' -->';foreach($itemsToRenderSeparately as$attrHashKey=>$itemsToRender){$resultItems[]=$this->_renderItemsTogetherAsGroup($itemsToRender,$minify);}foreach($itemsToRenderMinimized as$attrHashKey=>$itemsToRender){$resultItems[]=$this->_renderItemsTogetherAsGroup($itemsToRender,$minify);}if(self::$fileRendering)$resultItems[]='<!-- css group end: '.$actualGroupName.' -->';return$indentStr.implode(PHP_EOL.$indentStr,$resultItems);}private function _renderItemsTogetherAsGroup($itemsToRender=array(),$minify=FALSE){$filesGroupInfo=array();foreach($itemsToRender as$item){if(self::$fileChecking){$fullPath=$this->getAppRoot().$item->path;if(!Packager_Php_Wrapper::FileExists($fullPath)){$this->exception("File not found in CSS view rendering process ('$fullPath').");}$filesGroupInfo[]=$item->path.'?_'.self::getFileImprint($fullPath);}else{$filesGroupInfo[]=$item->path;}}$tmpFileFullPath=$this->getTmpFileFullPathByPartFilesInfo($filesGroupInfo,$minify,'css');if(self::$fileRendering){if(!Packager_Php_Wrapper::FileExists($tmpFileFullPath)){$resultContent='';foreach($itemsToRender as&$item){$srcFileFullPath=$this->getAppRoot().$item->path;if($item->render){$fileContent=$this->_renderFile($srcFileFullPath);}else if($minify){$fileContent=Packager_Php_Wrapper::FileGetContents($srcFileFullPath);}$fileContent=$this->_convertStylesheetPathsFromRelatives2TmpAbsolutes($fileContent,$item->path);if($minify)$fileContent=$this->_minify($fileContent,$item->path);$resultContent.=PHP_EOL."/* ".$item->path." */".PHP_EOL.$fileContent.PHP_EOL;}$this->saveFileContent($tmpFileFullPath,$resultContent);$this->log("Css files group rendered ('$tmpFileFullPath').",'debug');}}$firstItem=array_merge((array)$itemsToRender[0],array());$pathToTmp=substr($tmpFileFullPath,strlen($this->getAppRoot()));$firstItem['href']=$this->CssJsFileUrl($pathToTmp);return$this->_renderItemSeparated((object)$firstItem);}private function _renderFile($absolutePath){ob_start();try{Packager_Php_Wrapper::IncludeStandard(($absolutePath),$this);}catch(Exception$e){$this->exceptionHandler($e);}return ob_get_clean();}private function _convertStylesheetPathsFromRelatives2TmpAbsolutes(&$fullPathContent,$href){$lastHrefSlashPos=mb_strrpos($href,'/');if($lastHrefSlashPos===FALSE)return$fullPathContent;$stylesheetDirectoryRelative=mb_substr($href,0,$lastHrefSlashPos+1);$position=0;while($position<mb_strlen($fullPathContent)){$doubleDotsPos=mb_strpos($fullPathContent,'../',$position);if($doubleDotsPos===FALSE)break;$lastUrlBeginStrPos=mb_strrpos(mb_substr($fullPathContent,0,$doubleDotsPos),'url(');if($lastUrlBeginStrPos===FALSE){$position=$doubleDotsPos+3;continue;}$beginOfUrlBlockChars=mb_substr($fullPathContent,$lastUrlBeginStrPos+4,$doubleDotsPos-($lastUrlBeginStrPos+4));$beginOfUrlBlockChars=preg_replace("#[\./ \"'_\-]#","",$beginOfUrlBlockChars);if(mb_strlen($beginOfUrlBlockChars)>0){$position=$lastUrlBeginStrPos+4;continue;}$firstUrlEndStrPos=mb_strpos($fullPathContent,')',$doubleDotsPos);if($firstUrlEndStrPos===FALSE){$position=$doubleDotsPos+3;continue;}$endOfUrlBlockChars=mb_substr($fullPathContent,$doubleDotsPos+3,$firstUrlEndStrPos-($doubleDotsPos+3));$endOfUrlBlockChars=preg_replace("#[a-zA-Z\./ \"'_\-\?\&\#]#","",$endOfUrlBlockChars);if(mb_strlen($endOfUrlBlockChars)>0){$position=$firstUrlEndStrPos+1;continue;}$lastUrlBeginStrPos+=4;$urlSubStr=mb_substr($fullPathContent,$lastUrlBeginStrPos,$firstUrlEndStrPos-$lastUrlBeginStrPos);$firstStr=mb_substr($urlSubStr,0,1);$lastStr=mb_substr($urlSubStr,mb_strlen($urlSubStr)-1,1);if($firstStr==='"'&&$lastStr==='"'){$urlSubStr=mb_substr($urlSubStr,1,mb_strlen($urlSubStr)-2);$quote='"';}else if($firstStr==="'"&&$lastStr==="'"){$urlSubStr=mb_substr($urlSubStr,1,mb_strlen($urlSubStr)-2);$quote="'";}else{$quote='"';}$trimmedUrlSubStr=ltrim($urlSubStr,'./');$trimmedPartLength=mb_strlen($urlSubStr)-mb_strlen($trimmedUrlSubStr);$trimmedPart=trim(mb_substr($urlSubStr,0,$trimmedPartLength),'/');$subjectRestPath=trim(mb_substr($urlSubStr,$trimmedPartLength),'/');$urlFullBasePath=str_replace('\\','/',realpath($this->getAppRoot().$stylesheetDirectoryRelative.$trimmedPart));$urlFullPath=$urlFullBasePath.'/'.$subjectRestPath;$webPath=mb_substr($urlFullPath,mb_strlen($this->getAppRoot()));$webPath=$this->CssJsFileUrl($webPath);$fullPathContent=mb_substr($fullPathContent,0,$lastUrlBeginStrPos).$quote.$webPath.$quote.mb_substr($fullPathContent,$firstUrlEndStrPos);$position=$lastUrlBeginStrPos+mb_strlen($webPath)+3;}return str_replace('__RELATIVE_BASE_PATH__','../..',$fullPathContent);}private function _renderFileToTmpAndGetNewHref($item,$minify=FALSE){$path=$item->path;$tmpFileName='/rendered_css_'.self::$systemConfigHash.'_'.trim(str_replace('/','_',$path),"_");$srcFileFullPath=$this->getAppRoot().$path;$tmpFileFullPath=$this->getTmpDir().$tmpFileName;if(self::$fileRendering){if(Packager_Php_Wrapper::FileExists($srcFileFullPath)){$srcFileModDate=Packager_Php_Wrapper::Filemtime($srcFileFullPath);}else{$srcFileModDate=1;}if(Packager_Php_Wrapper::FileExists($tmpFileFullPath)){$tmpFileModDate=Packager_Php_Wrapper::Filemtime($tmpFileFullPath);}else{$tmpFileModDate=0;}if($srcFileModDate!==FALSE&&$tmpFileModDate!==FALSE){if($srcFileModDate>$tmpFileModDate){if($item->render){$fileContent=$this->_renderFile($srcFileFullPath);}else if($minify){$fileContent=Packager_Php_Wrapper::FileGetContents($srcFileFullPath);}$fileContent=$this->_convertStylesheetPathsFromRelatives2TmpAbsolutes($fileContent,$path);if($minify)$fileContent=$this->_minify($fileContent,$item->path);$this->saveFileContent($tmpFileFullPath,$fileContent);$this->log("Css file rendered ('$tmpFileFullPath').",'debug');}}}$tmpPath=substr($tmpFileFullPath,strlen($this->getAppRoot()));return$tmpPath;}private function _renderItemSeparated(stdClass$item){$result='<link rel="stylesheet"';if($item->media!=='all')$result.=' media="'.$item->media.'"';if(!$item->render&&self::$fileChecking){$fullPath=$this->getAppRoot().$item->path;if(!Packager_Php_Wrapper::FileExists($fullPath)){$this->log("File not found in CSS view rendering process ('$fullPath').",'error');}}$result.=' href="'.$item->href.'" />';return$result;}private function _renderItemsSeparated($actualGroupName='',$items=array(),$indent=0,$minify=FALSE){$indentStr=$this->getIndentString($indent);$resultItems=array();if(self::$fileRendering)$resultItems[]='<!-- css group begin: '.$actualGroupName.' -->';$appCompilation=MvcCore::GetCompiled();foreach($items as$item){if($item->render||($minify&&!$item->doNotMinify)){$item->href=$this->CssJsFileUrl($this->_renderFileToTmpAndGetNewHref($item,$minify));}else{$item->href=$this->CssJsFileUrl($item->path);}if(!$appCompilation){$item->href=$this->addFileModificationImprintToHrefUrl($item->href,$item->path);}$resultItems[]=$this->_renderItemSeparated($item);}if(self::$fileRendering)$resultItems[]='<!-- css group end: '.$actualGroupName.' -->';return$indentStr.implode(PHP_EOL.$indentStr,$resultItems);}}
class MvcCore_Router{/** @var MvcCore_Router */protected static$instance;/** @var MvcCore_Request */protected$request;/** @var array */protected$routes=array();/** @var array */protected$urlRoutes=array();/** @var MvcCore_Route */protected$currentRoute=NULL;/** @var bool */protected$routeToDefaultIfNotMatch=FALSE;public static function&GetInstance(array$routes=array()){if(!self::$instance){$routerClass=MvcCore::GetInstance()->GetRouterClass();self::$instance=new$routerClass($routes);}return self::$instance;}public function __construct(array&$routes=array()){if($routes)$this->SetRoutes($routes);}public function SetRoutes(array$routes=array()){$this->routes=array();$this->AddRoutes($routes);return$this;}public function GetRoutes(){return$this->routes;}public function AddRoutes(array$routes=array(),$prepend=FALSE){if($prepend)$routes=array_reverse($routes);foreach($routes as$routeName=>&$route){$routeType=gettype($route);$numericKey=is_numeric($routeName);if($route instanceof MvcCore_Route){if(!$numericKey){$route->Name=$routeName;}}else if($routeType=='array'){if(!$numericKey){$route['name']=$routeName;}}else if($routeType=='string'){$route=array('name'=>$routeName,'pattern'=>$route);}$this->AddRoute($route,$prepend);}return$this;}public function AddRoute($routeCfgOrRoute,$prepend=FALSE){if($routeCfgOrRoute instanceof MvcCore_Route){$instance=&$routeCfgOrRoute;}else{$instance=MvcCore_Route::GetInstance($routeCfgOrRoute);}if($prepend){$this->routes=array_merge(array($instance->Name=>$instance),$this->routes);}else{$this->routes[$instance->Name]=&$instance;}$this->urlRoutes[$instance->Name]=&$instance;$this->urlRoutes[$instance->Controller.':'.$instance->Action]=&$instance;return$this;}public function SetCurrentRoute($currentRoute){$this->currentRoute=$currentRoute;return$this;}public function&GetCurrentRoute(){return$this->currentRoute;}public function GetRouteToDefaultIfNotMatch(){return$this->routeToDefaultIfNotMatch;}public function SetRouteToDefaultIfNotMatch($enable=TRUE){$this->routeToDefaultIfNotMatch=$enable;return$this;}public function&Route(MvcCore_Request&$request){$this->request=$request;$chars="a-zA-Z0-9\-_/";$controllerName=$request->GetParam('controller',$chars);$actionName=$request->GetParam('action',$chars);if($controllerName&&$actionName){$this->routeByControllerAndActionQueryString($controllerName,$actionName);}else{$this->routeByRewriteRoutes();}$requestParams=&$this->request->Params;list($defaultCtrl,$defaultAction)=MvcCore::GetInstance()->GetDefaultControllerAndActionNames();foreach(array('controller'=>$defaultCtrl,'action'=>$defaultAction)as$mvcProperty=>$mvcValue){if(!isset($requestParams[$mvcProperty])||(isset($requestParams[$mvcProperty])&&strlen($requestParams[$mvcProperty])===0)){$requestParams[$mvcProperty]=MvcCore_Tool::GetDashedFromPascalCase($mvcValue);}}if(!$this->currentRoute&&($this->request->Path=='/'||$this->routeToDefaultIfNotMatch)){$this->currentRoute=MvcCore_Route::GetInstance(array('name'=>"$defaultCtrl:$defaultAction",'controller'=>$defaultCtrl,'action'=>$defaultAction,));}if($this->currentRoute){if(!$this->currentRoute->Controller){$this->currentRoute->Controller=MvcCore_Tool::GetPascalCaseFromDashed($requestParams['controller']);}if(!$this->currentRoute->Action){$this->currentRoute->Action=MvcCore_Tool::GetPascalCaseFromDashed($requestParams['action']);}}return$this->currentRoute;}public function Url($controllerActionOrRouteName='Default:Default',$params=array()){$result='';if(strpos($controllerActionOrRouteName,':')!==FALSE){list($ctrlPc,$actionPc)=explode(':',$controllerActionOrRouteName);$requestParams=$this->request->Params;if(!$ctrlPc)$ctrlPc=MvcCore_Tool::GetPascalCaseFromDashed($requestParams['controller']);if(!$actionPc)$actionPc=MvcCore_Tool::GetPascalCaseFromDashed($requestParams['action']);$controllerActionOrRouteName="$ctrlPc:$actionPc";}else if($controllerActionOrRouteName=='self'){$controllerActionOrRouteName=$this->currentRoute?$this->currentRoute->Name:':';$params=array_merge($this->request->Params,$params);unset($params['controller'],$params['action']);}$absolute=FALSE;if($params&&isset($params['absolute'])){$absolute=(bool)$params['absolute'];unset($params['absolute']);}if(isset($this->urlRoutes[$controllerActionOrRouteName])){$result=$this->urlByRoute($controllerActionOrRouteName,$params);}else{$result=$this->urlByQueryString($controllerActionOrRouteName,$params);}if($absolute)$result=$this->request->DomainUrl.$result;return$result;}protected function urlByQueryString($controllerActionOrRouteName,$params){list($contollerPascalCase,$actionPascalCase)=explode(':',$controllerActionOrRouteName);$controllerDashed=MvcCore_Tool::GetDashedFromPascalCase($contollerPascalCase);$actionDashed=MvcCore_Tool::GetDashedFromPascalCase($actionPascalCase);$result=$this->request->BasePath.$this->request->ScriptName."?controller=$controllerDashed&action=$actionDashed";if($params){$result.="&".http_build_query($params,"","&");}return$result;}protected function urlByRoute($controllerActionOrRouteName,$params){$route=$this->urlRoutes[$controllerActionOrRouteName];$result=$this->request->BasePath.rtrim($route->Reverse,'?&');$allParams=array_merge(is_array($route->Params)?$route->Params:array(),$params);foreach($allParams as$key=>$value){$paramKeyReplacement="{%$key}";if(mb_strpos($result,$paramKeyReplacement)===FALSE){$glue=(mb_strpos($result,'?')===FALSE)?'?':'&';$result.=$glue.http_build_query(array($key=>$value));}else{$result=str_replace($paramKeyReplacement,$value,$result);}}return$result;}protected function routeByControllerAndActionQueryString($controllerName,$actionName){list($controllerDashed,$controllerPascalCase)=static::completeControllerActionParam($controllerName);list($actionDashed,$actionPascalCase)=static::completeControllerActionParam($actionName);$this->currentRoute=MvcCore_Route::GetInstance(array('name'=>"$controllerPascalCase:$actionPascalCase",'controller'=>$controllerPascalCase,'action'=>$actionPascalCase));$this->request->Params['controller']=$controllerDashed;$this->request->Params['action']=$actionDashed;}protected function routeByRewriteRoutes(){$requestPath=$this->request->Path;foreach($this->routes as&$route){preg_match_all($route->Pattern,$requestPath,$patternMatches);if(count($patternMatches)>0&&count($patternMatches[0])>0){$this->currentRoute=$route;$controllerName=isset($route->Controller)?$route->Controller:'';$routeParams=array('controller'=>MvcCore_Tool::GetDashedFromPascalCase(str_replace(array('_','\\'),'/',$controllerName)),'action'=>MvcCore_Tool::GetDashedFromPascalCase(isset($route->Action)?$route->Action:''),);preg_match_all("#{%([a-zA-Z0-9]*)}#",$route->Reverse,$reverseMatches);if(isset($reverseMatches[1])&&$reverseMatches[1]){$reverseMatchesNames=$reverseMatches[1];array_shift($patternMatches);foreach($reverseMatchesNames as$key=>$reverseKey){if(isset($patternMatches[$key])&&count($patternMatches[$key])){if(!isset($route->Params[$reverseKey]))$route->Params[$reverseKey]=NULL;$routeParams[$reverseKey]=$patternMatches[$key][0];}else{break;}}}$routeDefaultParams=isset($route->Params)?$route->Params:array();$this->request->Params=array_merge($routeDefaultParams,$routeParams,$this->request->Params);break;}}}protected static function completeControllerActionParam($dashed=''){$pascalCase='';$dashed=strlen($dashed)>0?strtolower($dashed):'default';$pascalCase=preg_replace_callback("#(\-[a-z])#",function($m){return strtoupper(substr($m[0],1));},$dashed);$pascalCase=preg_replace_callback("#(_[a-z])#",function($m){return strtoupper($m[0]);},$pascalCase);$pascalCase=ucfirst($pascalCase);return array($dashed,$pascalCase);}}
class MvcCore_Request{const PROTOCOL_HTTP='http:';const PROTOCOL_HTTPS='https:';const METHOD_GET='GET';const METHOD_POST='POST';/** @var string */public$Lang='';/** @var string */public$Locale='';/** @var string */public$Protocol='';/** @var string */public$ServerName='';/** @var string */public$Host='';/** @var string */public$Port='';/** @var string */public$Path='';/** @var string */public$Query='';/** @var mixed */public$Fragment='';/** @var string */public$ScriptName='';/** @var string */public$AppRoot='';/** @var string */public$BasePath='';/** @var string */public$RequestPath='';/** @var string */public$DomainUrl='';/** @var string */public$BaseUrl='';/** @var string */public$RequestUrl='';/** @var string */public$FullUrl='';/** @var string */public$Method='';/** @var string */public$Referer='';/** @var array */public$Params=array();/** @var string */public$MediaSiteKey='';/** @var array */protected$serverGlobals=array();/** @var array */protected$getGlobals=array();/** @var array */protected$postGlobals=array();/** @var array */protected$indexScriptName='';/** @var mixed */protected$appRequest=-1;public static function GetInstance(array&$server,array&$get,array&$post){$requestClass=MvcCore::GetInstance()->GetRequestClass();return new$requestClass($server,$get,$post);}public function __construct(array&$server,array&$get,array&$post){$this->serverGlobals=$server;$this->getGlobals=$get;$this->postGlobals=$post;$this->initMethod();$this->initScriptName();$this->initBasePath();$this->initProtocol();$this->initParsedUrlSegments();$this->initParams();$this->initAppRoot();$this->initPath();$this->initReferer();$this->initUrlCompositions();unset($this->serverGlobals,$this->getGlobals,$this->postGlobals);}public function __call($rawName,$arguments=array()){$nameBegin=strtolower(substr($rawName,0,3));$name=substr($rawName,3);if($nameBegin=='get'&&isset($this->$name)){return$this->$name;}else if($nameBegin=='set'){$this->$name=isset($arguments[0])?$arguments[0]:NULL;return$this;}else{throw new Exception('['.__CLASS__."] No property with name '$name' defined.");}}public function __get($name){return isset($this->$name)?$this->$name:NULL;}public function __set($name,$value){$this->$name=$value;}public function SetParam($name="",$value=""){$this->Params[$name]=$value;return$this;}public function GetParam($name="",$pregReplaceAllowedChars="a-zA-Z0-9_/\-\.\@"){$result='';$params=$this->Params;if(isset($params[$name])){$rawValue=trim($params[$name]);if(mb_strlen($rawValue)>0){if(!$pregReplaceAllowedChars||$pregReplaceAllowedChars==".*"){$result=$rawValue;}else{$pattern="#[^".$pregReplaceAllowedChars."]#";$result=preg_replace($pattern,"",$rawValue);}}}return$result;}public function IsAppRequest(){if($this->appRequest==-1){$this->appRequest=1;$ctrl='controller';$action='action';if(isset($this->Params[$ctrl])&&isset($this->Params[$action])){if($this->Params[$ctrl]==$ctrl&&$this->Params[$action]=='asset'){$this->appRequest=0;}}}return(bool)$this->appRequest;}protected function initMethod(){$this->Method=strtoupper($this->serverGlobals['REQUEST_METHOD']);}protected function initScriptName(){$this->indexScriptName=str_replace('\\','/',$this->serverGlobals['SCRIPT_NAME']);$this->ScriptName='/'.substr($this->indexScriptName,strrpos($this->indexScriptName,'/')+1);}protected function initBasePath(){$lastSlashPos=mb_strrpos($this->indexScriptName,'/');if($lastSlashPos!==FALSE){$this->BasePath=mb_substr($this->indexScriptName,0,$lastSlashPos);}else{$this->BasePath='';}}protected function initProtocol(){$this->Protocol=static::PROTOCOL_HTTP;if(isset($this->serverGlobals['HTTPS'])&&strtolower($this->serverGlobals['HTTPS'])=='on'){$this->Protocol=static::PROTOCOL_HTTPS;}}protected function initParsedUrlSegments(){$absoluteUrl=$this->Protocol.'//'.$this->serverGlobals['HTTP_HOST'].$this->serverGlobals['REQUEST_URI'];$parsedUrl=parse_url($absoluteUrl);$keyUc='';foreach($parsedUrl as$key=>$value){$keyUc=ucfirst($key);if(isset($this->$keyUc)){$this->$keyUc=(string)$value;}}$this->ServerName=$this->serverGlobals['SERVER_NAME'];$this->Host=$this->serverGlobals['HTTP_HOST'];}protected function initParams(){$params=array_merge($this->getGlobals);if(strtoupper($this->serverGlobals['REQUEST_METHOD'])=='POST'){$postValues=array();if(count($this->postGlobals)>0){$postValues=$this->postGlobals;}else{$postValues=$this->initParamsCompletePostData();}$params=array_merge($params,$postValues);}$this->Params=$params;}private function initParamsCompletePostData(){$result=array();$rawPhpInput=Packager_Php_Wrapper::FileGetContents('php://input');$decodedJsonResult=MvcCore_Tool::DecodeJson($rawPhpInput);if($decodedJsonResult->success){$result=(array)$decodedJsonResult->data;}else{$rows=explode('&',$rawPhpInput);foreach($rows as$row){list($key,$value)=explode('=',$row);$result[$key]=$value;}}return$result;}protected function initAppRoot(){$indexFilePath=ucfirst(str_replace('\\','/',$this->serverGlobals['SCRIPT_FILENAME']));if(strpos(str_replace('\\','/',__DIR__).'/vendor/mvccore/mvccore/src/MvcCore/Request.php','phar://')===0){$appRootFullPath='phar://'.$indexFilePath;}else{$appRootFullPath=substr($indexFilePath,0,mb_strrpos($indexFilePath,'/'));}$this->AppRoot=str_replace('\\','/',$appRootFullPath);}protected function initPath(){$requestUrl=$this->serverGlobals['REQUEST_URI'];$path='/'.ltrim(mb_substr($requestUrl,mb_strlen($this->BasePath)),'/');if(mb_strpos($path,'?')!==FALSE)$path=mb_substr($path,0,mb_strpos($path,'?'));$this->Path=$path;}protected function initReferer(){$referer=isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:'';if($referer){$referer=filter_var($referer,FILTER_SANITIZE_URL);$this->Referer=$referer?$referer:'';}}protected function initUrlCompositions(){$this->RequestPath=$this->Path.(($this->Query)?'?'.$this->Query:'').$this->Fragment;$this->DomainUrl=$this->Protocol.'//'.$this->Host;$this->BaseUrl=$this->DomainUrl.$this->BasePath;$this->RequestUrl=$this->BaseUrl.$this->Path;$this->FullUrl=$this->RequestUrl.(($this->Query)?'?'.$this->Query:'');}}
class MvcCore{const VERSION='3.2.0';/** @var string */const COMPILED_PHP='PHP';/** @var string */const COMPILED_PHAR='PHAR';/** @var string */const COMPILED_SFU='SFU';/** @var string */const NOT_COMPILED='';/** @var MvcCore */protected static$instance;/** @var string */protected$compiled=null;/** @var int */protected$microtime=0;/** @var MvcCore_Controller */protected$controller=NULL;/** @var MvcCore_Request */protected$request;/** @var MvcCore_Response */protected$response;/** @var MvcCore_Router */protected$router=null;/** @var callable[] */protected$preRouteHandlers=array();/** @var callable[] */protected$preDispatchHandlers=array();/** @var callable[] */protected$postDispatchHandlers=array();/** @var string */protected$configClass='MvcCore_Config';/** @var string */protected$sessionClass='MvcCore_Session';/** @var string */protected$requestClass='MvcCore_Request';/** @var string */protected$responseClass='MvcCore_Response';/** @var string */protected$routerClass='MvcCore_Router';/** @var string */protected$viewClass='MvcCore_View';/** @var string */protected$debugClass='MvcCore_Debug';/** @var string */protected$appDir='App';/** @var string */protected$controllersDir='Controllers';/** @var string */protected$viewsDir='Views';/** @var string */protected$defaultControllerName='Index';/** @var string */protected$defaultControllerDefaultActionName='Index';/** @var string */protected$defaultControllerErrorActionName='Error';/** @var string */protected$defaultControllerNotFoundActionName='NotFound';public static function StaticInit(){$instance=static::GetInstance();$instance->microtime=microtime(TRUE);if(is_null($instance->compiled)){$compiled=static::NOT_COMPILED;if(strpos(str_replace('\\','/',__DIR__).'/vendor/mvccore/mvccore/src/MvcCore.php','phar://')===0){$compiled=static::COMPILED_PHAR;}else if(class_exists('Packager_Php_Wrapper')){$compiled=constant('Packager_Php_Wrapper::FS_MODE');}$instance->compiled=$compiled;}}public static function&GetInstance(){if(!static::$instance)static::$instance=new static();return static::$instance;}public static function AddPreRouteHandler(callable$handler){static::GetInstance()->preRouteHandlers[]=$handler;}public static function AddPreDispatchHandler(callable$handler){static::GetInstance()->preDispatchHandlers[]=$handler;}public static function AddPostDispatchHandler(callable$handler){static::GetInstance()->postDispatchHandlers[]=$handler;}public static function SessionStart(){$sessionClass=MvcCore::GetInstance()->sessionClass;$sessionClass::Start();}public function GetCompiled(){return$this->compiled;}public function GetRequestClass(){return$this->requestClass;}public function GetResponseClass(){return$this->responseClass;}public function GetRouterClass(){return$this->routerClass;}public function GetConfigClass(){return$this->configClass;}public function GetSessionClass(){return$this->sessionClass;}public function GetViewClass(){return$this->viewClass;}public function GetDebugClass(){return$this->debugClass;}public function GetMicrotime(){return$this->microtime;}public function GetRouter(){return$this->router;}public function&GetController(){return$this->controller;}public function&GetRequest(){return$this->request;}public function&GetResponse(){return$this->response;}public function GetAppDir(){return$this->appDir;}public function GetControllersDir(){return$this->controllersDir;}public function GetViewsDir(){return$this->viewsDir;}public function GetDefaultControllerAndActionNames(){return array($this->defaultControllerName,$this->defaultControllerDefaultActionName);}public function SetCompiled($compiled=''){$this->compiled=$compiled;return$this;}public function SetConfigClass($configClass){@class_exists($configClass);$this->configClass=$configClass;return$this;}public function SetSessionClass($sessionClass){@class_exists($sessionClass);$this->sessionClass=$sessionClass;return$this;}public function SetRequestClass($requestClass){@class_exists($requestClass);$this->requestClass=$requestClass;return$this;}public function SetResponseClass($responseClass){@class_exists($responseClass);$this->responseClass=$responseClass;return$this;}public function SetRouterClass($routerClass){@class_exists($routerClass);$this->routerClass=$routerClass;return$this;}public function SetViewClass($viewClass){@class_exists($viewClass);$this->viewClass=$viewClass;return$this;}public function SetDebugClass($debugClass){@class_exists($debugClass);$this->debugClass=$debugClass;return$this;}public function SetAppDir($appDir){$this->appDir=$appDir;return$this;}public function SetControllersDir($controllersDir){$this->controllersDir=$controllersDir;return$this;}public function SetViewsDir($viewsDir){$this->viewsDir=$viewsDir;return$this;}public function SetDefaultControllerName($defaultControllerName){$this->defaultControllerName=$defaultControllerName;return$this;}public function SetDefaultControllerDefaultActionName($defaultActionName){$this->defaultControllerDefaultActionName=$defaultActionName;return$this;}public function SetDefaultControllerErrorActionName($defaultControllerErrorActionName){$this->defaultControllerErrorActionName=$defaultControllerErrorActionName;return$this;}public function SetDefaultControllerNotFoundActionName($defaultControllerNotFoundActionName){$this->defaultControllerNotFoundActionName=$defaultControllerNotFoundActionName;return$this;}public function Run($singleFileUrl=FALSE){if($singleFileUrl)$this->compiled=static::COMPILED_SFU;return$this->process();}protected function process(){$this->request=MvcCore_Request::GetInstance($_SERVER,$_GET,$_POST);$this->response=MvcCore_Response::GetInstance();$debugClass=$this->debugClass;$debugClass::Init();if(!$this->processCustomHandlers($this->preRouteHandlers))return$this->Terminate();if(!$this->routeRequest())return$this->Terminate();if(!$this->processCustomHandlers($this->preDispatchHandlers))return$this->Terminate();if(!$this->DispatchMvcRequest($this->router->GetCurrentRoute()))return$this->Terminate();if(!$this->processCustomHandlers($this->postDispatchHandlers))return$this->Terminate();return$this->Terminate();}protected function routeRequest(){$routerClass=$this->routerClass;$this->router=$routerClass::GetInstance();try{$this->router->Route($this->request);return TRUE;}catch(Exception$e){return$this->DispatchException($e);}}protected function processCustomHandlers(&$handlers=array()){if(!$this->IsAppRequest())return TRUE;$result=TRUE;foreach($handlers as$handler){if(is_callable($handler)){try{$handler($this->request,$this->response);}catch(exception$e){$this->DispatchException($e);$result=FALSE;break;}}}return$result;}public function DispatchMvcRequest(MvcCore_Route&$route=NULL){if(is_null($route))return$this->DispatchException(new Exception('No route for request',404));list($controllerNamePascalCase,$actionNamePascalCase)=array($route->Controller,$route->Action);$actionName=$actionNamePascalCase.'Action';$coreControllerName='MvcCore_Controller';$requestParams=$this->request->Params;$viewScriptFullPath=MvcCore_View::GetViewScriptFullPath(MvcCore_View::$ScriptsDir,$requestParams['controller'].'/'.$requestParams['action']);if($controllerNamePascalCase=='Controller'){$controllerName=$coreControllerName;}else{$controllerName=$this->CompleteControllerName($controllerNamePascalCase);if(!class_exists($controllerName)){if(Packager_Php_Wrapper::FileExists($viewScriptFullPath)){$controllerName=$coreControllerName;}}}return$this->DispatchControllerAction($controllerName,$actionName,$viewScriptFullPath,function(Exception&$e){return$this->DispatchException($e);});}public function DispatchControllerAction($controllerClassFullName,$actionName,$viewScriptFullPath,callable$exceptionCallback){$this->controller=NULL;try{$this->controller=new$controllerClassFullName($this->request,$this->response);}catch(Exception$e){return$this->DispatchException(new ErrorException($e->getMessage(),404));}if(!method_exists($this->controller,$actionName)&&$controllerClassFullName!=='MvcCore_Controller'){if(!Packager_Php_Wrapper::FileExists($viewScriptFullPath)){$this->DispatchException(new ErrorException("Controller '$controllerClassFullName' has not method '$actionName' "."or view doesn't exists in path: '$viewScriptFullPath'.",404));}}list($controllerNameDashed,$actionNameDashed)=array($this->request->Params['controller'],$this->request->Params['action']);try{$this->controller->Init();$this->controller->PreDispatch();if(method_exists($this->controller,$actionName))$this->controller->$actionName();$this->controller->Render($controllerNameDashed,$actionNameDashed);}catch(Exception$e){return$exceptionCallback($e);}return TRUE;}public function Url($controllerActionOrRouteName='Default:Default',$params=array()){return MvcCore_Router::GetInstance()->Url($controllerActionOrRouteName,$params);}public function Terminate(){$sessionClass=$this->sessionClass;$sessionClass::Close();$this->response->Send();exit;}public function DispatchException(Exception$e){if(class_exists('Packager_Php'))return FALSE;if($e->getCode()==404){MvcCore_Debug::Log($e,MvcCore_Debug::ERROR);$this->RenderNotFound($e->getMessage());}else if(MvcCore_Config::IsDevelopment()){MvcCore_Debug::Exception($e);}else{MvcCore_Debug::Log($e,MvcCore_Debug::EXCEPTION);$this->RenderError($e);}return FALSE;}public function RenderError(Exception$e){$defaultCtrlFullName=$this->GetDefaultControllerIfHasAction($this->defaultControllerErrorActionName);$exceptionMessage=$e->getMessage();if($defaultCtrlFullName){$this->request->Params=array_merge($this->request->Params,array('code'=>500,'message'=>$exceptionMessage,'controller'=>MvcCore_Tool::GetDashedFromPascalCase($this->defaultControllerName),'action'=>MvcCore_Tool::GetDashedFromPascalCase($this->defaultControllerErrorActionName),));$this->DispatchControllerAction($defaultCtrlFullName,$this->defaultControllerErrorActionName."Action",'',function(Exception&$e)use($exceptionMessage){MvcCore_Debug::Log($e,MvcCore_Debug::EXCEPTION);$this->RenderError500PlainText($exceptionMessage.PHP_EOL.PHP_EOL.$e->getMessage());});}else{$this->RenderError500PlainText($exceptionMessage);}}public function RenderNotFound($exceptionMessage=''){if(!$exceptionMessage)$exceptionMessage='Page not found.';$defaultCtrlFullName=$this->GetDefaultControllerIfHasAction($this->defaultControllerNotFoundActionName);if($defaultCtrlFullName){$this->request->Params=array_merge($this->request->Params,array('code'=>404,'message'=>$exceptionMessage,'controller'=>MvcCore_Tool::GetDashedFromPascalCase($this->defaultControllerName),'action'=>MvcCore_Tool::GetDashedFromPascalCase($this->defaultControllerNotFoundActionName),));$this->DispatchControllerAction($defaultCtrlFullName,$this->defaultControllerNotFoundActionName."Action",'',function(Exception&$e){MvcCore_Debug::Log($e,MvcCore_Debug::EXCEPTION);$this->RenderError404PlainText();});}else{$this->RenderError404PlainText();}}public function RenderError500PlainText($text=''){if(!$text)$text='Internal Server Error.';$this->response=(new MvcCore_Response(MvcCore_Response::INTERNAL_SERVER_ERROR,array('Content-Type'=>'text/plain'),"Error 500:".PHP_EOL.PHP_EOL.$text));}public function RenderError404PlainText(){$this->response=(new MvcCore_Response(MvcCore_Response::NOT_FOUND,array('Content-Type'=>'text/plain'),'Error 404 – Page Not Found.'));}public function GetDefaultControllerIfHasAction($actionName){$defaultControllerName=$this->CompleteControllerName($this->defaultControllerName);if(class_exists($defaultControllerName)&&method_exists($defaultControllerName,$actionName.'Action')){return$defaultControllerName;}return'';}public function CompleteControllerName($controllerNamePascalCase){$glue=strpos($controllerNamePascalCase,'\\')!==FALSE?'\\':'_';$firstChar=substr($controllerNamePascalCase,0,1);if($firstChar=='/')return substr($controllerNamePascalCase,1);return implode($glue,array($this->appDir,$this->controllersDir,$controllerNamePascalCase));}public function IsErrorDispatched(){$defaultCtrlName=MvcCore_Tool::GetDashedFromPascalCase($this->defaultControllerName);$errorActionName=MvcCore_Tool::GetDashedFromPascalCase($this->defaultControllerErrorActionName);$params=$this->request->Params;return$params['controller']==$defaultCtrlName&&$params['action']==$errorActionName;}public function IsNotFoundDispatched(){$defaultCtrlName=MvcCore_Tool::GetDashedFromPascalCase($this->defaultControllerName);$errorActionName=MvcCore_Tool::GetDashedFromPascalCase($this->defaultControllerNotFoundActionName);$params=$this->request->Params;return$params['controller']==$defaultCtrlName&&$params['action']==$errorActionName;}public function IsAppRequest(){$params=$this->request->Params;$ctrlName=isset($params['controller'])?$params['controller']:'';if($ctrlName!='controller')return true;$actionName=isset($params['action'])?$params['action']:'';return$actionName!='asset';}}MvcCore::StaticInit();
class MvcCore_Config{const ENVIRONMENT_DEVELOPMENT='development';const ENVIRONMENT_BETA='beta';const ENVIRONMENT_ALPHA='alpha';const ENVIRONMENT_PRODUCTION='production';/** @var string */public static$SystemConfigPath='/%appPath%/config.ini';/** @var string */protected static$environment='';/** @var stdClass|array|boolean */protected static$systemConfig=NULL;/** @var mixed */protected static$booleanValues=array('yes'=>TRUE,'no'=>FALSE,'true'=>TRUE,'false'=>FALSE,);/** @var array|stdClass */protected$result=array();/** @var array */protected$objectTypes=array();public static function StaticInit(){if(!static::$environment){$serverAddress=static::getServerIp();$remoteAddress=static::getClientIp();if($serverAddress==$remoteAddress){static::$environment=static::ENVIRONMENT_DEVELOPMENT;}else{static::$environment=static::ENVIRONMENT_PRODUCTION;}}}public static function IsDevelopment(){return static::$environment==static::ENVIRONMENT_DEVELOPMENT;}public static function IsBeta(){return static::$environment==static::ENVIRONMENT_BETA;}public static function IsAlpha(){return static::$environment==static::ENVIRONMENT_ALPHA;}public static function IsProduction(){return static::$environment==static::ENVIRONMENT_PRODUCTION;}public static function GetEnvironment(){return static::$environment;}public static function SetEnvironment($environment=self::ENVIRONMENT_PRODUCTION){static::$environment=$environment;}public static function&GetSystem(){if(!static::$systemConfig){$systemConfigClass=MvcCore::GetInstance()->GetConfigClass();$instance=new$systemConfigClass;static::$systemConfig=$instance->Load(str_replace('%appPath%',MvcCore::GetInstance()->GetAppDir(),$systemConfigClass::$SystemConfigPath));}return static::$systemConfig;}protected static function getServerIp(){return isset($_SERVER['SERVER_ADDR'])?$_SERVER['SERVER_ADDR']:$_SERVER['LOCAL_ADDR'];}protected static function getClientIp(){return isset($_SERVER['HTTP_X_CLIENT_IP'])?$_SERVER['HTTP_X_CLIENT_IP']:$_SERVER['REMOTE_ADDR'];}public function&Load($configPath=''){$cfgFullPath=MvcCore::GetInstance()->GetRequest()->AppRoot.$configPath;if(!Packager_Php_Wrapper::FileExists($cfgFullPath))return FALSE;$rawIniData=Packager_Php_Wrapper::ParseIniFile($cfgFullPath,TRUE);$environment=$this->detectEnvironmentBySystemConfig($rawIniData);if($rawIniData===FALSE)return FALSE;$iniData=$this->prepareIniDataToParse($rawIniData,$environment);$this->processIniData($iniData);foreach($this->objectTypes as&$objectType){if($objectType[0])$objectType[1]=(object)$objectType[1];}unset($this->objectTypes);return$this->result;}protected function&prepareIniDataToParse(&$rawIniData,$environment){$iniData=array();foreach($rawIniData as$keyOrSectionName=>$valueOrSectionValues){if(gettype($valueOrSectionValues)=='array'){if(strpos($keyOrSectionName,'>')!==FALSE){list($envNameLocal,$keyOrSectionName)=explode('>',str_replace(' ','',$keyOrSectionName));if($envNameLocal!==$environment)continue;}$sectionValues=array();foreach($valueOrSectionValues as$key=>$value)$sectionValues[$keyOrSectionName.'.'.$key]=$value;$iniData=array_merge($iniData,$sectionValues);}else{$iniData[$keyOrSectionName]=$valueOrSectionValues;}}return$iniData;}protected function detectEnvironmentBySystemConfig(array&$rawIni=array()){$environment='';if(isset($rawIni['environments'])){$environments=&$rawIni['environments'];$serverAddress=','.static::getServerIp().',';$serverComputerName=','.gethostname().',';foreach($environments as$environmentName=>$environmentComputerNamesOrIps){$environmentComputerNamesOrIps=','.$environmentComputerNamesOrIps.',';if(strpos($environmentComputerNamesOrIps,$serverAddress)!==FALSE||strpos($environmentComputerNamesOrIps,$serverComputerName)!==FALSE){$environment=$environmentName;break;}}}if($environment&&!static::$environment)static::SetEnvironment($environment);return$environment;}protected function processIniData(&$iniData){$this->objectTypes['']=array(1,&$this->result);foreach($iniData as$rawKey=>$rawValue){$current=&$this->result;$rawKeys=array();$lastRawKey=$rawKey;$lastDotPos=strrpos($rawKey,'.');if($lastDotPos!==FALSE){$rawKeys=explode('.',substr($rawKey,0,$lastDotPos));$lastRawKey=substr($rawKey,$lastDotPos+1);}$levelKey='';$prevLevelKey='';foreach($rawKeys as$key){$prevLevelKey=$levelKey;$levelKey.=($levelKey?'.':'').$key;if(!isset($current[$key])){$current[$key]=array();$this->objectTypes[$levelKey]=array(1,&$current[$key]);if($this->isKeyNumeric($key)&&isset($this->objectTypes[$prevLevelKey])){$this->objectTypes[$prevLevelKey][0]=0;}}$current=&$current[$key];}$typedValue=$this->getTypedValue($rawValue);if(isset($current[$lastRawKey])){$current[$lastRawKey][]=$typedValue;$this->objectTypes[$levelKey?$levelKey:$lastRawKey][0]=0;}else{if(gettype($current)!='array'){$current=array($current);$this->objectTypes[$levelKey]=array(0,&$current);}$current[$lastRawKey]=$typedValue;if($this->isKeyNumeric($lastRawKey))$this->objectTypes[$levelKey][0]=0;}}}protected function isKeyNumeric($rawKey){$numericRawKey=preg_replace("#[^0-9\-]#",'',$rawKey);return$numericRawKey==$rawKey;}protected function getTypedValue($rawValue){if(gettype($rawValue)=="array"){foreach($rawValue as$key=>$value){$rawValue[$key]=$this->getTypedValue($value);}return$rawValue;}else{$numericRawVal=preg_replace("#[^0-9\-\.]#",'',$rawValue);if($numericRawVal==$rawValue){return$this->getTypedValueFloatIpOrInt($rawValue);}else{return$this->getTypedValueBoolOrString($rawValue);}}}protected function getTypedValueFloatIpOrInt($rawValue){if(strpos($rawValue,'.')!==FALSE){if(substr_count($rawValue,'.')===1){return floatval($rawValue);}else{return$rawValue;}}else{$intVal=intval($rawValue);return(string)$intVal===$rawValue?$intVal:$rawValue;}}protected function getTypedValueBoolOrString($rawValue){$lowerRawValue=strtolower($rawValue);if(isset(static::$booleanValues[$lowerRawValue])){return static::$booleanValues[$lowerRawValue];}else{return trim($rawValue);}}}MvcCore_Config::StaticInit();
class MvcCore_Debug{const DEBUG='debug',INFO='info',WARNING='warning',ERROR='error',EXCEPTION='exception',CRITICAL='critical',JAVASCRIPT='javascript';/** @var string */public static$EmailRecepient='admin@localhost';/** @var mixed */public static$LogDirectory='/Var/Logs';/** @var boolean */protected static$development=NULL;/** @var array */protected static$handlers=array('timer'=>'timerHandler','dump'=>'dumpHandler','barDump'=>'dumpHandler','log'=>'dumpHandler','fireLog'=>'dumpHandler','exceptionHandler'=>'exceptionHandler','shutdownHandler'=>'ShutdownHandler',);/** @var array */protected static$dumps=array();/** @var array */protected static$timers=array();/** @var bool */protected static$originalDebugClass=TRUE;public static function Init(){if(!is_null(static::$development))return;$app=MvcCore::GetInstance();$configClass=$app->GetConfigClass();static::$development=$configClass::IsDevelopment();$cfg=$configClass::GetSystem();if(isset($cfg->debug)){$cfgDebug=&$cfg->debug;if(isset($cfgDebug->emailRecepient)){static::$EmailRecepient=$cfgDebug->emailRecepient;}if(isset($cfgDebug->logDirectory)){$scriptPath=str_replace('\\','/',$_SERVER['SCRIPT_FILENAME']);$lastSlas=strrpos($scriptPath,'/');$appRoot=substr($scriptPath,0,$lastSlas!==FALSE?$lastSlas:strlen($scriptPath));static::$LogDirectory=$appRoot.$cfgDebug->logDirectory;}}static::$originalDebugClass=$app->GetDebugClass()==__CLASS__;static::initLogDirectory(static::$LogDirectory);static::initHandlers();static::initGlobalShortHands();}protected static function initHandlers(){foreach(static::$handlers as$key=>$value){static::$handlers[$key]=array(__CLASS__,$value);}static::$handlers=(object)static::$handlers;register_shutdown_function(self::$handlers->shutdownHandler);}protected static function initLogDirectory($logDirectory){if(!Packager_Php_Wrapper::IsDir($logDirectory))mkdir($logDirectory,0777,TRUE);if(!is_writable($logDirectory)){try{chmod($logDirectory,0777);}catch(Exception$e){die('['.static::class.'] '.$e->getMessage());}}}protected static function initGlobalShortHands(){function x($value,$title=NULL,$options=array()){return MvcCore_Debug::BarDump($value,$title,$options);};function xx(){$args=func_get_args();foreach($args as$arg)MvcCore_Debug::BarDump($arg);};function xxx($var=NULL,$title=NULL,$options=array()){$args=func_get_args();if(count($args)===0){throw new Exception("Stopped.");}else{@header("Content-Type: text/html; charset=utf-8");foreach($args as$arg)MvcCore_Debug::Dump($arg,FALSE,TRUE);}echo  ob_get_clean();die();};}public static function Timer($name=NULL){return static::BarDump(call_user_func(static::$handlers->timer,$name),$name);}public static function Dump($value,$return=FALSE){if(static::$originalDebugClass){$args=func_get_args();$options=isset($args[2])?array('dieDumpCall'=>TRUE):array();if($return)$options['doNotStore']=TRUE;$options['backtraceIndex']=1;$result=static::dumpHandler($value,NULL,$options);}else{$result=call_user_func(static::$handlers->dump,$value,$return);}if($return)return$result;}public static function BarDump($value,$title=NULL,$options=array()){return call_user_func_array(static::$handlers->barDump,func_get_args());}public static function Log($value,$priority=self::INFO){$args=func_get_args();if(static::$originalDebugClass){$content=date('[Y-m-d H-i-s]')."\n".static::dumpHandler($value,NULL,array('doNotStore'=>TRUE,'backtraceIndex'=>1));$content=str_replace("\n","\n\t",$content)."\n";$fullPath=static::$LogDirectory.DIRECTORY_SEPARATOR.$priority.'.log';file_put_contents($fullPath,$content,FILE_APPEND);return$fullPath;}else{return call_user_func_array(static::$handlers->log,$args);}}public static function FireLog($message,$priority=self::DEBUG){$args=func_get_args();if(static::$originalDebugClass){$args=array($message,NULL,array('priority'=>$priority));}return call_user_func_array(static::$handlers->fireLog,$args);}public static function Exception($exception,$exit=TRUE){return call_user_func_array(static::$handlers->exceptionHandler,func_get_args());}public static function ShutdownHandler(){if(!count(static::$dumps))return;$dumps='';$dieDump=FALSE;foreach(static::$dumps as$values){$dumps.='<div class="item">';if(!is_null($values[1])){$dumps.='<pre class="title">'.$values[1].'</pre>';}$dumps.='<div class="value">'.$values[0].'</div></div>';if(isset($values[2]['dieDumpCall'])&&$values[2]['dieDumpCall'])$dieDump=TRUE;}$template=Packager_Php_Wrapper::FileGetContents(dirname(str_replace('\\','/',__DIR__).'/vendor/mvccore/mvccore/src/MvcCore/Debug.php').'/debug.html');echo  str_replace(array('%mvccoreDumps%','%mvccoreDumpsCount%','%mvccoreDumpsClose%'),array($dumps,count(static::$dumps),$dieDump?';':'q();'),$template);}protected static function timerHandler($name=NULL){$now=microtime(TRUE);if(is_null($name))return$now-MvcCore::GetInstance()->GetMicrotime();$difference=isset(static::$timers[$name])?$now-static::$timers[$name]:0;static::$timers[$name]=$now;return$difference;}protected static function dumpHandler($var,$title=NULL,$options=array()){ob_start();var_dump($var);$content=preg_replace("#\</small\>\n#",'</small>',ob_get_clean(),1);$content=preg_replace("#\<small\>([^\>]*)\>#",'',$content,1);$backtraceIndex=isset($options['backtraceIndex'])?$options['backtraceIndex']:2;$backtrace=debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS,$backtraceIndex+1);$originalPlace=(object)$backtrace[$backtraceIndex];$content='<small class="file">'.$originalPlace->file.':'.$originalPlace->line.'</small>'.$content;if(!isset($options['doNotStore']))static::$dumps[]=array($content,$title,$options);return$content;}protected static function exceptionHandler(Exception$e,$exit=TRUE){throw$e;}}
abstract class MvcCore_Model{/** @var array */protected static$connectionArguments=array('4D'=>array('dsn'=>'{driver}:host={host};charset=UTF-8','auth'=>TRUE,'fileDb'=>FALSE,'options'=>array(),),'firebird'=>array('dsn'=>'{driver}:host={host};dbname={dbname};charset=UTF8','auth'=>TRUE,'fileDb'=>TRUE,'options'=>array()),'ibm'=>array('dsn'=>'ibm:DRIVER={IBM DB2 ODBC DRIVER};DATABASE={dbname};HOSTNAME={host};PORT={port};PROTOCOL=TCPIP;','auth'=>TRUE,'fileDb'=>FALSE,'options'=>array(),),'informix'=>array('dsn'=>'{driver}:host={host};service={service};database={dbname};server={server};protocol={protocol};EnableScrollableCursors=1','auth'=>TRUE,'fileDb'=>FALSE,'options'=>array(),),'mysql'=>array('dsn'=>'{driver}:host={host};dbname={dbname}','auth'=>TRUE,'fileDb'=>FALSE,'options'=>array('PDO::ATTR_EMULATE_PREPARES'=>FALSE,'PDO::MYSQL_ATTR_MULTI_STATEMENTS'=>TRUE,'PDO::MYSQL_ATTR_INIT_COMMAND'=>"SET NAMES 'UTF8'",),),'sqlite'=>array('dsn'=>'{driver}:{dbname}','auth'=>FALSE,'fileDb'=>TRUE,'options'=>array(),),'sqlsrv'=>array('dsn'=>'{driver}:Server={host};Database={dbname}','auth'=>TRUE,'fileDb'=>FALSE,'options'=>array(),),'default'=>array('dsn'=>'{driver}:host={host};dbname={dbname}','auth'=>TRUE,'fileDb'=>FALSE,'options'=>array(),),);/** @var int */protected static$connectionIndex=-1;/** @var array */protected static$connections=array();/** @var array */protected static$instances=array();/** @var array */protected static$configs=array();/** @var bool */protected$autoInit=TRUE;/** @var PDO */protected$db;/** @var stdClass */protected$cfg;/** @var MvcCore_Model */protected$resource;public function GetValues($getNullValues=FALSE,$includeInheritProperties=TRUE,$publicOnly=TRUE){$data=array();$systemProperties=array('autoInit'=>1,'db'=>1,'cfg'=>1,'resource'=>1);$modelClassName=get_class($this);$classReflector=new ReflectionClass($modelClassName);$properties=$publicOnly?$classReflector->getProperties(ReflectionProperty::IS_PUBLIC):$classReflector->getProperties();foreach($properties as$property){if(!$includeInheritProperties&&$property->class!=$modelClassName)continue;$propertyName=$property->name;if(isset($systemProperties[$propertyName]))continue;if(!$getNullValues&&is_null($this->$propertyName))continue;$data[$propertyName]=$this->$propertyName;}return$data;}public function SetUp($data=array(),$keysInsensitive=FALSE,$includeInheritProperties=TRUE,$publicOnly=TRUE){$modelClassName=get_class($this);$classReflector=new ReflectionClass($modelClassName);$properties=$publicOnly?$classReflector->getProperties(ReflectionProperty::IS_PUBLIC):$classReflector->getProperties();$dataKeys=$keysInsensitive?','.implode(',',array_keys($data)).',':'';foreach($properties as$property){if(!$includeInheritProperties&&$property->class!=$modelClassName)continue;$propertyName=$property->name;if(isset($data[$propertyName])){$value=$data[$propertyName];}else if($keysInsensitive){$dataKeyPos=stripos($dataKeys,','.$propertyName.',');if($dataKeyPos===FALSE)continue;$dataKey=substr($dataKeys,$dataKeyPos+1,strlen($propertyName));$value=$data[$dataKey];}else{continue;}if(preg_match('/@var\s+([^\s]+)/',$property->getDocComment(),$matches)){list(,$type)=$matches;settype($value,$type);}$this->$propertyName=$value;}return$this;}public static function GetInstance(){$className=get_called_class();$args=func_get_args();$instanceIndex=md5($className.'_'.serialize($args));if(!isset(self::$instances[$instanceIndex])){$reflectionClass=new ReflectionClass($className);$instance=$reflectionClass->newInstanceArgs($args);self::$instances[$instanceIndex]=$instance;}return self::$instances[$instanceIndex];}public static function GetResource($args=array(),$modelClassName='',$resourceClassPath='_Resource'){$result=NULL;if(!$modelClassName)$modelClassName=get_called_class();if(strpos($modelClassName,'_Resource')===FALSE){$resourceClassName=$modelClassName.$resourceClassPath;if(class_exists($resourceClassName)){$result=call_user_func_array(array($resourceClassName,'GetInstance'),$args);}}return$result;}public function __construct($connectionIndex=-1){if($this->autoInit)$this->Init($connectionIndex);}public function Init($connectionIndex=-1){$this->db=static::GetDb($connectionIndex);$this->cfg=static::GetCfg($connectionIndex);$this->resource=static::GetResource(array(),get_class($this));}public static function GetDb($connectionIndex=-1){if(!isset(static::$connections[$connectionIndex])){static::loadConfigs();if($connectionIndex==-1)$connectionIndex=static::$connectionIndex;if($connectionIndex==-1)$connectionIndex=self::$connectionIndex;$cfg=static::GetCfg($connectionIndex);$conArgs=(object)self::$connectionArguments[isset(self::$connectionArguments[$cfg->driver])?$cfg->driver:'default'];$connection=NULL;if($conArgs->fileDb){$appRoot=MvcCore::GetInstance()->GetRequest()->AppRoot;if(strpos($appRoot,'phar://')!==FALSE){$lastSlashPos=strrpos($appRoot,'/');$appRoot=substr($appRoot,7,$lastSlashPos-7);}$cfg->dbname=realpath($appRoot.$cfg->dbname);}$dsn=$conArgs->dsn;foreach($cfg as$key=>$value)$dsn=str_replace('{'.$key.'}',$value,$dsn);if($conArgs->auth){$connection=new PDO($dsn,$cfg->username,$cfg->password,$conArgs->options);}else{$connection=new PDO($dsn);}static::$connections[$connectionIndex]=$connection;}return static::$connections[$connectionIndex];}public static function GetCfg($connectionIndex=-1){static::loadConfigs();if($connectionIndex==-1)$connectionIndex=static::$connectionIndex;if($connectionIndex==-1)$connectionIndex=self::$connectionIndex;$baseType=gettype(static::$configs);if($baseType=='array'&&isset(static::$configs[$connectionIndex])){return static::$configs[$connectionIndex];}else if($baseType=='object'&&isset(static::$configs->$connectionIndex)){return static::$configs->$connectionIndex;}else{return static::$configs;}}protected static function loadConfigs(){if(empty(static::$configs)){$cfg=MvcCore_Config::GetSystem();if($cfg===FALSE){$cfgPath=MvcCore_Config::$SystemConfigPath;throw new Exception('['.__CLASS__."] System config.ini not found in '$cfgPath'.");}if(!isset($cfg->db)){throw new Exception('['.__CLASS__."] No [db] section and no records matched 'db.*' found in system config.ini.");}$cfgType=gettype($cfg->db);if($cfgType=='array'&&isset($cfg->db['defaultDbIndex'])){self::$connectionIndex=$cfg->db['defaultDbIndex'];}else if($cfgType=='object'&&isset($cfg->db->defaultDbIndex)){self::$connectionIndex=$cfg->db->defaultDbIndex;}static::$configs=$cfg->db;}}public function __call($rawName,$arguments=array()){$nameBegin=strtolower(substr($rawName,0,3));$name=substr($rawName,3);if($nameBegin=='get'&&isset($this->$name)){return$this->$name;}else if($nameBegin=='set'){$this->$name=isset($arguments[0])?$arguments[0]:NULL;return$this;}else{throw new Exception('['.__CLASS__."] No property with name '$name' defined.");}}public function __set($name,$value){$this->$name=$value;}public function __get($name){return(isset($this->$name))?$this->$name:null;}}
class MvcCoreExt_LangRouter extends MvcCore_Router{const LANG_URL_PARAM='lang';const LANG_SWITCH_URL_PARAM='switch_lang';/** @var string|array */public$Pattern='';/** @var string|array */public$Reverse='';/** @var string */public$DefaultLang='en';/** @var string */public$Lang='';/** @var int */public$SessionExpirationSeconds=3600;/** @var MvcCore_Session|stdClass */protected$session=NULL;/** @var string */protected$sessionLang='';/** @var string */protected$requestLang='';/** @var string */protected$switchUriParamLang='';/** @var string */protected$requestLangNotAllowed='';/** @var bool */protected$stricModeBySession=FALSE;/** @var bool */protected$keepDefaultLangPath=FALSE;/** @var boo */protected$allowNonLocalizedRoutes=TRUE;/** @var bool */protected$firstRequestStrictlyByUserAgent=FALSE;/** @var array */protected$allowedLangs=array();/** @var string */public function SetAllowedLangs(){$this->allowedLangs=array();call_user_func_array(array($this,'AddAllowedLangs'),func_get_args());return$this;}/** @var string */public function AddAllowedLangs(){$args=func_get_args();if(count($args)===1&&gettype($args[0])=='array'){$langs=$args[0];}else{$langs=$args;}$this->allowedLangs=array_merge($this->allowedLangs,$langs);return$this;}public function SetDefaultLang($defaultLang){$this->DefaultLang=$defaultLang;return$this;}public function SetLang($lang){$this->Lang=$lang;return$this;}public function SetSessionExpirationSeconds($sessionExpirationSeconds=3600){$this->SessionExpirationSeconds=$sessionExpirationSeconds;return$this;}public function SetStricModeBySession($stricModeBySession=TRUE){$this->stricModeBySession=$stricModeBySession;return$this;}public function SetKeepDefaultLangPath($keepDefaultLangPath=TRUE){$this->keepDefaultLangPath=$keepDefaultLangPath;return$this;}public function SetFirstRequestStrictlyByUserAgent($firstRequestStrictlyByUserAgent=TRUE){$this->firstRequestStrictlyByUserAgent=$firstRequestStrictlyByUserAgent;return$this;}public function SetAllowNonLocalizedRoutes($allowNonLocalizedRoutes=TRUE){$this->allowNonLocalizedRoutes=$allowNonLocalizedRoutes;return$this;}public function AddRoute($routeCfgOrRoute,$prepend=FALSE){if($routeCfgOrRoute instanceof MvcCore_Route){$instance=&$routeCfgOrRoute;}else if(isset($routeCfgOrRoute['pattern'])&&gettype($routeCfgOrRoute['pattern'])=='array'){$instance=MvcCoreExt_LangRouter_Route::GetInstance($routeCfgOrRoute);}else{$instance=MvcCore_Route::GetInstance($routeCfgOrRoute);}if($prepend){$this->routes=array_merge(array($instance->Name=>$instance),$this->routes);}else{$this->routes[$instance->Name]=&$instance;}$this->urlRoutes[$instance->Name]=&$instance;$this->urlRoutes[$instance->Controller.':'.$instance->Action]=&$instance;return$this;}protected function routeByRewriteRoutes(){$requestPath=$this->request->Path;foreach($this->routes as&$route){$routePattern=$this->getRouteLocalizedRecord($route,'Pattern');preg_match_all($routePattern,$requestPath,$patternMatches);if(count($patternMatches)>0&&count($patternMatches[0])>0){$this->currentRoute=$route;$controllerName=isset($route->Controller)?$route->Controller:'';$routeParams=array('controller'=>MvcCore_Tool::GetDashedFromPascalCase(str_replace(array('_','\\'),'/',$controllerName)),'action'=>MvcCore_Tool::GetDashedFromPascalCase(isset($route->Action)?$route->Action:''),);$routeReverse=$this->getRouteLocalizedRecord($route,'Reverse');preg_match_all("#{%([a-zA-Z0-9]*)}#",$routeReverse,$reverseMatches);if(isset($reverseMatches[1])&&$reverseMatches[1]){$reverseMatchesNames=$reverseMatches[1];array_shift($patternMatches);foreach($reverseMatchesNames as$key=>$reverseKey){if(isset($patternMatches[$key])&&count($patternMatches[$key])){if(!isset($route->Params[$reverseKey]))$route->Params[$reverseKey]=NULL;$routeParams[$reverseKey]=$patternMatches[$key][0];}else{break;}}}$routeDefaultParams=isset($route->Params)?$route->Params:array();$this->request->Params=array_merge($routeDefaultParams,$routeParams,$this->request->Params);break;}}}protected function getRouteLocalizedRecord(MvcCore_Route&$route,$routeRecordKey=''){if($route instanceof MvcCoreExt_LangRouter_Route&&gettype($route->$routeRecordKey)=='array'){$routeRecordKey=$route->$routeRecordKey;if(isset($routeRecordKey[$this->Lang])){return$routeRecordKey[$this->Lang];}else if(isset($routeRecordKey[$this->DefaultLang])){return$routeRecordKey[$this->DefaultLang];}return reset($routeRecordKey);}return$route->$routeRecordKey;}public static function StaticInit(){MvcCore::AddPreRouteHandler(function(MvcCore_Request&$request,MvcCore_Response&$response){MvcCore::SessionStart();static::GetInstance()->processLangVersion($request);});}protected function urlByRoute($controllerActionOrRouteName,$params){$route=$this->urlRoutes[$controllerActionOrRouteName];$allParams=array_merge(is_array($route->Params)?$route->Params:array(),$params);$lang='';if(isset($allParams[static::LANG_URL_PARAM])){$lang=$allParams[static::LANG_URL_PARAM];unset($allParams[static::LANG_URL_PARAM]);}$result=$this->getRouteLocalizedRecord($route,'Reverse');$result=rtrim($result,'?&');foreach($allParams as$key=>$value){$paramKeyReplacement="{%$key}";if(mb_strpos($result,$paramKeyReplacement)===FALSE){$glue=(mb_strpos($result,'?')===FALSE)?'?':'&';$result.=$glue.http_build_query(array($key=>$value));}else{$result=str_replace($paramKeyReplacement,$value,$result);}}if($lang){$result='/'.$lang.$result;}else if($route instanceof MvcCoreExt_LangRouter_Route){$result='/'.$this->Lang.$result;}if(!$this->keepDefaultLangPath){$resultPath=$result;$questionMarkPos=mb_strpos($resultPath,'?');$anyQueryString=$questionMarkPos!==FALSE;if($anyQueryString)$resultPath=mb_substr($resultPath,0,$questionMarkPos);if(trim($resultPath,'/')==$this->DefaultLang){$result='/'.($anyQueryString?mb_substr($result,$questionMarkPos):'');}}return$this->request->BasePath.$result;}protected function processLangVersion(MvcCore_Request&$request){$this->prepareProcessing($request);if($this->stricModeBySession){if($this->sessionLang){if($this->switchUriParamLang){$this->setUpDetectedLangAndRedirectIfNecessary($this->switchUriParamLang);}else{$this->setUpDetectedLangAndRedirectIfNecessary($this->sessionLang);}}else{if($this->firstRequestStrictlyByUserAgent){$userAgentLang=$this->getDetectedLangByUserAgent();if($userAgentLang){$this->setUpDetectedLangAndRedirectIfNecessary($userAgentLang);}else{$this->setUpDetectedLangAndRedirectIfNecessary($this->DefaultLang);}}else{$this->setUpDetectedLangAndRedirectIfNecessary($this->requestLang);}}}else{if($this->sessionLang){if($this->requestLangNotAllowed)$this->requestLang=$this->sessionLang;$this->setUpDetectedLangAndRedirectIfNecessary($this->requestLang);}else{if($this->firstRequestStrictlyByUserAgent){$userAgentLang=$this->getDetectedLangByUserAgent();if($userAgentLang){$this->setUpDetectedLangAndRedirectIfNecessary($userAgentLang);}else{$this->setUpDetectedLangAndRedirectIfNecessary($this->requestLang);}}else{$this->setUpDetectedLangAndRedirectIfNecessary($this->requestLang);}}}}protected function setUpDetectedLangAndRedirectIfNecessary($detectedLang){$this->Lang=$detectedLang;$this->session->{static::LANG_URL_PARAM}=$detectedLang;$this->request->Lang=$detectedLang;$this->request->Params[static::LANG_URL_PARAM]=$detectedLang;if($detectedLang!==$this->requestLang){$this->redirectToDifferentLangVersion($detectedLang);}else if($this->requestLangNotAllowed&&$this->requestLangNotAllowed!==$this->requestLang){if(!$this->allowNonLocalizedRoutes){$this->redirectToDifferentLangVersion($this->DefaultLang);}}else if(!$this->keepDefaultLangPath&&rtrim($this->request->OriginalPath,'/')=='/'.$this->DefaultLang){$this->redirectToDifferentLangVersion($this->DefaultLang);}}/** @var void */protected function prepareProcessing(MvcCore_Request&$request){$this->request=&$request;$this->request->OriginalPath=$this->request->Path;$this->setUpAllowedLangs();if(isset($_GET[static::LANG_SWITCH_URL_PARAM])){$switchUriParamLang=strtolower($_GET[static::LANG_SWITCH_URL_PARAM]);if(isset($this->allowedLangs[$switchUriParamLang])){$this->switchUriParamLang=$switchUriParamLang;}}$this->setUpRequestLangFromUrl();static::setUpSession();if(isset($this->session->{static::LANG_URL_PARAM})){$this->sessionLang=$this->session->{static::LANG_URL_PARAM};}}protected function redirectToDifferentLangVersion($targetLang){$targetPath='/'.$targetLang.$this->request->Path;if(rtrim($targetPath,'/')=='/'.$this->DefaultLang){if(!$this->keepDefaultLangPath){$targetPath='/';}}if(isset($_GET[static::LANG_SWITCH_URL_PARAM])){unset($_GET[static::LANG_SWITCH_URL_PARAM]);$query=count($_GET)>0?'?'.http_build_query($_GET):'';}else{$query=($this->request->Query?'?'.$this->request->Query:'');}$newUrl=$this->request->DomainUrl.$this->request->BasePath.$targetPath.$query;MvcCore_Controller::Redirect($newUrl);}protected function setUpRequestLangFromUrl(){$requestPath=$this->request->Path;$secondSlashPos=mb_strpos($requestPath,'/',1);if($secondSlashPos===FALSE){$firstPathElm=$requestPath!=='/'?mb_substr($requestPath,1):'';}else{$firstPathElm=mb_substr($requestPath,1,$secondSlashPos-1);}$rawLang=preg_replace("#[^a-z]#",'',strtolower($firstPathElm));if(isset($this->allowedLangs[$rawLang])){$this->requestLang=$rawLang;$this->request->Path=$secondSlashPos===FALSE?'/':mb_substr($this->request->Path,$secondSlashPos);}else{$this->requestLang=$this->DefaultLang;if(mb_strlen($firstPathElm)>0){$this->requestLangNotAllowed=$firstPathElm;if(!$this->allowNonLocalizedRoutes){$this->request->Path=$secondSlashPos===FALSE?'/':mb_substr($this->request->Path,$secondSlashPos);}}}}protected function setUpAllowedLangs(){$allowedLangs=array();foreach($this->allowedLangs as$lang){$allowedLangs[$lang]=1;}$allowedLangs[$this->DefaultLang]=1;$this->allowedLangs=$allowedLangs;}protected function setUpSession(){if(is_null($this->session)){$this->session=MvcCore_Session::GetNamespace(__CLASS__);$this->session->SetExpirationSeconds($this->SessionExpirationSeconds);}}/** @var string */protected function getDetectedLangByUserAgent(){$result='';if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])){$acceptLangs=$this->parseUserAgentLangList($_SERVER['HTTP_ACCEPT_LANGUAGE']);foreach($acceptLangs as$acceptLangsItem){$break=FALSE;foreach($acceptLangsItem as$acceptLangRec){$acceptLang=substr($acceptLangRec,0,2);if(isset($this->allowedLangs[$acceptLang])){$result=$acceptLang;$break=TRUE;break;}}if($break)break;}}return$result;}protected function parseUserAgentLangList($languagesList){$languages=array();$languageRanges=explode(',',trim($languagesList));foreach($languageRanges as$languageRange){$regExpResult=preg_match("/(\*|[a-zA-Z0-9]{1,8}(?:-[a-zA-Z0-9]{1,8})*)(?:\s*;\s*q\s*=\s*(0(?:\.\d{0,3})|1(?:\.0{0,3})))?/",trim($languageRange),$match);if($regExpResult){if(!isset($match[2])){$match[2]='1.0';}else{$match[2]=(string)floatval($match[2]);}if(!isset($languages[$match[2]])){$languages[$match[2]]=array();}$languages[$match[2]][]=strtolower($match[1]);}}krsort($languages);return$languages;}}MvcCoreExt_LangRouter::StaticInit();
class MvcCore_View{/** @var string */const DOCTYPE_HTML4='HTML4';/** @var string */const DOCTYPE_XHTML='XHTML';/** @var string */const DOCTYPE_HTML5='HTML5';/** @var string */const EXTENSION='.phtml';/** @var string */public static$Doctype=self::DOCTYPE_HTML5;/** @var string */public static$ScriptsDir='Scripts';/** @var string */public static$HelpersDir='Helpers';/** @var string */public static$LayoutsDir='Layouts';/** @var array */public static$HelpersClassBases=array();/** @var MvcCore_Controller|mixed */public$Controller;/** @var string */private$_content='';/** @var array */private$_renderedFullPaths=array();/** @var string */protected static$originalyDeclaredProperties=array('Controller'=>1,'_content'=>1,'_renderedFullPaths'=>1,);/** @var array */private static$_helpers=array();public static function StaticInit(){$app=MvcCore::GetInstance();$baseViewHelperSpaceItems=array($app->GetAppDir(),$app->GetViewsDir(),static::$HelpersDir);static::$HelpersClassBases=array(implode('\\',$baseViewHelperSpaceItems).'\\',implode('_',$baseViewHelperSpaceItems).'_',);}public static function AddHelpersClassBases(){$args=func_get_args();foreach($args as$arg){if(strpos($arg,'\\')!==FALSE){$arg=rtrim($arg,'\\').'\\';}else{$arg=rtrim($arg,'_').'_';}static::$HelpersClassBases[]=$arg;}}public static function GetViewScriptFullPath($typePath='',$corectedRelativePath=''){$app=MvcCore::GetInstance();return implode('/',array($app->GetRequest()->AppRoot,$app->GetAppDir(),$app->GetViewsDir(),$typePath,$corectedRelativePath.MvcCore_View::EXTENSION));}public function __construct(MvcCore_Controller&$controller){$this->Controller=$controller;}public function SetUp(&$paramsInstance){$params=get_object_vars($paramsInstance);foreach($params as$key=>$value){if(isset(static::$originalyDeclaredProperties[$key]))continue;$this->$key=$value;}}public function GetContent(){return$this->_content;}public function GetController(){return$this->Controller;}public function RenderScript($relativePath=''){return$this->Render(static::$ScriptsDir,$relativePath);}public function RenderLayout($relativePath=''){return$this->Render(static::$LayoutsDir,$relativePath);}public function RenderLayoutAndContent($relativePath='',$content=''){$this->_content=$content;return$this->Render(static::$LayoutsDir,$relativePath);}public function Render($typePath='',$relativePath=''){if(!$typePath)$typePath=self::$ScriptsDir;$result='';$relativePath=$this->_correctRelativePath($this->Controller->GetRequest()->AppRoot,$typePath,$relativePath);$viewScriptFullPath=static::GetViewScriptFullPath($typePath,$relativePath);if(!Packager_Php_Wrapper::FileExists($viewScriptFullPath)){throw new Exception('['.__CLASS__."] Template not found in path: '$viewScriptFullPath'.");}$this->_renderedFullPaths[]=$viewScriptFullPath;ob_start();Packager_Php_Wrapper::IncludeStandard(($viewScriptFullPath),$this);$result=ob_get_clean();array_pop($this->_renderedFullPaths);return$result;}public function Evaluate($content=''){ob_start();try{eval(' ?'.'>'.$content.'<'.'?php ');}catch(Exception$e){throw$e;}return ob_get_clean();}public function Url($controllerActionOrRouteName='Default:Default',$params=array()){return MvcCore_Router::GetInstance()->Url($controllerActionOrRouteName,$params);}public function AssetUrl($path=''){return$this->Controller->AssetUrl($path);}public function __set($name,$value){if(isset(static::$originalyDeclaredProperties[$name])){throw new Exception('['.__CLASS__."] It's not possible to change property: '$name' originaly declared in class ".__CLASS__.'.');}$this->$name=$value;}public function __call($method,$arguments){$result='';foreach(static::$HelpersClassBases as$helperClassBase){$className=$helperClassBase.ucfirst($method);if(class_exists($className)){if(isset(self::$_helpers[$method])&&get_class(self::$_helpers[$method])==$className){$instance=self::$_helpers[$method];$result=call_user_func_array(array($instance,$method),$arguments);}else{$instance=new$className($this);$result=call_user_func_array(array($instance,$method),$arguments);}break;}}return$result;}private function _correctRelativePath($appRoot,$typePath,$relativePath){$result=str_replace('\\','/',$relativePath);if(substr($relativePath,0,2)=='./'){$app=MvcCore::GetInstance();$typedViewDirFullPath=implode('/',array($appRoot,$app->GetAppDir(),$app->GetViewsDir(),$typePath));$lastRenderedFullPath=$this->_renderedFullPaths[count($this->_renderedFullPaths)-1];$renderedRelPath=substr($lastRenderedFullPath,strlen($typedViewDirFullPath));$renderedRelPathLastSlashPos=strrpos($renderedRelPath,'/');if($renderedRelPathLastSlashPos!==FALSE){$result=substr($renderedRelPath,0,$renderedRelPathLastSlashPos+1).substr($relativePath,2);$result=ltrim($result,'/');}}return$result;}}MvcCore_View::StaticInit();
class MvcCore_Controller{/** @var MvcCore_Request */protected$request;/** @var MvcCore_Response */protected$response;/** @var string */protected$controller='';/** @var string */protected$action='';/** @var boolean */protected$ajax=FALSE;/** @var MvcCore_View */protected$view=NULL;/** @var string */protected$layout='layout';/** @var boolean */protected$viewEnabled=TRUE;/** @var string */protected static$staticPath='/static';/** @var string */protected static$tmpPath='/Var/Tmp';/** @var string */private static$_assetsMimeTypes=array('js'=>'text/javascript','css'=>'text/css','ico'=>'image/x-icon','gif'=>'image/gif','png'=>'image/png','jpg'=>'image/jpg','jpeg'=>'image/jpeg','bmp'=>'image/bmp','svg'=>'image/svg+xml','eot'=>'application/vnd.ms-fontobject','ttf'=>'font/truetype','otf'=>'font/opentype','woff'=>'application/x-font-woff',);public function __construct(MvcCore_Request&$request=NULL,MvcCore_Response&$response=NULL){$this->request=&$request;$this->response=&$response;$this->controller=$this->request->Params['controller'];$this->action=$this->request->Params['action'];if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])&&strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest'){$this->ajax=TRUE;$this->DisableView();}if(get_class($this)=='MvcCore_Controller'&&$this->action=='asset'){$this->DisableView();}}public function Init(){MvcCore::SessionStart();}public function PreDispatch(){if(!$this->ajax){$viewClass=MvcCore::GetInstance()->GetViewClass();$this->view=new$viewClass($this);}}public function GetParam($name="",$pregReplaceAllowedChars="a-zA-Z0-9_/\-\.\@"){return$this->request->GetParam($name,$pregReplaceAllowedChars);}public function&GetRequest(){return$this->request;}public function SetRequest(MvcCore_Request&$request){$this->request=$request;return$this;}public function&GetView(){return$this->view;}public function SetView(MvcCore_View&$view){$this->view=$view;return$this;}public function GetLayout(){return$this->layout;}public function SetLayout($layout=''){$this->layout=$layout;return$this;}public function DisableView(){$this->viewEnabled=FALSE;}public function AssetAction(){$ext='';$path=$this->GetParam('path');$path='/'.ltrim(str_replace('..','',$path),'/');if(strpos($path,self::$staticPath)!==0&&strpos($path,self::$tmpPath)!==0){throw new Exception("[".__CLASS__."] File path: '$path' is not allowed.",500);}$path=$this->request->AppRoot.$path;if(!Packager_Php_Wrapper::FileExists($path)){throw new Exception("[".__CLASS__."] File not found: '$path'.",404);}$lastDotPos=strrpos($path,'.');if($lastDotPos!==FALSE){$ext=substr($path,$lastDotPos+1);}if(isset(self::$_assetsMimeTypes[$ext])){header('Content-Type: '.self::$_assetsMimeTypes[$ext]);}Packager_Php_Wrapper::Readfile($path);$this->Terminate();}public function Render($controllerName='',$actionName=''){if($this->viewEnabled){if(!$controllerName)$controllerName=$this->request->params['controller'];if(!$actionName)$actionName=$this->request->params['action'];$controllerPath=str_replace(array('_','\\'),'/',$controllerName);$viewScriptPath=implode('/',array($controllerPath,$actionName));$actionResult=$this->view->RenderScript($viewScriptPath);$viewClass=MvcCore::GetInstance()->GetViewClass();/** @var $layout MvcCore_View */$layout=new$viewClass($this);$layout->SetUp($this->view);$outputResult=$layout->RenderLayoutAndContent($this->layout,$actionResult);unset($layout,$this->view);$this->HtmlResponse($outputResult);$this->DisableView();}}public function HtmlResponse($output=""){$contentTypeHeaderValue=strpos(MvcCore_View::$Doctype,MvcCore_View::DOCTYPE_XHTML)!==FALSE?'application/xhtml+xml':'text/html';$this->response->SetHeader('Content-Type',$contentTypeHeaderValue.'; charset=utf-8')->SetBody($output);}public function JsonResponse($data=array()){$output=MvcCore_Tool::EncodeJson($data);$this->response->SetHeader('Content-Type','text/javascript; charset=utf-8')->SetHeader('Content-Length',strlen($output))->SetBody($output);}public function Url($controllerActionOrRouteName='Default:Default',$params=array()){return MvcCore_Router::GetInstance()->Url($controllerActionOrRouteName,$params);}public function AssetUrl($path=''){return MvcCore::GetInstance()->Url('Controller:Asset',array('path'=>$path));}public function RenderError($exceptionMessage=''){if(MvcCore::GetInstance()->IsErrorDispatched())return;throw new ErrorException($exceptionMessage?$exceptionMessage:"Server error: \n'".$this->request->FullUrl."'",500);}public function RenderNotFound(){if(MvcCore::GetInstance()->IsNotFoundDispatched())return;throw new ErrorException("Page not found: \n'".$this->request->FullUrl."'",404);}public function Terminate(){MvcCore::GetInstance()->Terminate();}public static function Redirect($location='',$code=MvcCore_Response::SEE_OTHER){MvcCore::GetInstance()->GetResponse()->SetCode($code)->SetHeader('Location',$location);MvcCore::GetInstance()->Terminate();}}
class App_Models_Base extends MvcCore_Model{public static function GetAllDbTables(){$dbName=self::GetCfg()->dbname;$select=self::GetDb()->prepare("
			SELECT 
				TABLE_NAME as TableName
			FROM 
				information_schema.TABLES 
			WHERE 
				TABLE_SCHEMA = :dbName
		");$select->execute(array('dbName'=>$dbName));$rawResult=$select->fetchAll(PDO::FETCH_ASSOC);$result=array();foreach($rawResult as$item)$result[]=$item['TableName'];return$result;}}
class App_Controllers_Base extends MvcCore_Controller{/** @var App_Models_Translator */protected static$translator;/** @var string */protected$lang='';public function Init(){parent::Init();$this->lang=$this->request->Lang;self::$translator=App_Models_Translator::GetInstance();}}
class App_Models_XmlModel extends App_Models_Base{protected static$dataPath='/Var';protected static$xmlNameSpace=null;protected static$schemes=array();protected$xml;protected$autoInit=FALSE;public static function GetDataPath(){return static::$dataPath;}public static function GetByPath($path=''){$path=static::sanitizePath($path);$xmlPath=(mb_substr($path,mb_strlen($path)-1,1)==='/')?$path.'index':$path;$xmlFullPath=MvcCore::GetInstance()->GetRequest()->AppRoot.static::$dataPath;$fileFullPath=str_replace('\\','/',$xmlFullPath.$xmlPath.'.xml');if(!Packager_Php_Wrapper::FileExists($fileFullPath)){return FALSE;}else{return static::xmlLoadAndSetupModel($fileFullPath,$path);};}protected static function xmlLoadAndSetupModel($fileFullPath,$path){$lastSlashPos=mb_strrpos($fileFullPath,'/');$dirFullPath=mb_substr($fileFullPath,0,$lastSlashPos===FALSE?mb_strlen($fileFullPath):$lastSlashPos+1);$content=Packager_Php_Wrapper::FileGetContents($fileFullPath);static::loadXmlNamespaceAndSchema($content,$fileFullPath);static::processReplacementsBeforeParsing($content);$xml=static::xmlLoadXmlFromString($content,$fileFullPath);$nameSpaces=$xml->getNamespaces();$counter=0;foreach($nameSpaces as$nameSpace=>$schemePath){if($counter===0)static::$xmlNameSpace=$nameSpace;$xml->registerXPathNamespace($nameSpace,realpath($dirFullPath.$schemePath));$counter++;}$result=new static();$result->xmlSetUp($xml);$result->Path=$path;return$result;}protected static function loadXmlNamespaceAndSchema(&$xmlStr,&$fileFullPath){preg_match("# xmlns\:([a-z0-9]*)=\"([^\"]*)\"#",$xmlStr,$matches);if(!isset($matches[1])||!isset($matches[2])){throw new Exception("[".get_called_class()."] No XML namespace and schema defined in file: '$fileFullPath'. "."Define namespace and scheme file in root node: "."'<schemeName:rootNodeName xmlns:schemeName=\"../Path/To/Scheme.xsd\">'");}$ns=$matches[1];static::$xmlNameSpace=$ns;$xmlScheme=NULL;if(!isset(static::$schemes[$ns])){$scheme=(object)array('columnTypes'=>array(),'replacements'=>array(),);$schemeFileFullPath=MvcCore::GetInstance()->GetRequest()->AppRoot.self::$dataPath.$matches[2];$xmlScheme=static::loadXmlScheme($schemeFileFullPath);$rootNodeDescriptorBase=$xmlScheme->children('xs',TRUE);$rootNodeDescriptorType=$rootNodeDescriptorBase->children('xs',TRUE);$rootNodeDescriptorSequence=$rootNodeDescriptorType->children('xs',TRUE);foreach($rootNodeDescriptorSequence->children('xs',TRUE)as$dataNode){$attrs=$dataNode->attributes();$nodeName=trim((string)$attrs['name']);if(!isset($attrs['type'])){}else{$nodeType=substr(trim((string)$attrs['type']),3);$scheme->columnTypes[$nodeName]=$nodeType;if($nodeType=='html'){$scheme->replacements[]=array(array("<$ns:$nodeName>","</$ns:$nodeName>",),array("<$ns:$nodeName><![CDATA[","]]></$ns:$nodeName>",),);}}}static::$schemes[$ns]=$scheme;}}protected static function loadXmlScheme($schemeFileFullPath){$schemeFileRawContent=Packager_Php_Wrapper::FileGetContents($schemeFileFullPath);return static::xmlLoadXmlFromString($schemeFileRawContent,$schemeFileFullPath);}protected static function processReplacementsBeforeParsing(&$content){$scheme=static::$schemes[static::$xmlNameSpace];foreach($scheme->replacements as$replacementItem){$content=str_replace($replacementItem[0],$replacementItem[1],$content);}}protected static function xmlLoadXmlFromString(&$xmlStr,&$fileFullPath){libxml_use_internal_errors(true);$xml=simplexml_load_string($xmlStr);$xmlPossibleErrors=libxml_get_errors();if(count($xmlPossibleErrors)){$msgs=array();$clsName=get_called_class();foreach($xmlPossibleErrors as$e){$msg=$e->message;$line=$e->line;$column=$e->column;$msgs[]="[$clsName] $msg (file: $fileFullPath, line: $line, column: $column)";}throw new Exception(implode('<br />',$msgs));}return$xml;}protected static function sanitizePath($path){return preg_replace("#[^a-zA-Z0-9_\-/\.]#",'',str_replace('..','',$path));}protected function xmlSetUp($xml){$this->xml=$xml;$columnTypes=static::$schemes[static::$xmlNameSpace]->columnTypes;foreach($xml->children(static::$xmlNameSpace,TRUE)as$dataNode){$nodeName=$dataNode->getName();$rawNodeValue=trim((string)$dataNode);$propertyName=MvcCore_Tool::GetPascalCaseFromDashed($nodeName);$dataType='string';if(isset($columnTypes[$nodeName])){$dataType=$columnTypes[$nodeName];}$this->setUpXmlValueByXsd($rawNodeValue,$propertyName,$dataType);}}protected function setUpXmlValueByXsd($rawNodeValue,$propertyName,$dataType){if($dataType=='integer'){$this->$propertyName=intval($rawNodeValue);}else if($dataType=='float'){$this->$propertyName=floatval($rawNodeValue);}else if($dataType=='boolean'){$this->$propertyName=boolval($rawNodeValue);}else if($dataType=='html'){$this->$propertyName=str_replace(array('%basePath'),array(MvcCore::GetInstance()->GetRequest()->BasePath,),$rawNodeValue);}else{$this->$propertyName=(string)$rawNodeValue;}}protected function xmlGetNode($name){$nodes=$this->xml->xpath(static::$xmlNameSpace.':'.$name);if(count($nodes))return(string)$nodes[0];return'';}protected function xmlGetNodes($nodeNamesPath){$namespacedPath=ltrim(str_replace('/','/'.static::$xmlNameSpace.':','/'.trim($nodeNamesPath,'/')),'/');$nodes=$this->xml->xpath($namespacedPath);if(count($nodes))return$nodes;return array();}public function __toString(){return$this->xml->asXML();}public function __sleep(){$this->xml=$this->xml->asXML();return array('xml');}}
class App_Models_Translator extends App_Models_Base{protected$stores=array();protected$autoInit=FALSE;protected static$dataDir='/Var/Translations';public function Translate($key='',$lang=''){$result=$key;if(!$lang)$lang=App_Controllers_Base::$Lang;$store=&$this->_getStore($lang);if(isset($store[$key])){$result=$store[$key];}return$result;}private function&_getStore($lang){if(!isset($this->stores[$lang])){$store=array();$fileFullPath=MvcCore::GetInstance()->GetRequest()->AppRoot.self::$dataDir.'/'.$lang.'.csv';if(!Packager_Php_Wrapper::FileExists($fileFullPath))throw new Exception("[".__CLASS__."] No translations defined. (path: '$fileFullPath')");$rawCsv=Packager_Php_Wrapper::FileGetContents($fileFullPath);$rawCsvRows=explode("\n",str_replace("\r\n","\n",$rawCsv));foreach($rawCsvRows as$rowKey=>$rawCsvRow){list($key,$value)=str_getcsv($rawCsvRow,";",'');if(isset($store[$key])){$rowKey+=1;throw new Exception("[".__CLASS__."] Translation key already defined. (path: '$fileFullPath', row: '$rowKey', key: '$key')");}$store[$key]=str_replace('\\n',"\n",$value);}$this->stores[$lang]=$store;}return$this->stores[$lang];}}
class App_Controllers_Front extends App_Controllers_Base{/** @var App_Models_Document */protected$document;public function PreDispatch(){parent::PreDispatch();if($this->viewEnabled){$this->view->Lang=$this->lang;$this->_preDispatchSetUpBundles();$this->_preDispatchSetUpSeoProperties();}}private function _preDispatchSetUpBundles(){MvcCoreExt_ViewHelpers_Assets::SetGlobalOptions((array)MvcCore_Config::GetSystem()->assets);$static=self::$staticPath;$this->view->Css('fixedHead')->AppendRendered($static.'/css/front/fonts.css')->AppendRendered($static.'/css/front/all.css');$this->view->Js('fixedHead')->Append($static.'/js/libs/class.min.js')->Append($static.'/js/libs/ajax.min.js')->Append($static.'/js/libs/Module.js');$this->view->Js('varFoot')->Append($static.'/js/Front.js');}private function _preDispatchSetUpSeoProperties(){$this->view->OgSiteName='MvcCore';$this->view->OgUrl=$this->request->RequestUrl;if($this->document&&$this->document->Id){$this->document->OgImage=$this->request->DomainUrl.$this->document->OgImage;}}}
class App_Controllers_Admin extends App_Controllers_Base{public function PreDispatch(){parent::PreDispatch();if($this->viewEnabled){$this->view->Lang=$this->lang;$this->_preDispatchSetUpBundles();}}private function _preDispatchSetUpBundles(){MvcCoreExt_ViewHelpers_Assets::SetGlobalOptions((array)MvcCore_Config::GetSystem()->assets);$static=self::$staticPath;$this->view->Js('fixedHead')->Append($static.'/js/libs/class.min.js')->Append($static.'/js/libs/ajax.min.js')->Append($static.'/js/libs/Module.js');$this->view->Js('varFoot')->Append($static.'/js/Admin.js');}}
class App_Models_Document extends App_Models_XmlModel{protected static$dataPath='/Var/Documents';public static function GetByPath($path='',$firstMatchOnly=FALSE){$result=array();$xmlFullPath=MvcCore::GetInstance()->GetRequest()->AppRoot.static::$dataPath;$path=rtrim($path);$correctedPath=Packager_Php_Wrapper::IsDir($xmlFullPath.'/'.ltrim($path,'/'))?rtrim($path,'/').'/index':$path;$lastSlashPos=strrpos($correctedPath,'/');if($lastSlashPos===FALSE){$pathToMatch="([0-9]*)\-".$correctedPath;}else{$xmlFullPath.=substr($correctedPath,0,$lastSlashPos).'/';$pathToMatch="([0-9]*)\-".substr($correctedPath,$lastSlashPos+1);}if(!Packager_Php_Wrapper::FileExists($xmlFullPath)&&!Packager_Php_Wrapper::IsDir($xmlFullPath))return array();$di=new Packager_Php_Wrapper_DirectoryIterator($xmlFullPath);foreach($di as$item){if($item->isDir())continue;if($item->getExtension()!='xml')continue;$fileName=$item->getFilename();$fileNameWithoutExt=preg_replace("#(.*)\.xml$#","$1",$fileName);preg_match("#^$pathToMatch$#",$fileNameWithoutExt,$matches);if($matches){$fileFullPath=str_replace('\\','/',rtrim($xmlFullPath,'/').'/'.$fileName);$result[]=static::xmlLoadAndSetupModel($fileFullPath,'/'.$correctedPath);if($firstMatchOnly)break;}}return$result;}public function GetUrl(){return$this->Path;}}
class App_Controllers_System extends App_Controllers_Base{public function JsErrorsLogAction(){$this->DisableView();if(MvcCore_Config::IsProduction())return;$keys=array('message'=>1,'uri'=>1,'file'=>1,'line'=>0,'column'=>0,'callstack'=>1,'browser'=>1,'platform'=>0,);$data=array();foreach($keys as$key=>$hex){$param=$this->GetParam($key);if($hex)$param=self::_hexToStr($param);$param=preg_replace("#[^a-zA-Z0-9/\&\(\)\[\]\.\'\"%\#\$]#","",$param);$data[$key]=$param;}$msg=json_encode($data);MvcCore_Debug::Log($msg,MvcCore_Debug::JAVASCRIPT);}private static function _hexToStr($hex){$string='';for($i=0;$i<strlen($hex)-1;$i+=2){$string.=chr(hexdec($hex[$i].$hex[$i+1]));}return$string;}}
class App_Controllers_Admin_Index extends App_Controllers_Admin{public function IndexAction(){$this->view->Title='Admin';x($this);}}
class App_Controllers_Front_Index extends App_Controllers_Front{public function Init(){parent::Init();$this->setUpDocument();}public function PreDispatch(){parent::PreDispatch();if($this->document){$this->view->Document=$this->document;$this->view->Title=$this->document->Title?$this->document->Title:$this->request->Params['message'];}}public function IndexAction(){}public function NotFoundAction(){$this->Render($this->controller,'error');}public function ErrorAction(){}protected function setUpDocument(){if($this->action!='error'&&$this->action!='not-found'){$path=$this->GetParam('path',"a-zA-Z0-9/_\-");$lastPathChar=mb_strlen($path)>0?mb_substr($path,mb_strlen($path)-1,1):'';if(strlen($path)>1&&$lastPathChar=='/'){self::Redirect($this->Url('self',array('path'=>rtrim($path,'/'))));}$documentPath='/'.$this->lang.$path;$matchedDocs=App_Models_Document::GetByPath($documentPath,TRUE);if(!$matchedDocs){throw new Exception("No matched document found in path: '$documentPath'.",404);}else{$this->document=$matchedDocs[0];}}else{$this->document=new App_Models_Document;}}}
$app=MvcCore::GetInstance();App_Bootstrap::Init();$app->Run();