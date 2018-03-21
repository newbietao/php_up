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
	str

);








?>
