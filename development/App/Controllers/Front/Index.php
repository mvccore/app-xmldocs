<?php

namespace App\Controllers\Front;

use App\Controllers,
	App\Models;

class Index extends Controllers\Front
{
	protected $renderNotFoundIfNoDocument = TRUE;

	public function Init () {
		parent::Init();
		$documentPath = $this->request->HasParam('path')
			? '/' . ltrim($this->request->GetParam('path', '.*'), '/')
			: $this->request->GetPath();
		$documentPath = str_replace('..', '', preg_replace('#[^-a-zA-Z0-9/\.,]#', '', $documentPath));
		$indexStr = 'index.php';
		if (strrpos($documentPath, $indexStr) === strlen($documentPath) - strlen($indexStr)) {
			$documentPath = substr($documentPath, 0, strrpos($documentPath, $indexStr));
		}
		if ($documentPath === '/') $documentPath = '/index';
		$documentPath = '/' . $this->lang . $documentPath;
		$lastSlashPos = strrpos($documentPath, '/');
		if ($lastSlashPos !== FALSE)
			$documentPath = substr($documentPath, 0, $lastSlashPos) 
				. '/(\d+\-)' . substr($documentPath, $lastSlashPos + 1);
		$documents = Models\Document::GetByPathMatch($documentPath);
		if ($documents) $this->document = $documents[0];
	}
	public function PreDispatch () {
		parent::PreDispatch();
		if ($this->document) {
			$this->view->document = $this->document;	
			$this->view->title = $this->document->Title;
		}
		if (!$this->ajax && $this->request->GetMethod() == \MvcCore\Request::METHOD_GET && !$this->document) {
			if ($this->renderNotFoundIfNoDocument) {
				$this->view->Document = new Models\Document();
				$this->RenderNotFound();
			}
		}
	}
	public function IndexAction () {
    }
	public function NotFoundAction () {
		$this->ErrorAction();
	}
	public function ErrorAction () {
		$code = $this->response->GetCode();
		$message = $this->request->GetParam('message', '\\a-zA-Z0-9_;, /\-\@\:');
		$message = preg_replace('#`([^`]*)`#', '<code>$1</code>', $message);
		$message = str_replace("\n", '<br />', $message);
		$this->view->title = "Error $code";
		$this->view->message = $message;
		$this->Render('error');
	}
}
