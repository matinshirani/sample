<?php
class procat extends config{
    public function addprocat($data){
//        var_dump($data);die;
        $value="'$data[title]', '$data[status]', '$data[chid]' ";
        $this->db->query("insert into procat_tbl (title, status, chid) values ($value)");
    }
    public function parentcat(){
        $sql=$this->db->query("select * from procat_tbl where chid='0'");
        $row=$sql->fetchAll();
        return $row;
    }
    public function listprocat(){
        $sql=$this->db->query("select * from procat_tbl ");
        $row=$sql->fetchAll();
        return $row;
    }
    public function parent_procat($chid){
        $sql=$this->db->query("select * from procat_tbl where id='$chid'");
        $row=$sql->fetch();
        return $row['title'];
    }
    public function deleteprocat($id){
        $this->db->query("delete from procat_tbl where id='$id'");
    }
    public function showeditprocat($id){
        $sql=$this->db->query("select * from procat_tbl where id='$id'");
        $row=$sql->fetch();
        return $row;
    }
    public function editprocat($data, $id){
        $this->db->query("update procat_tbl set title='$data[title]', status='$data[status]', chid='$data[chid]' where id='$id'");
    }
}

?>