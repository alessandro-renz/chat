<?php
namespace Controllers;
use Core\Controller;
use Models\User;

class HomeController extends Controller {
	public function __construct()
	{
		$u = new User();
		if(!$u->verifyUser()){
			header("Location: ".URL."login");
			exit;
		}
	}

	public function index() 
	{
		
		$this->loadTemplate("home", $data);
	}
	
	
}

