<?php
include_once "model/users.php";
$users=new users();
switch ($action){
    case 'list':
        $list=$users->users_list();
        break;
    case 'edit':
        $id=$_GET['id'];
        $show=$users->show_edit($id);
        if(isset($_POST['btn'])){
            $id2=$_GET['id'];
            $data=$_POST['data'];
            $users->edit($data, $id2);
        }
        break;
    case 'delete':
        $id=$_GET['id'];
        $users->delete($id);
        header("location:index.php?c=users&a=list");
        break;
}
include_once "view/users/$action.php";
?>