<?php
namespace Models;
use Core\Model;

class User extends Model{
	public function getUser($nick, $pass){
		$sql = $this->db->prepare("SELECT * FROM users WHERE nickname=:nick OR pass=:pass");
	}
}