<?php

session_start();

$con = @mysqli_connect("127.0.0.1", "root", "YiUMq6P1D8e1HU7I", "my1");
if (!$con) {
    die("資料庫連線錯誤" . mysqli_connect_error());
}
mysqli_query($con, "set names'utf8'");

$pagesize = 30;

@$p = $_GET['p'] ? $_GET['p'] : 1;

$offset = ($p - 1) * $pagesize;
$query_sql = "select * from tbl_ms1 where user order by user desc limit $offset,$pagesize";
$result = mysqli_query($con, $query_sql);
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset = "utf-8" />
    <meta http-equiv = "X-UA-Compatible" content = "IE = edge,chrome = 1" />
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0, maximum-scale = 1.0">
    <title>場外休憩區 哈拉區 - 巴哈姆特</title>
    <link rel = "icon" type = "image/x-icon" href = "https://i2.bahamut.com.tw/anime/baha_s.png" />
    <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href = "css/index.css" rel = "stylesheet" />

    <link rel = "stylesheet" type = "text/css" href = "dist/components/reset.css">
    <link rel = "stylesheet" type = "text/css" href = "dist/components/site.css">

    <link rel = "stylesheet" type = "text/css" href = "dist/components/container.css">
    <link rel = "stylesheet" type = "text/css" href = "dist/components/grid.css">
    <link rel = "stylesheet" type = "text/css" href = "dist/components/header.css">
    <link rel = "stylesheet" type = "text/css" href = "dist/components/image.css">
    <link rel = "stylesheet" type = "text/css" href = "dist/components/menu.css">
    <link rel = "stylesheet" type = "text/css" href = "dist/components/table.css">

    <link rel = "stylesheet" type = "text/css" href = "dist/components/divider.css">
    <link rel = "stylesheet" type = "text/css" href = "dist/components/segment.css">
    <link rel = "stylesheet" type = "text/css" href = "dist/components/form.css">
    <link rel = "stylesheet" type = "text/css" href = "dist/components/input.css">
    <link rel = "stylesheet" type = "text/css" href = "dist/components/button.css">
    <link rel = "stylesheet" type = "text/css" href = "dist/components/list.css">
    <link rel = "stylesheet" type = "text/css" href = "dist/components/message.css">
    <link rel = "stylesheet" type = "text/css" href = "dist/components/icon.css">

    <script src = "assets/library/jquery.min.js"></script>
    <script src = "dist/components/form.js"></script>
    <script src = "dist/components/transition.js"></script>
    <script src = "https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src = "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style type = "text/css">
        body {
            background-color: #000000;
        }

        body>.grid {
            height: 100%;
        }

        .image {
            margin-top: -100px;
        }

        .column {
            max-width: 450px;
        }
    </style>
</head>

