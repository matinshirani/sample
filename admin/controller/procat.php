<?php
include_once "model/procat.php";
$procat=new procat();
switch ($action){
    case 'add':
        $parentcat=$procat->parentcat();
        if (isset($_POST['btn'])){
            $data=$_POST['data'];
            $procat->addprocat($data);
        }
        break;
    case 'list':
        $list=$procat->listprocat();
        break;
    case 'delete':
        $id=$_GET['id'];
        $procat->deleteprocat($id);
        break;
    case 'edit':
        $id=$_GET['id'];
        $show=$procat->showeditprocat($id);
        $parentcat=$procat->parentcat();
        if (isset($_POST['btn'])){
            $id2=$_GET['id'];
            $data=$_POST['data'];
            $procat->editprocat($data, $id2);
        }
        break;
}


include_once "view/procat/$action.php";

?>