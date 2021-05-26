<html>

<head>
    <title>登入</title>
    <meta charset = "UTF-8">
    <style>
        body {
            height: 100%;
        }
    </style>
</head>

<body>
    <div class = "index_01">
        <table style = "width: 100%; height:100%">
            <tr>
                <td>
                    <table width = 350 height = 230; class = "index_table">
                        <form method = "POST" action = "../act/dologin.php" name = "frmLogin">
                            <tr style = "font-size: 25px">
                                <td colspan = "2" style = "font-size: 35px">使用者登入</td>
                            </tr>
                            <tr>
                                <td style = "font-size: 25px">使用者名稱</td>
                                <td><input type = "name" maxlength = "30" name = "uid" placeholder = "請輸入帳號" style = "width: 180px; font-size: 20px; border-radius: 8px"></td>
                            </tr>
                            <tr>
                                <td style = "font-size: 25px">密 碼</td>
                                <td><input name = "password" type = "password" maxlength = "30" placeholder = "請輸入密碼" style = "width: 180px; font-size: 20px; border-radius: 8px"></td>
                            </tr>
                            <tr>
                                <td colspan = "2">
                                    <input type = "submit" name = "login" value = "登入" class = "btn">
                                    <input type = "reset" name = "reset" value = "重置" class = "btn">
                                    <input type = "button" name = "register" value = "註冊" onclick = "window.location.href = 'register.php'" class = "btn">
                                </td>
                            </tr>
                        </form>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>