<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$_GET</title>
</head>
<body>
    <p>用来获取由浏览器通过GET方法提交的数据。GET方法他是通过把参数数据加在提交表单的action属性所指的URL中，值和表单内每个字段一一对应，然后在URL中可以看到，但是有如下缺点： </p>
    <ol>
        <li>安全性不好，在URL中可以看得到</li>
        <li>传送数据量较小，不能大于2KB。 </li>
    </ol>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name:
        <input type="text" name="fname" id="fname">
        <button type="submit" id="submit">Submit</button>
    </form>
    <?php
        $name = $_GET['fname'];
        echo $name;
    ?>

    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $('#submit').click(function() {
            var newAction = $('form').eq(0).attr('action') + '?fname=' + $('#fname').val();
            $('form').eq(0).attr('action',newAction);
        })
    </script>
</body>
</html>