<?php
class contact extends config{
    public function add_contact($data){
        $this->db->query("insert into contact_tbl (name, email, subject, text) values ('$data[name]', '$data[email]', '$data[subject]', '$data[text]')");
    }
}
?>