<body>
    <div class = "container" style = "top: 120px; position:relative;">
        <div class = "row">
            <div class = "col-9">
                <marquee scrollamount = "3" style = "color:red;font-size:50">場外ㄈㄓ們通通聯合起來抗疫！做好防疫措施、不任意猜測或轉傳未經證實的疫情資訊，場外小組關心您</marquee>
                <?php
                    $count_result = mysqli_query($con, "select count(*) as count from tbl_ms1 where user");
                    $count_array = mysqli_fetch_array($count_result);

                    $pagenum = ceil($count_array['count'] / $pagesize);

                if ($pagenum >= 1) {
                    for ($i = 1; $i <= $pagenum; $i++) {
                        if ($i == $p) {
                            ?>
                                <div style = 'text-align:center;background: #00E3E3; width: 15px; display: inline-block; margin-right: 10px;'> <?php echo $i ?></div>
                            <?php
                        } else {
                            ?>
                                <a href = "index.php?p=<?php echo $i?>"><div style = 'text-align:center;width:15px; display: inline-block; margin-right: 10px; background: #272727'> <?php echo $i ?></div></a>
                            <?php
                        }
                    }
                }
                ?>
                <br>
                <br>
                <button class = "tiny ui grey basic button">技藝知識</button>
                <button class = "tiny ui grey basic button">版務公告</button>
                <button class = "tiny ui grey basic button">板務功能</button>
                <button class = "tiny ui grey basic button">吵架擂台</button>
                <button class = "tiny ui grey basic button">回收專區</button>
                <br>
                <button class = "tiny ui grey basic button">全部主題</button>
                <button class = "tiny ui grey basic button">場外綜合</button>
                <button class = "tiny ui grey basic button">動漫遊戲</button>
                <button class = "tiny ui grey basic button">生活百態</button>
                <button class = "tiny ui grey basic button">心情點滴</button>
                <button class = "tiny ui grey basic button">綜合娛樂</button>
                <button class = "tiny ui grey basic button">新聞焦點</button>
                <button class = "tiny ui grey basic button">政治議題</button>
                <button class = "tiny ui grey basic button">食趣旅遊</button>
                <button class = "tiny ui grey basic button">認真求助</button>
                <button class = "tiny ui grey basic button">創作天地</button>
                <div style = 'margin-top:55px'>
                    <table class = "ui inverted grey unstackable table">
                        <thead>
                            <tr>
                                <th>標題</th>
                                <th>作者</th>
                                <th class="right aligned">發文時間</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($res = mysqli_fetch_array($result)) {
                                ?>
                                <tr>
                                    <td>
                                        <a href = "view/notlogin.php?id=<?php echo $res['id'] ?>" style = "color:white;">
                                        <?php echo $res['title'] ?>
                                        </a>
                                    </td>
                                    <td>
                                        <a href = "view/notlogin.php?id=<?php echo $res['id'] ?>" style = "color:white;">
                                            <?php echo $res['author'] ?>
                                        </a>
                                    </td>
                                    <td class = "right aligned">
                                        <a href = "view/notlogin.php?id=<?php echo $res['id'] ?>"  style = "color:white;">
                                            <?php echo $res['time'] ?>
                                        </a>
                                    </td>
                                </tr>    
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <?php
                    $count_result = mysqli_query($con, "select count(*) as count from tbl_ms1 where user");
                    $count_array = mysqli_fetch_array($count_result);

                    $pagenum = ceil($count_array['count'] / $pagesize);

                if ($pagenum >= 1) {
                    for ($i = 1; $i <= $pagenum; $i++) {
                        if ($i == $p) {
                            ?>
                                <div style = 'text-align:center;background: #00E3E3; width: 15px; display: inline-block; margin-right: 10px;'> <?php echo $i ?></div>
                            <?php
                        } else {
                            ?>
                                <a href = "index.php?p=<?php echo $i?>"><div style = 'text-align:center;width:15px; display: inline-block; margin-right: 10px; background: #272727'> <?php echo $i ?></div></a>
                            <?php
                        }
                    }
                }
                ?>
            </div>
            <div class = "col-3">
                <div class = "ui container segment" style = "background-color:#272727">
                    <span style = "color:white;">版務人員:
                        <img class = "img-fluid" src = "https://avatar2.bahamut.com.tw/avataruserpic/e/d/edfrmpc44ic/edfrmpc44ic_s.png">
                        <img class = "img-fluid" src = "https://avatar2.bahamut.com.tw/avataruserpic/y/u/yunski/yunski_s.png">
                        <img class = "img-fluid" src = "https://avatar2.bahamut.com.tw/avataruserpic/j/o/johnny860726/johnny860726_s.png">
                        <hr  style='background-color:grey;' width = 100%>
                        <img class = "img-fluid" src = "https://p2.bahamut.com.tw/B/GUILD/f/8/0000006458.PNG">
                        <p>
                            7971 筆精華，前天 更新
                            一個月內新增 140 筆
                            歡迎加入共同維護。
                        </p>
                    </span>
                </div>
                <img class = "img-fluid" src = "pic/index-6.jpg">
                <img class = "img-fluid" src = "pic/index-3.jpg">
                <img class = "img-fluid" src = "pic/index-4.jpg">
                <img class = "img-fluid" src = "pic/index-5.jpg">
            </div>
        </div>
    </div>
    <div style = "top: 0px; position:fixed; width:100%;">
        <div class = "ui teal inverted menu" style = "margin-bottom: 0px;">
            <div class = "ui container">
                <img img class = "img-fluid" src = "https://i2.bahamut.com.tw/top_logo.svg" alt = "Logo" style = "width:100px;">
                <a href = "#" class = "item">
                    <div class = "ui inverted left icon input">
                        <input type = "text" placeholder = "輸入1或多字元來找文章...">
                        <i class = "search link icon"></i>
                    </div>
                </a>
                <a class = "item right aligned">
                    <i class = "question circle link icon"></i>
                </a>
                <a href = "view/login.php" class = "item">
                    <div class = "ui inverted right icon input" style = "color:white;">
                        <p>我要登入</p>
                    </div>
                </a>
                <a href = "view/register.php" class = "item">
                    <div class = "ui inverted right icon input" style = "color:white;">
                        <p>註冊</p>
                    </div>
                </a>
                <a class = "item">
                    <i class = "bars link icon"></i>
                </a>
            </div>
        </div>
        <div class = "ui blue inverted menu" style = "margin-top: 0px;">
            <div class = "container">
                <a class = "nav-link" style = "color: white;" href = "#"><b>哈啦區</b></a>
                <a class = "nav-link" style = "color: white;" href = "#"><b>場外休憩區</b></a>
                <a class = "nav-link" style = "color: white;" href = "index.php"><b>文章列表</b></a>
                <a class = "nav-link" style = "color: white;" href = "#"><b>精華區</b></a>
                <a class = "nav-link" style = "color: white;" href = "#"><b>版規</b></a>
                <a class = "nav-link" style = "color: white;" href = "#"><b>水桶</b></a>
                <a class = "item right aligned">
                    <i class = "inverted tag link icon"></i>
                </a>
                <a class = "item">
                    <i class = "inverted ellipsis horizontal link icon"></i>
                </a>
                <a href = "act/checklogin.php" class = "item">
                    <div class = "ui inverted right icon input" style = "color:white;">
                        <button class = "small pink ui button">發文</button>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>

</html>