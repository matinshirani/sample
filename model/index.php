<?php
class index extends config {
    public function features(){
        $sql=$this->db->query("select * from features_tbl");
        $row=$sql->fetchAll();
        return $row;
    }
    public function comments(){
        $sql=$this->db->query("select * from comments_tbl");
        $row=$sql->fetchAll();
        return $row;
    }
    public function newsletter($email){
        $this->db->query("insert into newsletter_tbl (email) values ('$email')");
    }
    public function newproduct(){
        $sql=$this->db->query("select * from newpro_tbl");
        $row=$sql->fetch();
        return $row;
    }
    public function select_newpro($id){
        $sql=$this->db->query("select * from product_tbl where id='$id' ");
        $row=$sql->fetch();
        return $row;
    }
    public function mainproduct(){
        $sql=$this->db->query("select * from mainpro_tbl");
        $row=$sql->fetch();
        return $row;
    }
    public function select_mainpro($id){
        $sql=$this->db->query("select * from product_tbl where id='$id' ");
        $row=$sql->fetch();
        return $row;
    }
}
?>
