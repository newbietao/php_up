<?php
	$pattern = "/(?i:[a-z]{3})([0-9]{3})/";
	$subject = "aBc123efg456";
	$arr1 = array();
	$arr2 = array();
	//preg_match($pattern,$subject,$arr1);
	//preg_match_all($pattern,$subject,$arr2);
	//print_r($arr1);
	//echo "\n";
	//print_r($arr2);
	preg_match("/I like ((?i)phP)/","I like php",$arr1);
	print_r($arr1);


?>
