<?php
include_once 'model/public.php';
include_once 'view/layout/header.php';


$controller=@$_GET['c']?$_GET['c']:'index';
$action=@$_GET['a']?$_GET['a']:'index';


if (file_exists("controller/$controller.php")){
    include_once "controller/$controller.php";
}

include_once 'view/layout/footer.php';

?>
