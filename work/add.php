<?php
header('Content-type: text/html; charset=UTF8');
?>
<html>

<head>
    <title>我的留言板.新增留言</title>
</head>

<body style="background-size:cover;">
    <center>
        <h2>我的留言板</h2>
        <input type="button" value="新增留言" onclick="location.href='add.php'" class="button" />
        <input type="button" value="檢視留言" onclick="location.href='show.php'" class="button" />
        <hr width="70%">
    </center>
    <center>
        <div class="k1">
            <form action="doAdd.php" method="post">
                <label>
                    <span>暱稱:</span>
                    <input type="text" name="author" placeholder="你的暱稱" />
                </label>

                <label>
                    <span>標題:</span>
                    <input type="text" name="title" placeholder="標題" />
                </label>

                <label>
                    <span>內容:</span>
                    <textarea name="content" placeholder="內容"></textarea>
                </label>
                <div style="margin-left:125px">
                    <input type="submit" value="提交" class="submit">
                    <input type="reset" value="重置" class="reset">
                </div>
        </div>
        </form>
    </center>
</body>

</html>