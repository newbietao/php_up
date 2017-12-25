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


	// url 解码
	$url = "https://www.google.com.hk/search?q=%E8%8F%9C%E9%B8%9F%E6%95%99%E7%A8%8B&oq=cai&aqs=chrome.1.69i57j0l5.2271j0j7&sourceid=chrome&ie=UTF-8";
	echo urlencode($url)."\n";
	echo urldecode($url)."\n";







?>
