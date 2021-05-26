<?php

session_start();
session_destroy();
?>
<script>
    alert('登出成功');
    location = '../index.php'
</script>