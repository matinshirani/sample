<?php
session_start();
class config
{
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

class user extends config {
    public function login($data){
        $pdo=$this->db->query("select * from user_tbl where email='$data[email]' AND admin='1'");
        $row=$pdo->fetch();
        $pass=sha1($data['password']);
        if($row['password'] == $pass){
            $_SESSION['name'] = $row['name'];
            header("location:index.php?c=index&a=index");
        }else{
            echo "دوباره امتحان کنید !";
        }

    }
}
class upload extends config{
    public function uploader($file, $directory){
        $name=$file['name'];
        $arr=explode(".", $name);
        $ext=end($arr);
        $newname=rand() . "." . $ext;
        $from=$file['tmp_name'];
        $to=$directory . $newname;
        move_uploaded_file($from, $to);
        return $to;

    }
}

?>