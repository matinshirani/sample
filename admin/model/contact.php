<?php
class contact extends config{
    public function list_contact(){
        $sql=$this->db->query("select * from contact_tbl");
        $row=$sql->fetchAll();
        return $row;
    }
    public function detail_contact($id){
        $sql=$this->db->query("select * from contact_tbl where id='$id'");
        $row=$sql->fetch();
        return $row;
    }
    public function delete_contact($id){
        $this->db->query("delete from contact_tbl where id='$id'");
    }
}

?>
