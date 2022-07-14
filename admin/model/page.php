<?php

class page extends config{
    public function add_page($data){
        $this->db->query("insert into page_tbl (title, keywords, description, body) values ( '$data[title]', '$data[keywords]', '$data[description]', '$data[body]' )");
    }

    public function list_page(){
        $sql=$this->db->query("select * from page_tbl");
        $row=$sql->fetchAll();
        return $row;
    }

    public function show_page($id){
        $sql=$this->db->query("select * from page_tbl where id='$id'");
        $row=$sql->fetch();
        return $row;
    }
    public function edit_page($data, $id){
        $this->db->query("update page_tbl set title='$data[title]', keywords='$data[keywords]', description='$data[description]', body='$data[body]' where id='$id'");
    }
    public function delete_page($id){
        $this->db->query("delete from page_tbl where id='$id'");
    }

}

?>