<?php
$str = "haha,kaka,hehe";
// 第一次调用需要传递两个参数
$tok = strtok($str, ",");
while ($tok) {
	echo $tok;
	echo "\n";
	$tok = strtok(",");
}

?>
