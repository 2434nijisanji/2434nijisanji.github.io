<?php
header('Content-type: text/html; charset = UTF8');

session_start();

require_once "../database/connet.php";
require_once '../database/mysqlconfig.php';

$id = $_SESSION['uid'];
$id_ = $_GET['id'];


$database = new Database();
$link = $database->connect();
$con = @mysqli_connect("127.0.0.1", "root", "YiUMq6P1D8e1HU7I", "my1");
$query_sql = "select * from tbl_ms1 where id = '$id_'";
$result = mysqli_query($con, $query_sql);
$res = mysqli_fetch_array($result);
?>
<html>

<head>
    <meta charset = "utf-8" />
    <meta http-equiv = "X-UA-Compatible" content = "IE = edge,chrome = 1" />
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0, maximum-scale = 1.0">
    <title>場外休憩區  哈啦板 - 巴哈姆特</title>
    <link rel = "icon" type = "image/x-icon" href = "https://i2.bahamut.com.tw/anime/baha_s.png" />
    <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href = "css/index.css" rel = "stylesheet" />

    <link rel = "stylesheet" type = "text/css" href = "../dist/components/reset.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/site.css">

    <link rel = "stylesheet" type = "text/css" href = "../dist/components/container.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/grid.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/header.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/image.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/menu.css">

    <link rel = "stylesheet" type = "text/css" href = "../dist/components/divider.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/table.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/dropdown.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/segment.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/form.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/input.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/button.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/list.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/button.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/divider.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/label.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/dropdown.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/message.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/icon.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/transition.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/popup.css">

    <script src = "../assets/library/jquery.min.js"></script>
    <script src = "../dist/components/form.js"></script>
    <script src = "../dist/components/transition.js"></script>
    <script type = "text/javascript" src = "../dist/components/popup.js"></script>
    <script type = "text/javascript" src = "../dist/components/dropdown.js"></script>
    <script type = "text/javascript" src = "../dist/components/transition.js"></script>
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
    <script>
        $(document)
            .ready(function () {
                $('.ui.dropdown')
                    .dropdown({
                        on: 'click'
                    })
                    ;
            })
            ;
    </script>
</head>

<body>
    <div class = "k1" style = "top: 120px; position:relative;">
        <div class = "container">
            <div class = "row">
                <div class = "col-3">
                    <div style = "position: sticky;">
                        <div class = "ui container segment" style = "background-color:#272727">
                            <span style = "color:white;">
                                <p><i class = "ui image icon"></i>插入圖片</p>
                                <p><i class = "ui play icon"></i>插入影片/直播</p>
                                <p><i class = "ui smile outline icon"></i>插入表情/動圖</p>
                            </span>
                        </div>
                        <div class = "ui container segment" style = "background-color:#272727">
                            <span style = "color:white;">
                                <p>個人功能</p>
                                <div class = "ui checkbox">
                                    <input type = "checkbox" name = "example">
                                    <label>回覆至板上</label>
                                    <br>
                                    <input type = "checkbox" name = "example">
                                    <label>站內信給原作者</label>
                                    <br>
                                    <input type = "checkbox" name = "example">
                                    <label>知識共享-創用CC</label>
                                </div>
                            </span>
                        </div>
                    </div>    
                </div>
                <div class = "col-6">
                    <div class = "ui container segment" style = "background-color:#272727">
                        <span style = "color:white;">
                            編輯文章
                            <form action = "../act/doupdate.php?id=<?php echo $id_?>" method = "post">
                                <div>
                                    <input type = "submit" value = "提交" class = "submit">
                                </div>
                                <br>
                                <label>
                                    <input type = "text" name = "title" size = "65" style = "height: 35;" placeholder = "請輸入文章標題..." value = "<?php echo $res["title"] ?>">
                                </label>
                                <br>
                                <label>
                                    <textarea name = "content" style = "width:506px; height:500px;"><?php echo $res["message"] ?></textarea>
                                </label>
                            </form>
                        </span>
                    </div>
                </div>
                <div class = "col-3">
                    <img class = "img-fluid" src = "../pic/am-1.jpg">
                </div>
            </div>
        </div>
    </div>
    <div style = "top: 0px; position:fixed; width:100%;">
        <div class = "ui teal inverted menu"  style = "margin-bottom: 0px;">
            <div class = "ui container">
                <img img class = "img-fluid" src = "https://i2.bahamut.com.tw/top_logo.svg" alt = "Logo" style = "width:100px;">
                <a href = "#" class = "item">
                    <div class = "ui inverted left icon input">
                        <input type = "text" placeholder = "輸入1或多字元來找文章...">
                        <i class = "search link icon"></i>
                    </div>
                </a>
                <div class = "ui teal right icon inverted menu">
                    <a class = "item">
                        <i class = "volume up link icon"></i>
                    </a>
                    <a class = "item">
                        <i class = "rss square link icon"></i>
                    </a>
                    <a class = "item">
                        <i class = "thumbs up link icon"></i>
                    </a>
                    <a class = "item">
                        <i class = "comment link icon"></i>
                    </a>
                    <a class = "item">
                        <i class = "envelope link icon"></i>
                    </a>
                    <a class = "item">
                        <i class = "tags link icon"></i>
                    </a>
                    <a class = "item">
                        <i class = "circle link icon"></i>
                        <i class = "large angle down link icon"></i>
                    </a>
                    <a class = "item">
                        <i class = "large bars link icon"></i>
                    </a>
                </div>
                <div class = "dropdown">
                    <button type = "button" class = "btn btn-light dropdown-toggle" data-toggle = "dropdown"></button>
                    <div class = "dropdown-menu">
                        <a class = "dropdown-item" href = "logout.php">登出</a>
                    </div>
                </div>
            </div>
        </div>
        <div class = "ui blue inverted menu" style = "margin-top: 0px;">
            <div class = "container">
                <a class = "nav-link" style = "color: white;" href = "alltitle.php">場外休憩區</a>
                <a class = "item right aligned">
                    <i class = "inverted x icon"></i>
                    <p>取消</p>
                </a>
                <a class = "item">
                    <i class = "inverted save outline icon"></i>
                    <p>備份</p>
                </a>
                <a class = "item">
                    <i class = "inverted clipboard list icon"></i>
                    <p>預覽</p>
                </a>
                <a class = "nav-link" style = "color: white;" href = "../act/doadd.php">
                    <i class = "inverted check circle outline icon"></i>
                    <p>發佈文章</p>
                </a>
            </div>
        </div>
    </div>
</body>

</html>