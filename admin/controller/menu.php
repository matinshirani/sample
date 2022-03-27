<?php
include_once "model/menu.php";
$menu = new menu();
switch ($action) {
    case 'add':
        $parentcat=$menu->parentcat();
        if (isset($_POST['btn'])){
            $data=$_POST['data'];
            $menu->add($data);
        }
        break;
    case 'list':
        $list=$menu->list_menu();
        break;
    case 'delete':
        $id=$_GET['id'];
        $menu->delete($id);
        break;
    case 'edit':
        $id=$_GET['id'];
        $parentcat=$menu->parentcat();
        $show=$menu->showedit($id);
        if (isset($_POST['btn'])){
            $id1=$_GET['id'];
            $data=$_POST['data'];
            $menu->editmenu($data, $id1);
        }
        break;

}

include_once "view/menu/$action.php";
?>