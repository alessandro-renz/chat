<?php
namespace Models;
use Core\Model;

class Group extends Model{
	
	public function getMsgsById($id_group){
		$data = array();

		$sql = $this->db->prepare("SELECT * FROM msgs WHERE id_group=:id_group");
		$sql->bindValue(":id_group", $id_group);
		$sql->execute();

		if($sql->rowCount() > 0){
			$data = $sql->fetchAll();
		}

		return $data;
	}
}