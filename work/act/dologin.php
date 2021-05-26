<?php

session_start();

require_once "../database/connet.php";
require_once '../database/mysqlconfig.php';

$id = $_POST['uid'];
$_SESSION["uid"] = $id;
$password = $_POST['password'];
$database = new Database();
$link = $database -> connect();
$sql = "select * from tbl_ms where username = '$id' and password = '$password'";  
$res = $database -> CheckUser($link, $sql);

if($res){
     header("Location: ../view/addmessage.php");
};
?>
<script>alert('登入失敗，賬號或密碼錯誤'); location = '../view/login.php'</script>