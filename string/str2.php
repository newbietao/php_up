<?php
	$str = "hello world";
	// 访问字符串的单个字符
	$len = strlen($str);
	echo $len . "\n";
	for($i=0;$i<$len;$i++){
		echo "{$i}th is {$str[$i]}\n";
	}
	// 字符串函数
	// trim() 删除字符串首尾空格，ltrim删除左边空格，rtrim删除右边空格
	$str = "    hello   ";
	echo trim($str)."\n";
	echo ltrim($str)."\n";
	echo rtrim($str)."\n";
	

	// 改变大小写
	$str = "hello";
	echo strtoupper($str)."\n";
	$str = "WORLD";
	echo strtolower($str)."\n";
	// 字符串首字母大小
	$str = "hello world";
	echo ucfirst($str)."\n";
	echo ucwords($str)."\n";










?>
