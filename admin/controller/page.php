<?php
include_once 'model/page.php';
$page=new page();
switch ($action){
    case 'add':
    if (isset($_POST['btn'])){
        $data=$_POST['data'];
        $page->add_page($data);
    }
        break;
    case 'list':
        $list=$page->list_page();
        break;
    case 'edit':
        $id=$_GET['id'];
        $show=$page->show_page($id);
        if (isset($_POST['btn'])){
            $id=$_GET['id'];
            $data=$_POST['data'];
            $page->edit_page($data, $id);
        }
        break;
    case 'delete':
        $id=$_GET['id'];
        $page->delete_page($id);
        break;
}


include_once "view/page/$action.php";

?>