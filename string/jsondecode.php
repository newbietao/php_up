<?php
$arr = array(
	"hello" => "你好",
	"world" => "世界"
);
var_dump(json_encode($arr));
$str = '{"hello":"\u4f60\u597d","world":"\u4e16\u754c"}';
var_dump(json_decode($str));
?>
