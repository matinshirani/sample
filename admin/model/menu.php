<?php

class menu extends config{
    public function add($data){
        $this->db->query("insert into menu_tbl (title, chid, status, url) values ('$data[title]', '$data[chid]', '$data[status]', '$data[url]')");
    }
    public function parentcat(){
        $sql=$this->db->query("select * from menu_tbl where status='1' AND chid='0'");
        $row=$sql->fetchAll();
        return($row);
    }
    public function list_menu(){
        $sql=$this->db->query("select * from menu_tbl");
        $row=$sql->fetchAll();
        return($row);
    }
    public function parent_menu($chid){
        $sql=$this->db->query("select * from menu_tbl where id='$chid'");
        $row=$sql->fetch();
        return($row['title']);
    }
    public function delete($id){
        $this->db->query("delete from menu_tbl where id='$id'");
    }
    public function showedit($id){
        $sql=$this->db->query("select * from menu_tbl where id='$id'");
        $row=$sql->fetch();
        return $row;
    }
    public function editmenu($data, $id){
        $this->db->query("UPDATE menu_tbl SET title='$data[title]', status='$data[status]', chid='$data[chid]', url='$data[url]' where id='$id'");
    }
}

?>
