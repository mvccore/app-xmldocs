<?php

class App_Controllers_Admin_Index extends App_Controllers_Admin
{
	public function IndexAction () {
		$this->view->Title = 'Admin';
		x($this);
    }
}