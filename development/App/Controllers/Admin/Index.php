<?php

namespace App\Controllers\Admin;

use App\Controllers;

class Index extends Controllers\Admin
{
	public function IndexAction () {
		$this->view->Title = 'Admin';
		x($this);
    }
}