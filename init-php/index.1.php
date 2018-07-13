<?php

// php的作用域

// ---------局部和全局作用域------------

$x = 5;
$y = 6;

function test(){
    $y = 888;
    echo '<p>直接访问全局变量$x='.$x.'</p>';   // 不能直接访问全局变量！php的字符串连接符是点“.”而不是“+”
    echo '<p>局部变量$y='.$y.'</p>';


    // 函数内访问全局变量需要 global 关键字或者使用 $GLOBALS[index] 数组
    global $x;
    echo '<p>使用global关键字访问全局变量$x='.$x.'</p>';
    echo '<p>使用$GLOBALS[index]数组访问全局变量$y='.$GLOBALS['y'].'</p>';
    echo '<br>';
}
test();

echo '<p>在外部访问$x='.$x.'</p>'; 
echo '<p>在外部访问$y='.$y.'</p>';

echo '<hr>';
// -------------static关键字-----------

// 使用static关键字，当一个函数执行完成之后这个变量不会被删除

function testStatic() {
    static $number = 0;
    $number++;
    echo $number;
}

testStatic();
testStatic();
testStatic();

echo '<hr>';
// ----------------参数作用域--------------

// 通过传值获取到的变量
function testValue($str){
    echo $str;
}

testValue('Hello world');
