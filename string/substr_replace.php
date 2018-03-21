<?php
// substr_replace 替换\插入\删除
$str = "hello world";
// 将world替换为WORLD
echo substr_replace($str,"WORLD",6,5);
echo "\n";
$replace = "haha";
// 在开头插入
echo substr_replace($str,$replace,0,0);
echo "\n";
// 在末尾插入
echo substr_replace($str,$replace,strlen($str));
echo "\n";
// 删除
echo substr_replace($str,"",6,5);
echo "\n";

// 数组元素的替换\插入\删除
$strarr = array(
	"str1" => "AAAAA",
	"str2" => "BBBBB"
);
$replace = array(
	"rep1" => "BBB",
	"rep2" => "AAA"
);
$start = array(
	"start1" => 1,
	"start2" => 2
);
$len = array(
	"len" => 2,
	"len2" => 3

);
var_dump($strarr);
var_dump(substr_replace($strarr,$replace,$start,$len));








?>
