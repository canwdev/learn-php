<?php

// PHP 超级全局变量

// ----- $GLOBALS[] -----
// 用于获取全局变量
$x = 'zis-30';
function test() {
    echo $GLOBALS['x'];
}
test();
echo "<br>";


// ----------- $_SERVER ---------------
// 包含了服务器信息
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

// -------------- $_REQUEST -------------------


?>