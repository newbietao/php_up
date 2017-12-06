<?php
	// 索引数组
	$arr1 = array("苹果","香蕉","鸭梨");
	$arr2 = array(0=>"苹果",1=>"香蕉",2=>"鸭梨");
	print_r($arr1);
	echo "</br>";
	print_r($arr2);
	echo "</br>";
	echo $arr1[1];
	echo "</br>";
	echo $arr2[1];
	echo "</br>";
	// 关联数组
	 $arr3 = array("apple"=>"苹果","banan"=>"香蕉","haha"=>"鸭梨");
	foreach($arr3 as $key => $value){
		echo $key ."=>".$value;
		echo "</br>";
	};
	
	// 获取关联数组
	echo $arr3["apple"];
	echo "</br>";
	// 二维数组
	$arr4 = array();
	for($n=0;$n<5;$n++){
		$arr4["o".$n] = array();
		for($i=0;$i<3;$i++){
			$arr4["o".$n][$i] = $i;
		}
	}
	print_r($arr4);





?>
