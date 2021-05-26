<?php include_once "./vendor/autoload.php" ?>
<html>

<head>

</head>

<body>
    <h1>新增留言</h1>

    <form action="src/Controllers/Message/Create.php" method="post">
        標題：<input type="text" name="title"><br>
        內文：<input type="text" name="content"><br>
        <input type="submit" value="送出">
    </form>

    <hr>

    <h1>留言列表</h1>
    <ul>
        <?php

        use App\Repositories\MessageRepository;

        $messageRepository = new MessageRepository();
        $messages = $messageRepository->getMessages();
        foreach ($messages as $message) {
        ?>
            <li>
                標題：<?= $message['title']; ?>
            </li>

            <li>
                內文：<?= $message['content'] ?>
            </li>

            <li>
                留言時間：<?= $message['created_at']; ?>
            </li>
            <a href="src/Controllers/Message/delete.php?id=<?= $message['id'] ?>">
                <button>刪除</button>
            </a>

            <hr>
        <?php } ?>
    </ul>
</body>

</html>