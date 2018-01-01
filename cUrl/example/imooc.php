<?php
require("../curl_class.php");
$curl = new Curl('http://www.imooc.com/user/login');
$curl->open_cookie();
$data = "username=newbietao@163.com&password=***********&remember=1";
$curl->curl_set(array(
	"CURLOPT_FOLLOWLOCATION" => TRUE
));
echo $curl->post($data);
$curl->curl_set(array(
	"CURLOPT_URL" => "http://www.imooc.com/space/index",
	"CURLOPT_POST" => FALSE,
	"CURLOPT_HTTPHEADER" => array("Content-type: text/xml"
		)
));
echo $curl->get();






?>
