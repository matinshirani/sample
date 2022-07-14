<?php
include_once "model/index.php";

$index=new index();
$features_list=$index->features();
$comments_list=$index->comments();

$newproduct=$index->newproduct();

$newpro1=$index->select_newpro($newproduct[1]);
$newpro2=$index->select_newpro($newproduct[2]);
$newpro3=$index->select_newpro($newproduct[3]);
$newpro4=$index->select_newpro($newproduct[4]);
$newpro5=$index->select_newpro($newproduct[5]);
$newpro6=$index->select_newpro($newproduct[6]);

$mainproduct=$index->mainproduct();

$mainpro1=$index->select_newpro($mainproduct[1]);
$mainpro2=$index->select_newpro($mainproduct[2]);
$mainpro3=$index->select_newpro($mainproduct[3]);



if (isset($_POST['newsletter'])) {
	$data=$_POST['data'];
    $email=$data['email'];
    $index->newsletter($email);
}

include_once "view/index/index.php";
?>