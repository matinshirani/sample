<?php
include_once "model/public.php";
$conn=new config();
if (!isset($_SESSION['name'])){
    header("location:login.php?login=first");
}
include_once "view/layout/header.php";





$controller=@$_GET['c']?$_GET['c']:'index';
$action=@$_GET['a']?$_GET['a']:'index';

if (file_exists("controller/$controller.php")){
    include_once "controller/$controller.php";
}else{
    echo "<p>There is no such file or directory</p>";
}

include_once "view/layout/footer.php";
?>
