<?php
	header("content-type:text/html;charset:utf-8");
	// 定义一个常量define函数，
	define("PI",3.14);
	// 获取一个常量
	echo PI;
	echo "</br>";
	echo constant("PI");
	echo "</br>";
	// php的系统常量
	echo __FILE__;
	echo "</br>";
	echo __LINE__;
	echo "</br>";
	// 判断一个常量是否存在
	var_dump(defined("PI"));

?>
