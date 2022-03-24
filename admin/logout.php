<?php
    include_once "model/public.php";
    session_start();
    session_destroy();
    header("location:login.php");
?>
