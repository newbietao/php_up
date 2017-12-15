<?php
	$str = "hello world";
	$len = strlen($str);
	for($i=0;$i<$len;$i++){
		printf("the %dth character is %s\n",$i,$str[$i]);
	}
	echo $str[0]."\n";
	echo htmlentities("<div>hello</div>");
	$url = "https://www.baidu.com/s?ie=UTF-8&wd=PHP%20%E5%AD%97%E7%AC%A6%E4%B8%B2%E5%87%BD%E6%95%B0";
	$arr = parse_url($url);
	print_r($arr);
	echo "\n";
	// 单引号字符串
	$str1 = 'hello world';// 将字符串放到单引号里面
	$str2 = 'hello "world"';// 在单引号里面可以放双引号，同样双引号也可以放单引号。
	$str4 = 'I\'m hantao';// 单引号里放单引号
	echo $str4 . "\n";
	// 双引号字符串
	$str3 = "I'm hantao";
	// 同样双引号里面也可放双引号
	$str5 = "I'm \"hantao\"";
    echo $str5 . "\n";
	// heredoc类型字符串
	$str6 = <<<hello
		hello world
		I'm a boy
hello;
	echo $str6 . "\n";
	// 变量插值
	$name = "hantao";
	$str7 = "hello $name";
	echo $str7."\n";
	$str8 = "hello {$name}I'm Tom";
	echo $str8 . "\n";




?>
