<html>

<head>
    <title>註冊</title>
    <meta charset = "UTF-8">
    <style>
        body {
            height: 100%;
        }
    </style>
</head>

<body>
    <div class = "index_01">
        <table style = "width: 100%; height: 100%">
            <tr>
                <td>
                    <form action = "../act/doregister.php" name = "dl" method = "post">
                        <table width = 350 height = 230 style = "font-family: 宋體; font-size: 25px">
                            <tr>
                                <td colspan = "2" style = "font-size: 35px">註冊使用者</td>
                            </tr>
                            <tr>
                                <td>使用者名稱</td>
                                <td>
                                    <input type = "name" maxlength = "20" name = "id" placeholder = "請輸入暱稱" style = "width: 180px; font-size: 20px; border-radius: 8px">
                                </td>
                            </tr>
                            <tr>
                                <td>密 碼</td>
                                <td>
                                    <input type = "password" maxlength = "16" name = "password" placeholder = "請輸入密碼" style = "width: 180px; font-size: 20px; border-radius: 8px">
                                </td>
                            </tr>
                            <tr>
                                <td>Again</td>
                                <td>
                                    <input type = "password" maxlength = "16" name = "confirmPassword" placeholder = "請再次輸入密碼" style = "width: 180px; font-size: 20px; border-radius: 8px">
                                </td>
                            </tr>
                            <tr>
                                <td colspan = "2">
                                    <input type = "reset" name = "zu" value = "重置" class = "btn">
                                    <input type = "submit" name = "zu" value = "註冊" class = "btn">
                                </td>
                                <input type = "button" name = 'zu' value = "返回登入頁面" onclick = "location.href = '../view/login.php'" class = "btn" style = "float: right">
                            </tr>
                        </table>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</body>
<html>