<?php
class basket extends config{
    public function add_basket($user_id, $pro_id, $count){
        $this->db->query("insert into basket_tbl (user_id, pro_id, count) values ('$user_id', '$pro_id', '$count')");
    }
    public function list_basket($user_id){
        $sql=$this->db->query("select * from basket_tbl where user_id='$user_id'");
        $row=$sql->fetchAll();
        return $row;
    }
    public function user_choices($pro_id){
        $sql=$this->db->query("select * from product_tbl where id='$pro_id'");
        $row=$sql->fetch();
        return $row;
    }
    public function delete_basket($id){
    	$this->db->query("delete from basket_tbl where id='$id'");
    }
}


?>
