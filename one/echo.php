<?php
	header("content-type:text/html;charset=utf-8;");
	echo "this is my first php</br>";
	echo 'hello world!</br>';
	// php变量:$开头、有字母数字下划线组成
	$var = "我是一个变量";
	echo $var ;
	// boolean类型
	$bool = TRUE;
	var_dump($bool);
	echo "</br>";
	// string 类型
	$str = "hello world";
	var_dump($str);
	echo "</br>";
	// number 类型
	$num = 23;
	var_dump($num);
	echo "</br>";
	// NULL
	var_dump($n);
	// 单双引号混合使用
	$str = "I'm hantao";
	$str1 = '<div class="test">hello</div>';
	$str2 = "<div class=\"test\">I'm hantao</div>";
	echo $str."</br>";
	echo $str1."</br>";
	echo $str2."</br>";
	// 当引号遇见变量时
	$name = "hantao";
	$age = 23;
	echo "hello I'm $name";
	echo "</br>";
	echo "I'm $age years old";
	echo "</br>";
	echo 'hello I\'m $name';
	echo "</br>";
	echo 'I\'m $age years old';
	echo "</br>";













	
?>
