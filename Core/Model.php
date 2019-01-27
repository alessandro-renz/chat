<?php 
namespace Core;

class Model {
	protected $db;
	protected $id_user;
	
	public function __construct()
	{
		global $db;
		$this->db = $db;
	}

	public function verifyUser()
	{
		if(isset($_SESSION['hash_user'])){
			$hash = $_SESSION['hash_user'];
			$sql = $this->db->prepare("SELECT * FROM users WHERE hash=:hash");
			$sql->bindValue(":hash", $hash);
			$sql->execute();

			if($sql->rowCount() > 0){
				$user = $sql->fetch();
				$this->id_user = $user['id']; 
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}

}
