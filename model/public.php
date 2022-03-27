<?php
session_start();
class config {
public $server = "localhost";
public $dbname = "shop";
public $username = "root";
public $password = "";
public $db;

public function __construct()
{
$this->db = new PDO("mysql:host=$this->server;dbname=$this->dbname", $this->username, $this->password);
}

}
class header extends config {
    public function menuparent(){
        $sql=$this->db->query("select * from menu_tbl where chid='0' AND status='1'");
        $row=$sql->fetchAll();
        return $row;
    }
    public function menuchild($id){
        $sql=$this->db->query("select * from menu_tbl where chid='$id'");
        $row=$sql->fetchAll();
        $count=count($row);
        if ($count > 0){
            return $row;
        }
    }
}



?>