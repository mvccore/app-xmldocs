<?php

namespace App\Controllers\Admin;

use App\Controllers;

class Index extends Controllers\Admin
{
	public function IndexAction () {
		$this->view->Title = 'Admin';

		// tady to dává to co je v session!
		x("admin ctrl");
		x($this->request->GetLang());
		x($this->request->GetLocale());

		//$this->router->SetLocalization('cs', 'CZ');
		//x($this->Url('Front\Sitemap:Index'));
    }
}
