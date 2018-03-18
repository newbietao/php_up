<?php
//全局变量
$str = "hello world";
function sayHello($name) {
	// 局部变量
	$str = "hello $name \n";
	echo $str;
}

sayHello("world");
echo $str."\n";

$sum = 0;
$num1 = 1;
$num2 = 2;

function add($num1, $num2) {
	global $sum; // 声明全局变量
	$sum = $num1 + $num2;
	return $sum;
}
echo add($num1, $num2)."\n";
echo "$sum \n";

function counts() {
	static $counts = 1;
	$counts += 1;
	echo $counts."\n";
}
echo "------------\n";
counts();
counts();



?>
