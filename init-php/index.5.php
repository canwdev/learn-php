<?php

// php的数组，有3种类型：数值数组、关联数组、多维数组

// --------- 数值数组 -------------
$tanks5_3 = array("T-34-85 (D-5T)","Pz.Kpfw. Tiger Ausf. H1","M4A2 Sherman");
print_r($tanks5_3);
echo '<br>'.$tanks5_3[0]."<br>";
// 遍历数组
for ($i=0; $i<count($tanks5_3); $i++ ) {
    echo $tanks5_3[$i]." / ";
}

echo "<hr>";// --------- 关联数组 -------------
$age = array("peter"=>"35", "Ben"=>"37");
print_r($age);
echo "<br>Peter is ".$age['peter']." years old.<br>";
// 遍历数组
foreach($age as $key => $value) {
    echo "key: ".$key.", value: ".$value."<br>";
}

echo "<hr>"; // -------- php数组的集合运算符“+” ------------
$arr1 = array("a"=>"red", "b"=>"green");
$arr2 = array("c"=>"blue", "d"=>"yellow");
$combine = $arr1+$arr2;

echo var_dump($combine);



?>