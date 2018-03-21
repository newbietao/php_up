<?php
	// 声明一个空数组
	$arr = [];
	var_dump($arr);
	// 当为数组元素赋值时不指定下标，会默认从0开始以此赋值
	$arr[] = 12;
	$arr[] = 13;
	$arr[] = 14;
	$arr[] = 15;
	$arr[] = 16;
	print_r($arr);

?>
