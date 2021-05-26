<?php
header('Content-type: text/html; charset = UTF8');

session_start();

require_once "../database/connet.php";
require_once '../database/mysqlconfig.php';

$id = $_SESSION['uid'];
$id_ = $_GET['id'];
echo "<div>";
echo "<h2>早安 $id 你今天過得好嗎?</h2>";
echo "</div>";


$database = new Database();
$link = $database->connect();
$con = @mysqli_connect("127.0.0.1", "root", "YiUMq6P1D8e1HU7I", "my1");
$query_sql = "select * from tbl_ms1 where id = '$id_'";
$result = mysqli_query($con, $query_sql);
$res = mysqli_fetch_array($result);
?>
<html>

<head>
    <title>留言板.編輯留言</title>
</head>

<body style="background-size:cover">
    <div>
        <input type="button" value="新增留言" onclick="location.href = '../act/checklogin.php'" class="button">
        <input type="button" value="檢視留言" onclick="location.href = 'showmessage.php'" class="button">
        <input type="button" value="登出" onclick="location.href = '../act/logout.php'" class="button" style="float: right">
        <hr width="100%">
    </div>

    <div class="k1">
        <form action="../act/doupdate.php?id=<?php echo $id_?>" method="post">
            <div>
                <input type="submit" value="提交" class="submit">
                <input type="reset" value="重置" class="reset">
            </div>
            <label>
                <span>暱稱:</span>
                <input type="text" name="author" placeholder="你的暱稱" value="<?php echo $res["author"] ?>">
            </label>
            <label>
                <span>標題:</span>
                <input type="text" name="title" placeholder="標題" value="<?php echo $res["title"] ?>">
            </label>
            <label>
                <span>內容:</span>
                <textarea name="content" placeholder="內容"><?php echo $res["message"] ?></textarea>
            </label>
        </form>
    </div>
</body>

</html>