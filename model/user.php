<?php
class user extends config
{
    public function login($data)
    {
        $sql = $this->db->query("select * from user_tbl where email='$data[email]'");
        $row = $sql->fetch();
        $password = sha1($data['password']);
        if ($password == $row['password']) {
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            echo $_SESSION['name'] . " عزیز خوش آمدید ";
            header("location:index.php");
        } else {
            echo "دوباره امتحان کنید !";
        }
    }

    public function register($data)
    {
        $password = sha1($data['password']);
        $this->db->query("insert into user_tbl (email,password,name,admin, lastname) VALUES ('$data[email]', '$password', '$data[name]', '0', '')");
        header("location:index.php");
    }
}

?>