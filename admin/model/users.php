<?php

class users extends config{
    public function users_list(){
        $sql=$this->db->query("select * from user_tbl");
        $row=$sql->fetchAll();
        return $row;
    }
    public function show_edit($id){
        $sql=$this->db->query("select * from user_tbl where id='$id'");
        $row=$sql->fetch();
        return $row;
    }
    public function edit($data, $id){
        $this->db->query("update user_tbl set name='$data[name]', lastname='$data[lastname]', email='$data[email]', admin='$data[admin]' where id='$id'");
    }
    public function delete($id){
        $this->db->query("delete from user_tbl where id='$id'");
    }
}

?>