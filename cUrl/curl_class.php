<?php
/**
 * @author hantao
 * @date 2018-01-01
 * @为了纪念我苦逼、无聊、单身的2018年元旦
 */

class Curl {
	private $url = "";
	private $data = "";
	private $curl = "";
	public function __construct($url, $data = array()) {
		$this->url = $url;
		$this->data = $data;
		$this->curl = curl_init();//初始化curl
		curl_setopt($this->curl, CURLOPT_URL, $url);
		curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
	}
	public function curl_set($option) {
		if(is_array($option)){
			foreach($option as $key => $value){
				curl_setopt($this->curl, constant($key), $value);
			}
		}else{
			exit('option master be a array');
		}
	}
	public function get() {
	
		return $this->close_curl();
	}
	public function post() {
	
		return $this->close_curl();
	}
	public function ftp_download() {
	
		return $this->close_curl();
	}
	public function ftp_upload() {
	
		return $this->close_curl();
	}
	private function doRequest() {
	
	}
	private function close_curl() {
		$output=curl_exec($this->curl);	// 执行
		curl_close($this->curl);			// 关闭cURL
		return $output;
	}
}

$t = new Curl("http://www.baidu.com");
$t->curl_set(array(
	"CURLOPT_URL" => "http://www.cnblogs.com/freephp/p/5283239.html"
));
echo $t -> get();



?>
