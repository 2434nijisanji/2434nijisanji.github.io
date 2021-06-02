<?php

session_start();

require_once "../database/connet.php";
require_once '../database/mysqlconfig.php';

$id = $_POST['uid'];
$_SESSION["uid"] = $id;
$password = $_POST['password'];
$database = new Database();
$link = $database -> connect();
$con = @mysqli_connect("127.0.0.1", "root", "YiUMq6P1D8e1HU7I", "my1");
$query_sql = "select * from tbl_ms where username = '$id'";
$result = mysqli_query($con, $query_sql);
$res = mysqli_fetch_array($result);
if(password_verify($password, $res['password'])){
     header("Location: ../view/test.php");
}
?>
<script>alert('登入失敗，賬號或密碼錯誤'); location = '../view/login.php'</script>