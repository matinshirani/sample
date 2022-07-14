<?php
include_once "model/page.php";
$page=new page();
switch ($action){
    case 'page':
        $id=$_GET['id'];
        $show_page=$page->show_page($id);
        break;
}

include_once "view/page/$action.php";

?>