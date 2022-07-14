<?php
class mainproduct extends config{

	public function show_mainpro(){
		$sql=$this->db->query("select * from mainpro_tbl");
		$row=$sql->fetch();
		return $row;	
	}

	public function all_product(){
		$sql=$this->db->query("select * from product_tbl");
		$row=$sql->fetchAll();
		return $row;
	}

	public function edit_mainpro($data){
		$sql=$this->db->query("update mainpro_tbl set pro_id1='$data[pro1]', pro_id2='$data[pro2]', pro_id3='$data[pro3]' ");
	}
}

?>