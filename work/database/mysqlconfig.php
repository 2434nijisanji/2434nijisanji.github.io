<?php

class Database
{
    function connect()
    {
        @$link = mysqli_connect("localhost", "my_user", "my_password", "my1");
        @$link = mysqli_connect(Host, User, Password);
        $coo = mysqli_set_charset($link, Charset);
        $coo = mysqli_select_db($link, Name) or die('資料庫開啟失敗');
        if (mysqli_connect_errno()) {
            die('資料庫連線失敗 : ' . mysqli_connect_errno());
        }
        return $link;
    }

    function insert($link, $sql)
    {
        if (mysqli_query($link, $sql)) { ?>
            <script>
                alert('註冊成功!');
                location = '../view/finishregister.php'
            </script>
        <?php
        } else {
            echo "Error insert data: " . $link -> error;
        }
    }

    function CheckUser($link, $sql)
    {
        $result = mysqli_query($link, $sql);
        $row = mysqli_num_rows($result);
        if ($row != 0) {
            return true;
        } else {
            return false;
        }
    }

    function insertl($link, $sql)
    {
        if (mysqli_query($link, $sql)) { ?>
            <script>
                alert('留言成功!');
                location = '../view/test.php'
            </script>
        <?php
        } else {
            echo "Error insert data: " . $link->error;
        }
    }

    function print1($link, $sql)
    {
        $result = mysqli_query($link, $sql);
        $data = array();
        while ($row = mysqli_fetch_array($result)) {
            $data[] = $row;
        }
        if ($data) {
            return $data;
        } else {
            return false;
        }
    }
}
