<?php
class page extends config{
    public function show_page($id){
        $sql=$this->db->query("select * from page_tbl where id='$id'");
        $row=$sql->fetch();
        return $row;
    }
}
?>