<?php

class features extends upload{
    public function list_features(){
        $sql=$this->db->query("select * from features_tbl");
        $row=$sql->fetchAll();
        return $row;
    }
    public function show($id){
        $sql=$this->db->query("select * from features_tbl where id='$id'");
        $row=$sql->fetch();
        return $row;
    }
    public function edit_feature($title, $file, $show, $directory, $id){
        if ($file['name'] != ""){
            $to=$this->uploader($file, $directory);
        }else{
            $to=$show['image'];
        }
        $this->db->query("update features_tbl set title='$title', image='$to' where id='$id'");
    }
}

?>