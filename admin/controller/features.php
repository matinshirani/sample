<?php
include_once 'model/features.php';
$features=new features();
switch ($action){
    case 'list':
        $list=$features->list_features();
        break;
    case 'edit':
        $id=$_GET['id'];
        $show=$features->show($id);
        if (isset($_POST['btn'])){
            $id1=$_GET['id'];
            $show2=$features->show($id1);
            $title=$_POST['title'];
            $file=$_FILES['image'];
            $directory="view/features/images/";
            $features->edit_feature($title, $file, $show2, $directory, $id1);
        }
        break;
}

include_once "view/features/$action.php";

?>