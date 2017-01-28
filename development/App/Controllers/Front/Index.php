<?php

namespace App\Controllers\Front;

use App\Controllers;

class Index extends Controllers\Front
{
	public function Init () {
		parent::Init();
		$this->setUpDocument();
	}
	public function PreDispatch () {
		parent::PreDispatch();
		if ($this->document) {
			$this->view->Document = $this->document;
			$this->view->Title = $this->document->Title 
				? $this->document->Title : $this->request->Params['message'] ;
		}
	}
	public function IndexAction () {
    }
	public function NotFoundAction () {
		$this->Render($this->controller, 'error');
	}
	public function ErrorAction () {
	}
	protected function setUpDocument () {
		if ($this->action != 'error' && $this->action != 'not-found') {
			$path = $this->GetParam('path', "a-zA-Z0-9/_\-");
			$lastPathChar = mb_strlen($path) > 0 ? mb_substr($path, mb_strlen($path) - 1, 1) : '';
			if (strlen($path) > 1 && $lastPathChar == '/') {
				self::Redirect(
					$this->Url('self', array('path' => rtrim($path, '/')))
				);
			}
			$documentPath = '/' . $this->lang . $path;
			$matchedDocs = \App\Models\Document::GetByPath($documentPath, TRUE);
			if (!$matchedDocs) {
				throw new \Exception(
					"No matched document found in path: '$documentPath'.", 404
				);
			} else {
				$this->document = $matchedDocs[0];
			}
		} else {
			$this->document = new \App\Models\Document;
		}
	}
}