<?php
namespace Controllers;
use Core\Controller;
use Models\User;

class LoginController extends Controller {
	public function index() 
	{
		$data = array();
		if(!isset($_SESSION['hash_user'])){
			
			$this->loadTemplate("login", $data);
			
		}	
	}
	public function check(){
		if(!empty($_POST['nick']) && !empty($_POST['password'])){
			$nick = addslashes($_POST['nick']);
			$pass = $_POST['password'];
			
			$u = new User;
			if($u->getUser($nick, $pass) === true){
				header("Location: ".URL);
			}
		}
	}
	
	
}

