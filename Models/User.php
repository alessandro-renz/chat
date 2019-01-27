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
				$this->hash = md5(time().rand(0,999).$user['id']);
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

	public function insertNewUser($nick, $email, $pass)
	{
		if($this->checkNickname($nick) === true){
			if($this->checkEmail($email) === true){
				$sql = $this->db->prepare("INSERT INTO users SET nickname=:nick, email=:email, pass=:pass");
				$sql->bindValue(":nick", $nick);
				$sql->bindValue(":email", $email);
				$sql->bindValue(":pass", $pass);
				$sql->execute();

				header("Location: ".URL."register/success");
			}else{
				return "email_error";
			}
		}else{
			return "nick_error";
		}

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

	private function checkNickname($nick)
	{
		$sql = $this->db->prepare("SELECT * FROM users WHERE nickname=:nick");
		$sql->bindValue(":nick", $nick);
		$sql->execute();

		if($sql->rowCount() > 0){
			return false;
		}else{
			return true;
		}
	}
	private function checkEmail($email)
	{
		$sql = $this->db->prepare("SELECT * FROM users WHERE email=:email");
		$sql->bindValue(":email", $email);
		$sql->execute();

		if($sql->rowCount() > 0){
			return false;
		}else{
			return true;
		}
	}

	public function validateExp($nick){
		if(preg_match('/^[a-z0-9]+$/', $nick) == true){
			return true;
		}else{
			return false;
		}
	}

	public function getGroup(){
		$data = array();

		$sql = $this->db->prepare("SELECT *,(select name from groups where msgs.id_group = groups.id) as name_group FROM msgs WHERE id_user=:id_user GROUP BY id_group");
		$sql->bindValue(":id_user", $this->id);
		$sql->execute();

		if($sql->rowCount() > 0){
			$data = $sql->fetchAll();
		}

		return $data;
	} 

	
}