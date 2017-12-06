<?php
	// while
	$n = 1;
	while($n<10){
		echo $n;
		echo "</br>";
		$n++;
	}


	// for
	for($i=0; $i<10; $i++){
		echo $i;
		echo "</br>";
	}
	// foreach
	$arr = array(
		0 => "苹果",
		1 => "香蕉",
		2 => "鸭梨"
	);
	foreach($arr as $key => $value){
		echo $key ."=>". $value;
		echo "</br>";
	}
	// 







?>
