<?php

session_start();

if(isset($_SESSION['uid'])){
    header("location:../view/addmessage.php");
    exit();
}

header("location:../view/loginfirst.php");
