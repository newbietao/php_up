<?php
	include "../curl_class.php";
	$curl = new Curl();
	for($i=0;$i<20;$i++){
		$curl->curl_set(array(
			"CURLOPT_URL" => "http://123.206.83.64/php_up/cUrl/example/test.php?req=".$i
		));
		echo $curl->get(""),"\n";
	}


?>
