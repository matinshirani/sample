<?php
include_once "model/newproduct.php";

$new_product=new newproduct();
switch($action){
	case 'edit':
		$show=$new_product->show_new();
		$all=$new_product->all_product();
		if (isset($_POST['btn'])) {
			$data=$_POST['data'];
			$new_product->edit_newproduct($data);
		}
		break;
}


include_once "view/newproduct/$action.php"

?>