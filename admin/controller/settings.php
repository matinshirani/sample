<?php
include_once 'model/settings.php';
$settings=new settings();
$show=$settings->show_edit();
if (isset($_POST['btn'])){
    $show1=$settings->show_edit();
    $data=$_POST['data'];
    $banner=$_FILES['banner'];
    $logo=$_FILES['logo'];
    $settings->edit($data, $show1, $banner, $logo);
}
include "view/settings/$action.php";
?>