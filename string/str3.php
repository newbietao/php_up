<?php
	// 获取子字符串
	$str = "hello world";
	echo substr($str,6,5)."\n";
	// 计算子字符串在父字符串中出现的次数
	echo substr_count($str,"l")."\n";
	// 字符串长度
	echo strlen($str)."\n";// 返回字符串长度
	// 子字符串替换,不改变原字符串
	// 替换
	echo substr_replace($str,"hantao",6,5)."\n";
	// 删除
	echo substr_replace($str,"",6,5)."\n";
	// 插入
	echo substr_replace($str,"hantao",6,0)."\n";
	

	// 反转字符串
	echo strrev($str)."\n";
	// 重复字符串
	echo  str_repeat($str,2)."\n";
	// 填充字符串
	echo str_pad($str,16,"*")."\n";





















?>
