<?php
include_once 'model/product.php';
$product=new product();
switch ($action){
    case 'add':
        $category=$product->categories();
        if (isset($_POST['btn'])){
            $file1=$_FILES['file1'];
            $file2=$_FILES['file2'];
            $file3=$_FILES['file3'];
            $directory="view/product/images/";
            $data=$_POST['data'];
            $product->addproduct($data, $file1, $file2, $file3, $directory);
        }
        break;
    case 'list':
        $listproduct=$product->listproduct();
        break;
    case 'delete':
        $id=$_GET['id'];
        $product->deleteproduct($id);
        break;
    case 'edit':
        $id=$_GET['id'];
        $show=$product->showeditproduct($id);
        $category=$product->categories();
        if (isset($_POST['btn'])){
            $id2=$_GET['id'];
            $show2=$product->showeditproduct($id2);
            $file1=$_FILES['file1'];
            $file2=$_FILES['file2'];
            $file3=$_FILES['file3'];
            $data=$_POST['data'];
            $directory="view/product/images/";
            $product->editproduct($data,$id2,$file1, $file2, $file3,$directory, $show2);

        }
        break;
}
include_once "view/product/$action.php";

?>