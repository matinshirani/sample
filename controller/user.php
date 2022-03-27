<?php
include_once "model/user.php";
$user = new user();
switch ($action){
    case 'login':
        if (isset($_POST['btn'])) {
            $data = $_POST['data'];
            $user->login($data);
        }
        break;
    case 'register':
        if (isset($_POST['btn'])){
            $data = $_POST['data'];
            $user->register($data);
        }
        break;


}



include_once "view/user/$action.php";
?>