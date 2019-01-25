<?php
namespace Controllers;
use Core\Controller;


class RegisterController extends Controller {
	public function index() 
	{
		$data = array();
		$this->loadTemplate("register", $data);
	}
	
	
}

