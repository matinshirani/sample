<?php
include_once 'model/product.php';
$product=new product();
$list_cat=$product->list_cat();
$list_features=$product->features();
switch ($action){
    case 'shop':
        $list=$product->listproduct();
        break;
    case 'category':
        $cat_id=$_GET['id'];
        $list=$product->category($cat_id);
        break;
    case 'product':
        $id=$_GET['id'];
        $pro=$product->show_product($id);
        break;
}

include_once "view/product/$action.php";

?>