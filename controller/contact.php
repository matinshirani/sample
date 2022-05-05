<?php
include_once 'model/contact.php';
$contact=new contact();
switch ($action){
    case 'contact':
        if(isset($_POST['btn'])){
            $data=$_POST['data'];
            $contact->add_contact($data);
        }
        break;
}

include_once "view/contact/$action.php";
?>