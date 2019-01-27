<?php
namespace Controllers;
use Core\Controller;
use Models\User;

class HomeController extends Controller {
	private $instance;

	public function __construct()
	{
		$this->instance = new User();
		if(!$this->instance->verifyUser()){
			header("Location: ".URL."login");
			exit;
		}
	}

	public function index() 
	{
		$data = array();
		$data['groups'] = $this->instance->getGroup();

		$this->loadTemplate("home", $data);
	}

	public function getMsg(){
		$data = array();
		if(!empty($_POST['id_group'])){
			$data = $this->instance->getMsgsById($_POST['id_group']);
		}
		echo json_encode($data);
	}
	
	
}

