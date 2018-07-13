<?php

// 使用define函数设置常量，默认区分大小写
define(HELLO, 'hello world');

echo HELLO;
print('<br>');
echo hello;

print('<hr>');
// ---------- 常量是全局的 -----------
function myTest() {
    echo HELLO;
}
myTest();

?>