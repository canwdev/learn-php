<?php
// 使用这种语法可以输出大量内容
echo <<<EOF
    <h1>我是标题</h1>
    <p>我是一个段落</p>
EOF;
// 结束需要独立一行且前后不能空格


$aa = 'hello world';
$content = <<<EOF
    内容是：{$aa}
    123123
EOF;
echo $content;
?>