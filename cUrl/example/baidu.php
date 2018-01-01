<?php
require("../curl_class.php");
$curl = new Curl("http://www.baidu.com");
echo $curl->get();







?>
