<?php

namespace App\Controllers\Front;

use App\Controllers;

class Index extends Controllers\Front
{
	protected $renderNotFoundIfNoDocument = TRUE;

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
