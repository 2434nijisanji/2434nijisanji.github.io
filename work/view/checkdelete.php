<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE = edge">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
    <title>Checkdelete</title>
</head>

<body>
    <div>
        <script>
            var yes = confirm('確定刪除?');
            if (!yes) {
                location = 'alltitle.php';
                alert('取消刪除');
                exit;
            }
            location = '../act/deletemessage.php';
        </script>
    </div>
</body>

</html>