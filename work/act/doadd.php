<?php

session_start();

require_once "../database/connet.php";
require_once '../database/mysqlconfig.php';

$id = $_SESSION["uid"];
$title = $_POST["title"];
$author = $_SESSION["id"];
$content = $_POST["content"];
$ip = $_SERVER["REMOTE_ADDR"];
$database = new Database();
$link = $database->connect();
$sql = "insert into tbl_ms1 (user, title, author, ip, message, time) values('$id', '$title', '$author', '$ip', '$content' ,now())";

if ($title != null) {
    if ($author != null) {
        $res = $database -> insertl($link, $sql);
    };
    if ($author == null) {?>
        <script>alert('請輸入留言者！'); location = '../view/addmessage.php'</script>
        <?php
    };
};

if ($title == null) {?>
    <script>alert('請輸入留言標題！'); location = '../view/addmessage.php'</script>
    <?php
};
