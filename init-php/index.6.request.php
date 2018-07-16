<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$_REQUEST</title>
</head>
<body>
    <p>php中$_REQUEST可以获取以POST方法和GET方法提交的数据，但是速度比较慢 </p>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name:
        <input type="text" name="fname">
        <button type="submit">Submit</button>
    </form>
    <?php
    
        $name = $_REQUEST['fname'];
        echo $name;
    ?>
</body>
</html>