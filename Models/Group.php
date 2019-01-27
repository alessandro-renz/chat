<?php
namespace Models;
use Core\Model;

class Group extends Model{
	public function getGroup(){
		$data = array();

		$sql = $this->db->prepare("SELECT *,(select name from groups where msgs.id_group = groups.id) as name_group FROM msgs WHERE id_user=:id_user");
		$sql->bindValue(":id_user", $this->id_user);
		$sql->execute();

		if($sql->rowCount() > 0){
			$data = $sql->fetchAll();
		}

		return $data;
	} 
}