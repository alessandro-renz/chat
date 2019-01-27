<?php
namespace Controllers;
use Core\Controller;
use Models\User;
use Models\Group;

class HomeController extends Controller {
	private $instance_user = new User;
	private $instance_group = new Group;

	public function __construct()
	{
		$this->instance_group = new Group();
		$this->instance_group = new User();
		if(!$this->instance_user->verifyUser()){
			header("Location: ".URL."login");
			exit;
		}
	}

	public function index() 
	{
		$data = array();
		$data['groups'] = $this->instance_group->getGroup();

		$this->loadTemplate("home", $data);
	}

	public function getMsg(){
		$data = array();
		if(!empty($_POST['id_group'])){
			$data = $this->instance_group->getMsgsById($_POST['id_group']);
		}
		echo json_encode($data);
	}
	
	
}

