<?php
	// 赋值运算符
	$a = 1;
	$b = $a;
	echo $a + $b;
	echo "</br>";
	$b = 3;
	echo $b + $a;
	$b = &$a;
	$b = 3;
	echo "</br>";
	echo $b + $a;

	// 比较运算符
	$c = 11;
	$d = 22;
	var_dump($c == $d);
	echo "</br>";
	var_dump($c !== $d);
	echo "</br>";
	var_dump($a <> $d);
	echo "</br>";
	var_dump($c < $d);
	echo "</br>";
	var_dump($c > $d);
	echo "</br>";
	
	// 三元运算符
	echo $c > $d ? 'hello' : 'world';
	echo '</br>';
	
	// 逻辑运算符
	echo TRUE && $d;
	echo "</br>";
	echo FALSE || $d;
	echo "</br>";
	var_dump(!FALSE);

	echo "</br>";
	// 错误控制符
	echo $f;
	echo "</br>";
	// 字符串连接符
	$str1 = "hello";
	$str2 = "world";
	echo $str1 . $str2;
	echo "</br>";
	// 





?>
