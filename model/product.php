<?php

class product extends config{
    public function listproduct(){
        $sql=$this->db->query("select * from product_tbl");
        $row=$sql->fetchAll();
        return $row;
    }
    public function category($cat_id){
        $sql=$this->db->query("select * from product_tbl where procat='$cat_id'");
        $row=$sql->fetchAll();
        return $row;
    }
    public function list_cat(){
        $sql=$this->db->query("select * from procat_tbl");
        $row=$sql->fetchAll();
        return $row;
    }
    public function show_product($id){
        $sql=$this->db->query("select * from product_tbl where id='$id'");
        $row=$sql->fetch();
        return $row;
    }
    public function features(){
        $sql=$this->db->query("select * from features_tbl");
        $row=$sql->fetchAll();
        return $row;
    }
}

?>