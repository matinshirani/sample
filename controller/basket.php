<?php
include_once "model/basket.php";
if (!isset($_SESSION['name'])){
    echo  "برای خرید در ابتدا میبایست وارد شوید" . "<a href='index.php?c=user&a=login'> صفحه ورود </a>" ;
}else{
$basket=new basket();
switch ($action){
    case 'add':
        $user_id=$_SESSION['id'];
        $pro_id=$_GET['id'];
        if (isset($_POST)){
            $count=$_POST['count'];
            $basket->add_basket($user_id, $pro_id, $count);
            echo "انجام شد به صفحه سبد خرید بروید" . "<a href='index.php?c=basket&a=list'> سبد خرید </a>";
        }
        break;

    case 'list':
        $user_id=$_SESSION['id'];
        $list=$basket->list_basket($user_id);
//        var_dump($list);
        foreach ($list as $val ){
             $pro_id[]=$val['pro_id'];
        }
        foreach ($list as $val ){
             $count[]=$val['count'];
        }

        break;

    case 'delete':
    	$id=$_GET['id'];
    	$basket->delete_basket($id);
        echo "انجام شد به صفحه سبد خرید بروید" . "<a href='index.php?c=basket&a=list'> سبد خرید</a>";
    	break;
            }   
}

include_once "view/basket/$action.php";
?>
