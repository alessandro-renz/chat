<?php
namespace Controllers;
use Core\Controller;


class LoginController extends Controller {
	public function index() 
	{
		$data = array();
		if(!isset($_SESSION['hash_user'])){
			header("Location: ".URL."login");
			exit;
		}else{
			$this->loadTemplate("login", $data);
		}
		
	}
	
	
}

