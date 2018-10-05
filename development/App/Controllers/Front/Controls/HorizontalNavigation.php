<?php

namespace App\Controllers\Front\Controls;

use \App\Models;

class HorizontalNavigation extends \MvcCore\Controller
{
	// customize where to automaticly find template
	protected $viewScriptsPath = 'front/controls';

	public function PreDispatch() {
		parent::PreDispatch();
		$docsPath = '/' . $this->request->GetLang();
		$this->view->docs = Models\Document::GetByDirPath(
			$docsPath, FALSE, ['Sequence' => 'asc', 'Title' => 'asc']
		);
	}
}
