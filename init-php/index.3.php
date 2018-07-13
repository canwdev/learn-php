<?php
// String（字符串）, Integer（整型）, Float（浮点型）, Boolean（布尔型）, Array（数组）, Object（对象）, NULL（空值）。
// 使用var_dump()判断一个变量的类型与长度，并输出变量的数值

print('<hr>');// ---------- 字符串 ----------------
$str = 'this is a string';
var_dump($str);

print('<hr>');// ---------- 整型 ------------------
$num1 = 10;
var_dump($num1);

print('<hr>');// ------------ 浮点型 ------------------
$num2 = 8.66666666666666666666666;
var_dump($num2);

print('<hr>');// ------------ 布尔 ------------------
$real = true;
var_dump($real);

print('<hr>');// ----------- 数组 ------------------
$arr = [8, 6, 4];
var_dump($arr);

print('<hr>');// ------------ 对象 ------------------
// 对象的一个类
class Car {
    // 变量
    var $color;
    // 构造函数
    function __construct($color="green") {
        $this->color = $color;
    }
    // 方法
    function whatColor() {
        return $this->color;
    }
}
// 实例化一个对象
$posche = new Car("grey");
var_dump($posche);
// echo $posche->color;
echo printVars($posche);

// 打印对象中的所有变量
function printVars($obj) {
    foreach (get_object_vars($obj) as $prop => $val) {
      echo "<p>$prop = $val</p>";
    }
 }

print('<hr>');// -------------- NULL ------------------
$x = 123;
$x = NULL;
var_dump($x);

?>