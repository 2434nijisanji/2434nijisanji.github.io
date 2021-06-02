<?php

session_start();

require_once "../database/connet.php";
require_once '../database/mysqlconfig.php';

header("content-type: text/html; charset = utf-8");

$database = new Database();
$link = $database->connect();
$id =  $_SESSION["uid"];
$con = @mysqli_connect("127.0.0.1", "root", "YiUMq6P1D8e1HU7I", "my1");
$query_sql = "select * from tbl_ms1 where user = '$id'";
$result = mysqli_query($con, $query_sql);
$res = mysqli_fetch_array($result);
if ($res['user'] != $id) {
?>
    <script>
    alert('刪除失敗');
    location = '../view/test.php'
    </script>
<?php
}
$sql = "DELETE FROM `tbl_ms1` WHERE `tbl_ms1`.`id` = '{$res['id']}' AND `tbl_ms1`.`user` = '$id'";
$que = mysqli_query($link, $sql);
if ($que) { ?>
    <script>
        alert('刪除成功');
        location = '../view/test.php'
    </script>
<?php
    exit();
} 
?>
