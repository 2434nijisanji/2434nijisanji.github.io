<?php

session_start();

require_once "../database/connet.php";
require_once '../database/mysqlconfig.php';

$database = new Database();
$link = $database->connect();
$id = $_GET["id"];
$title = $_POST["title"];
$content = $_POST["content"];
$sql = "UPDATE `tbl_ms1` SET title = '$title', message = '$content' WHERE id = $id";
$result = mysqli_query($link , $sql);
?>
<script type='text/javascript'>
    alert('編輯留言成功')
    location.href='../view/showmessage.php?id=<?php echo $id?>'
</script>