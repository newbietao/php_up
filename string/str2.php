<?php
	$str = "hello world";
	// 访问字符串的单个字符
	$len = strlen($str);
	echo $len . "\n";
	for($i=0;$i<$len;$i++){
		echo "{$i}th is {$str[$i]}\n";
	}


?>
