<?php
include_once "model/mainproduct.php";
$mainproduct=new mainproduct();
switch($action){
	case "edit":
		$show=$mainproduct->show_mainpro();
		$all=$mainproduct->all_product();
		if (isset($_POST['btn'])){
			$data=$_POST['data'];
			$mainproduct->edit_mainpro($data);
		}
		break;
}

include_once "view/mainproduct/$action.php";

?>