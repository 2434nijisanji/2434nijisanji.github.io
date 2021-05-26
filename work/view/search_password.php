<!DOCTYPE html>
<html>

<head>

    <meta charset = "utf-8" />
    <meta http-equiv = "X-UA-Compatible" content = "IE = edge,chrome = 1" />
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0, maximum-scale = 1.0">
    <title>忘記密碼 - 巴哈姆特</title>
    <link rel = "icon" type = "image/x-icon" href = "https://i2.bahamut.com.tw/anime/baha_s.png" />
    <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href = "../css/login.css" rel = "stylesheet" />

    <link rel = "stylesheet" type = "text/css" href = "../dist/components/reset.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/site.css">

    <link rel = "stylesheet" type = "text/css" href = "../dist/components/container.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/grid.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/header.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/image.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/menu.css">

    <link rel = "stylesheet" type = "text/css" href = "../dist/components/divider.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/segment.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/form.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/input.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/button.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/list.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/message.css">
    <link rel = "stylesheet" type = "text/css" href = "../dist/components/icon.css">

    <script src = "assets/library/jquery.min.js"></script>
    <script src = "../dist/components/form.js"></script>
    <script src = "../dist/components/transition.js"></script>
    <script src = "https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src = "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style type = "text/css">
        body {
            background-color: #DADADA;
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
    <nav class = "navbar navbar-expand-lg navbar-dark bg-dark">
        <div class = "container">
            <a class = "navbar-brand" href = "../index.php"><img class = "img-fluid" src = "https://i2.bahamut.com.tw/top_logo.svg" alt = "Logo" style = "width:100px;"></a>
            <button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarResponsive" aria-controls = "navbarResponsive" aria-expanded = "false" aria-label = "Toggle navigation"><span class = "navbar-toggler-icon"></span></button>
            <div class = "collapse navbar-collapse" id = "navbarResponsive">
                <ul class = "navbar-nav ml-auto nav justify-content-center">
                    <li class = "nav-item active">
                        <a class = "nav-link" href = "register.php" style = "border-right:1px solid #ffffff"><small>註冊</small>
                            <span class = "sr-only">(current)</span>
                        </a>
                    </li>
                    <li class = "nav-item active"><a class = "nav-link" href = "search_password.php" style = "border-right:1px solid
                                    #ffffff"><small>忘記密碼</small><span class = "sr-only">(current)</span></a></li>
                    <hr>
                    <li class = "nav-item active"><a class = "nav-link" href = "search_id.php" style = "border-right:1px solid
                                    #ffffff"><small>忘記帳號</small><span class = "sr-only">(current)</span></a></li>
                    <li class = "nav-item active"><a class = "nav-link" href = "two_step_auth_reset2.php" style = "border-right:1px solid
                                    #ffffff"><small>重置兩步驟驗證</small><span class = "sr-only">(current)</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class = "ui middle aligned center aligned grid">
        <div class = "column">
            <form class = "ui large form" method = "POST" action = "updatepassword.php" name = "frmLogin">
                <div class = "ui stacked segment">
                    <br>
                    <h1>
                        <div class = "content">
                            忘記密碼
                        </div>
                    </h1>
                    <h3>
                        <div class = "content">
                            密碼重設信件將寄至您認證的 e-mail 信箱。
                        </div>
                        <div class = "content">
                            請點選信件中網址重新設定密碼。
                        </div>
                    </h3>
                    <div class = "field">
                        <div class = "ui left icon input">
                            <i class = "user icon"></i>
                            <input type = "name" name = "uid" placeholder = "帳號" required = "required">
                        </div>
                    </div>
                    <div class = "field">
                        <div class = "ui left icon input">
                            <i class = "mail icon"></i>
                            <input type = "email" name = "e-mail" placeholder = "E-mail" required = "required">
                        </div>
                    </div>
                    <div class = "form__checkbox">
                        <label><input type = "checkbox" name = "saveid" value = "T"><span>我不是機器人</span></label>
                    </div>
                    <input type = "button" name = "getmail" class = "huge ui blue button" value = "取得信件" onclick = "location.href  =  'login.php'" style = "width: 100%;">
                    <p>
                        ※ 注意：
                        請輸入您認證巴哈姆特帳號的信箱，否則無法收到信件。
                        使用免費信箱，信件有可能被誤判為垃圾信，請先至「垃圾信匣」查看。
                        若仍收不到信件，請與 <a href = "https://user.gamer.com.tw/help/tellus.php?c1 = mem&c2 = 4" class = "blue">客服</a> 聯繫。
                    </p>
                    <br>
                    <br>
                </div>
            </form>
        </div>
    </div>

</body>

</html>