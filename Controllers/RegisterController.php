<?php
namespace Controllers;
use Core\Controller;
use Models\User;

class RegisterController extends Controller {
	public function index() 
	{
		$data = array();
		$this->loadView("register", $data);
	}
	public function post(){
		if(!empty($_POST['nick']) && !empty($_POST['email']) && !empty($_POST['password'])){
			$nick = strtolower($_POST['nick']);
			$email = addslashes($_POST['email']);
			$pass = password_hash($_POST['password'], PASSWORD_BCRYPT);

			$u = new User();
			if($u->validateExp($nick) === true){
				if($u->insertNewUser($nick, $email, $pass) == "nick_error"){
					$data['msg'] = "Este nickname já existe!";
					$this->loadView("register", $data);
				}else if($u->insertNewUser($nick, $email, $pass) == "email_error"){
					$data['msg'] = "Este email já existe!";
					$this->loadView("register", $data);
				}
				$u->insertNewUser($nick, $email, $pass);	
				header("Location: ".URL."register/success");
			}else{
				$data['msg'] = "Não é permitido espaços ou caracteres especiais!";
				$this->loadView("register", $data);
			}
		}else{
			$data['msg'] = "Há campos em branco!";
			$this->loadView("register", $data);
		}
	}
	public function success(){
		$this->loadView("success", array());
	}
}

