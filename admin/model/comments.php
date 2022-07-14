<?php

class comments extends upload{
    public function comment_list(){
        $sql=$this->db->query("select * from comments_tbl");
        $row=$sql->fetchAll();
        return $row;
    }
    public function show_comment($id){
        $sql=$this->db->query("select * from comments_tbl where id='$id'");
        $row=$sql->fetch();
        return $row;
    }
    public function edit_comment($data,$file, $show, $id){
        if ($file['name'] != ''){
            $to=$this->uploader($file, "view/comments/images/");
        }else{
            $to=$show['image'];
        }
        $this->db->query("update comments_tbl set name='$data[name]', comment='$data[comment]', image='$to' where id='$id'");
    }
}

?>