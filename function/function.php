<?php
	// 函数的命名：字母、下划线开头紧接着是字母、下划线、数字
	/**
	 * 函数名不区分大小写、函数名最好是动词，并且遵循驼峰命名或者是下划线命名
	 * 函数使用function关键字进行声明，函数在调用时才会执行，遇见return或者执行到函数尾终止函数执行
	 **/
	 function sayHello() {
	 	return "hello </br>";
	 }
	function getName() {
		return "hantao";
	}
	echo getName() ." ". sayHello();
	// 默认参数
	function sum($i=10,$k=20) {
		return $i + $k;
	}
	echo sum();
	echo "</br>";
	echo sum(1,2);
	echo "</br>";
	echo sum(5);
	echo "</br>";
	// 函数作用域
	function scope() {
		$n = "hello"; // 局部变量在全局不能访问
	}
	scope();
	var_dump(isset($n));
	echo "</br>";
	$m = "haha"; //全局变量，在函数内不能访问
	function test() {
		var_dump(isset($m));
	}
	echo "</br>";
	test();
	function test2() {
		global $h;
		$h = "haha";
	}
	var_dump(isset($h));
	echo "</br>";
	// 静态变量,在函数内使用static关键字声明的变量

	function test1() {
		static $i = 1;
		echo $i . "</br>";
		$i++;
	} 
	test1();
	test1();
	test1();
	test1();
	// 在函数中使用全局变量
	$n = 123;
	function test3() {
		global $n;
		echo $n . "</br>";
	}
	test3();
	function test4() {
		global $n;
		$n = 234;
		echo $n . "</br>";
	
	}
	test4();
	echo $n;
	echo "</br>";
	
	// 在函数里面声明全局函数
	function test5() {
		global $a;
		$a = 456;
		echo $a . "</br>";
	
	}
	test5();
	echo $a;
	echo "</br>";













?>






