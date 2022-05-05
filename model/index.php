<?php
class index extends config {
    public function features(){
        $sql=$this->db->query("select * from features_tbl");
        $row=$sql->fetchAll();
        return $row;
    }
}
?>
