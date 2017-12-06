<?php
	if(TRUE){
		echo "hello world"; 
	}
	echo "</br>";
	$fen = 87;
	if($fen > 90){
		echo "优秀";
	}else if($fen >80){
		echo "良好";
	}else if($fen >70){
		echo "良";
	}else if($fen > 60){
		echo "及格";
	}else{
		echo "不及格";
	}
	echo "</br>";
	
	// switch 语句
	switch(true){
		case $fen > 90 :
			echo "优秀";
			break;
		case $fen > 80 :
			echo "良好";
			break;
		case $fen > 70 :
			echo "良";
			break;
		case $fen > 60 :
			echo "及格";
			break;
		default :
			echo "不及格";
	
	}






