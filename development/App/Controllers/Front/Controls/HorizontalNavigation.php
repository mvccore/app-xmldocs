<?php

namespace App\Controllers\Front\Controls;

use \App\Models;

class HorizontalNavigation extends \MvcCore\Controller
{
	// customize where to automaticly find template
	protected $viewScriptsPath = 'front/controls';

	public function PreDispatch() {
		parent::PreDispatch();
		$docsPath = '/' . $this->request->GetLang() . '/(\d+\-).*';
		$this->view->docs = Models\Document::GetByPathMatch($docsPath);
	}
}
