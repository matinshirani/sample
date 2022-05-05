<?php
include_once "model/index.php";

$index=new index();
$features_list=$index->features();

include_once "view/index/index.php";
?>