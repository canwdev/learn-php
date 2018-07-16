<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$_POST</title>
</head>
<body>
    <p>用来获取由浏览器通过POST方法提交的数据。POST方法他是通过HTTP POST机制，将表单的各个字段放置在HTTP HEADER内一起传送到action属性所指的URL地址中，用户看不到这个过程。他提交的大小一般来说不受限制，但是具体根据服务器的不同，还是略有不同。相对于_GET方式安全性略高。</p>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name:
        <input type="text" name="fname">
        <button type="submit">Submit</button>
    </form>
    <?php
        $name = $_POST['fname'];
        echo $name;
    ?>
</body>
</html>