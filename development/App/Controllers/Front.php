<?php

namespace App\Controllers;

use App\Models;

class Front extends Base
{
	protected $layout = 'front';

	protected $renderNotFoundIfNoDocument = FALSE;

	public function PreDispatch () {
		parent::PreDispatch();
		if ($this->viewEnabled) {
			$this->view->lang = $this->lang;
			$this->view->mediaSiteVersion = $this->request->GetMediaSiteVersion();
			$horizontalNav = new \App\Controllers\Front\Controls\HorizontalNavigation($this);
			$this->AddChildController($horizontalNav)->view->horizontalNav = $horizontalNav;
			$this->_preDispatchSetUpBundles();
			$this->_preDispatchSetUpSeoProperties();
			if ($this->document) {
				$this->view->document = $this->document;	
				$this->view->title = $this->document->Title;
			}
			if (!$this->ajax && $this->request->GetMethod() == \MvcCore\Request::METHOD_GET && !$this->document) {
				if ($this->renderNotFoundIfNoDocument) {
					$this->view->document = new Models\Document();
					$this->RenderNotFound();
				}
			}
		}
	}

	private function _preDispatchSetUpBundles () {
		\MvcCore\Ext\Views\Helpers\Assets::SetGlobalOptions(
			(array) \MvcCore\Config::GetSystem()->assets
		);
		$static = self::$staticPath;
		$this->view->Css('fixedHead')
			->AppendRendered($static . '/css/front/fonts.css')
			->AppendRendered($static . '/css/front/all.css');
		$this->view->Js('fixedHead')
			->Append($static . '/js/libs/class.min.js')
			->Append($static . '/js/libs/ajax.min.js')
			->Append($static . '/js/libs/Module.js');
		$this->view->Js('varFoot')
			->Append($static . '/js/Front.js');
	}

	private function _preDispatchSetUpSeoProperties () {
		$this->view->ogSiteName = 'MvcCore';
		$this->view->ogUrl = $this->request->GetRequestUrl();
		if ($this->document && $this->document->Id) {
			$this->view->ogImage = $this->request->GetDomainUrl() . $this->document->OgImage;
		}
	}
}
