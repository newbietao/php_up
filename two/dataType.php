<?php
// int
$num = 1000;
var_dump($num);

// float
$f = 3.14;
var_dump($f);

// string
$str = "hello world";
var_dump($str);

// boolean
$bool = true;
var_dump($bool);

// array
$arr = [12, 23, 45];
var_dump($arr);

// object
class Obj {
	function sayHello(){
		return "hello world";
	}
}
$obj = new Obj();

var_dump($obj);



?>
