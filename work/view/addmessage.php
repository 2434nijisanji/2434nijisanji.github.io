<?php 
header('Content-type: text/html; charset = UTF8');

session_start();

$id = $_SESSION['uid'];

echo "<div>";
echo "<h2>早安 $id 你今天過得好嗎?</h2>";
echo "</div>";

?>
<html>

<head>
    <title>留言板.新增留言</title>
</head>

<body style = "background-size:cover">
    <div>
        <input type = "button" value = "新增留言" onclick = "location.href = '../act/checklogin.php'" class = "button">
        <input type = "button" value = "檢視留言" onclick = "location.href = 'test.php'" class = "button">
        <input type = "button" value = "登出" onclick = "location.href = 'logout.php'" class = "button" style = "float: right">
        <hr width = "100%">
    </div>

    <div class = "k1">
        <form action = "../act/doadd.php" method = "post">
            <div>
                <input type = "submit" value = "提交" class = "submit">
                <input type = "reset" value = "重置" class = "reset">
            </div>
            <label>
                <span>暱稱:</span>
                <input type = "text" name = "author" placeholder = "你的暱稱">
            </label>
            <label>
                <span>標題:</span>
                <input type = "text" name = "title" placeholder = "標題">
            </label>
            <label>
                <span>內容:</span>
                <textarea name = "content" placeholder = "內容"></textarea>
            </label>
        </form>
    </div>
</body>

</html>