<?php

// 向网页输出内容
echo '<h1>Hello PHP</h1>';
// 向网页输出内容
print "<h1>我要学习 PHP!</h1>";

// 弱类型变量
$n1 = 5;
$n2 = 7;
// 计算
$result = $n1 + $n2;

echo $result;

$arr = [1, 2, 3, 4, 5, 6];

// 向console输出数据
debug_to_console($arr);

// 向网页输出内容+变量
print "<h1>{$n1}内容，{$arr[1]}</h1>";

function debug_to_console($data)
{
    $output = $data;
    if (is_array($output)) {
        $output = implode(',', $output);
    }

    echo "<script>console.log( 'php> " . $output . "' );</script>";
}
