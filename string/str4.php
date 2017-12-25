<?php
	$str = "hello,hi,你好";
	// 分割字符串
	print_r($arr = explode(",",$str));
	echo "\n";
	// 合并字符串
	echo implode($arr)."\n";


	// 字符串位置
	echo strpos($str,"hi")."\n";
	echo strrpos($str,"hi")."\n";
	echo strstr($str,"hi")."\n";



?>
