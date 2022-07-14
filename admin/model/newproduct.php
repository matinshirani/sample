<?php

class newproduct extends config{
	public function show_new(){
		$sql=$this->db->query("select * from newpro_tbl");
		$row=$sql->fetch();
		return $row;
	}
	public function all_product(){
		$sql=$this->db->query("select * from product_tbl");
		$row=$sql->fetchAll();
		return $row;
	}
	public function edit_newproduct($data){
		$this->db->query("update newpro_tbl set pro_id1='$data[pro1]', pro_id2='$data[pro2]', pro_id3='$data[pro3]', pro_id4='$data[pro4]', pro_id5='$data[pro5]', pro_id6='$data[pro6]'  ");
	}
}

?>