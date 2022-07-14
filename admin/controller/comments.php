<?php
include_once 'model/comments.php';
$comments=new comments();
switch ($action){
    case 'list':
        $list=$comments->comment_list();
        break;
    case 'edit':
        $id=$_GET['id'];
        $show=$comments->show_comment($id);
        if (isset($_POST['btn'])){
            $id2=$_GET['id'];
            $data=$_POST['data'];
            $file=$_FILES['image'];
            $show2=$comments->show_comment($id);
            $comments->edit_comment($data, $file, $show2, $id2);
        }
        break;
}

include_once "view/comments/$action.php";

?>