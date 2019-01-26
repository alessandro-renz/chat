<?php
namespace Models;
use Core\Model;

class User extends Model{
	private $hash;
	private $id;

	public function getUser($nick, $pass)
	{
		$sql = $this->db->prepare("SELECT * FROM users WHERE nickname=:nick OR email=:nick");
		$sql->bindValue(":nick", $nick);
		$sql->execute();

		if($sql->rowCount() > 0){
			$user = $sql->fetch();
			if(password_verify($pass, $user['pass']) === true){
				$this->hash = md5(time().rand(0,999));
				$this->insertHash($user['id'] ,$this->hash);
				$_SESSION['hash_user'] = $this->hash;
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}

	public function insertHash($id, $hash)
	{
		$sql = $this->db->prepare("UPDATE users SET hash=:hash WHERE id=:id");
		$sql->bindValue(":hash", $this->hash);
		$sql->bindValue(":id", $id);
		$sql->execute();
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
				$this->id = $user['id']; 
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
}