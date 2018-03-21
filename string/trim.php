<?php
// trim 函数的实例
$str = "   hello world   ";
$trimed = trim($str);
$ltrim = ltrim($str);
$rtrim = rtrim($str);
var_dump($trimed, $ltrim, $rtrim);

// trim 数组元素
$arr = array(
	"str1" => "hello  ",
	"str2" => "   world",
	"str3" => "  hello world  "
);
var_dump($arr);
array_walk($arr, function(&$value){
	$value = trim($value);
});
var_dump($arr);




?>
