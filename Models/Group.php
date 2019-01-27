<?php
namespace Models;
use Core\Model;

class Group extends Model{
	
	public function getMsgsById($id_group){
		$data = array();

		$sql = $this->db->prepare("SELECT *,(select nickname from users where users.id=msgs.id_user) as name_user, (select name from groups where groups.id=msgs.id_group) as name_group FROM msgs WHERE id_group=:id_group");
		$sql->bindValue(":id_group", $id_group);
		$sql->execute();

		if($sql->rowCount() > 0){
			$data = $sql->fetchAll();
		}

		return $data;
	}
}