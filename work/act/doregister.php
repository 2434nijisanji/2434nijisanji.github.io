<?php

session_start();

require_once "../database/connet.php";
require_once '../database/mysqlconfig.php';

$database = new Database();
$link = $database->connect();
$id = $_POST['uid'];
$_SESSION['uid'] = $id;
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
if($password != $confirmPassword){?>
    <script>alert('輸入的密碼和確認的密碼不相等'); location = '../view/register.php'</script>
    <?php
}
$hash = password_hash($password, PASSWORD_ARGON2ID);
$alt = "select * from tbl_ms where username = '$id'";
$res = $database -> print1($link,$alt);
if($id != null && $password != null){
    $database = new Database();
    $link = $database->connect();
    $sql = "insert into tbl_ms (username, password) values('$id', '$hash')";
    for ($i = 0; $i < count($res); $i++) {
        if($id != $res[$i]['username']){
            $res = $database->insert($link, $sql);
        };
        if($id == $res[$i]['username']){?>
            <script>alert('註冊失敗，該帳號已被註冊！'); location = '../view/register.php'</script>
            <?php
        }
    }
} else {?>
    <script>alert('註冊失敗，請輸入帳號和密碼') ; location = '../view/register.php'</script>
    <?php
}
