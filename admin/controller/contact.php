<?php
include_once 'model/contact.php';
$contact=new contact();
switch ($action){
    case 'list':
        $list=$contact->list_contact();
        break;
    case 'detail':
        $id=$_GET['id'];
        $detail=$contact->detail_contact($id);
        break;
    case 'delete':
        $id=$_GET['id'];
        $contact->delete_contact($id);
        break;
}

include_once "view/contact/$action.php";

?>