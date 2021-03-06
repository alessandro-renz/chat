<?php
namespace Controllers;
use Core\Controller;
use Models\User;
use Models\Group;

class HomeController extends Controller {
	private $instance_user;
	private	$instance_group;

	public function __construct()
	{
		$this->instance_user = new User;
		$this->instance_group = new Group;

		if(!$this->instance_user->verifyUser()){
			header("Location: ".URL."login");
			exit;
		}
	}

	public function index() 
	{
		$data = array();
		$data['groups'] = $this->instance_user->getGroup();

		$this->loadTemplate("home", $data);
	}

	public function getMsg(){
		$data = array();
		if(!empty($_POST['id'])){
			$data = $this->instance_group->getMsgsById($_POST['id']);
		}

		echo json_encode($data);
		
	}

	public function sair(){
		unset($_SESSION['hash_user']);
		header("Location: ".URL."login");
		exit;
	}
	
	
}

