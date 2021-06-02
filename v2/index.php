<html>

<head>
    <title>留言板.檢視留言</title>
</head>

<body style = "background-size: cover; background-attachment: fixed">
    <div>
        <h2>留言板</h2>
        <input type = "button" value = "新增留言" onclick = "location.href = 'act/checklogin.php'" class = " button">
        <input type = "button" value = "檢視留言" onclick = "location.href = 'index.php'" class = "button">
        <input type = "button" value = "註冊" onclick = "location.href = 'view/register.php'" class = "button" style = "float: right">
        <input type = "button" value = "登入" onclick = "location.href = 'view/login.php'" class = "button" style = "float: right">
        <hr width = "100%">
    </div>
    <?php

session_start();

$con = @mysqli_connect("127.0.0.1", "root", "YiUMq6P1D8e1HU7I", "my1");

if (!$con) {
    die("資料庫連線錯誤" . mysqli_connect_error());
}

mysqli_query($con, "set names'utf8'");

$pagesize = 8;

@$p = $_GET['p'] ? $_GET['p'] : 1;

$offset = ($p - 1) * $pagesize;

$query_sql = "select * from tbl_ms1 where user order by user desc limit $offset,$pagesize";
$result = mysqli_query($con, $query_sql);

?>

    <div style = 'margin-top:55px'>

        <?php

while ($res = mysqli_fetch_array($result)) {
    ?>
            <div class = 'k'>
            <div class = 'ds-post-main'>
            <div class = 'ds-comment-body'>
            <span><?php echo $res['author']?>　於　<?php echo $res['time']?>　留言　</span>
            <p>留言主題　:　<?php echo $res['title']?></span></p>
            <p>內容　:　<?php echo $res['message']?></p>
            <hr width = 100%></div><br>
            </div>
            </div>
            <?php
}

?>
    </div>
    <?php

$count_result = mysqli_query($con, "select count(*) as count from tbl_ms1 where user");
$count_array = mysqli_fetch_array($count_result);

$pagenum = ceil($count_array['count'] / $pagesize);

echo "<center>";
echo "<div style = 'display: inline-block; margin-right: 15px; margin-left: 15px'>", '共', $count_array['count'], '條留言', '</div>';
echo "<div style = 'display: inline-block; margin-right: 15px; margin-left: 15px'>", '共', $pagenum, '頁', '</div>';

if ($pagenum > 1) {
    for ($i = 1; $i <= $pagenum; $i++) {
        if ($i == $p) {
            echo "<div style = 'background: #e8ffc4; width: 25px; display: inline-block; margin-right: 10p'>", $i, "</div>";
        } else {
            echo '<a href = "index.php?p=', $i, '">', "<div style = 'width:25px;display: inline-block; margin-right: 10px; background: #FF9D6F'>", $i, '</div>', '</a>';
        }
    }
    echo "<div style = 'display: inline-block; margin-right: 10px'>", '當前在 ', $p, ' 頁', "</center></div>";
}
?>

    <br>
    <br>
    <br>
    </div>
</body>

</html>