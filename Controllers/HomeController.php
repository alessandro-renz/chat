<?php
namespace Controllers;
use Core\Controller;


class HomeController extends Controller {
	public function index() 
	{
		$data = array();
		if(!isset($_SESSION['hash_user'])){
			header("Location: ".URL."login");
			exit;
		}else{
			
			$this->loadTemplate("home", $data);
		}
		
	}
	
	
}

