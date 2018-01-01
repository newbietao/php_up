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
				curl_setopt($this->curl, constant(strtoupper($key)), $value);
			}
		}else{
			exit('option master be a array');
		}
	}

	public function get() {
		return curl_exec($this->curl);
	}

	public function post($data) {
		$this->data = isset($data) ? $data : $this->data;
		curl_setopt($this->curl, CURLOPT_POST, TRUE);  
		curl_setopt($this->curl, CURLOPT_POSTFIELDS, $this->data);  
		curl_setopt($this->curl, CURLOPT_HTTPHEADER, array("application/x-www-form-urlencoded; charset=utf-8", 
			"Content-length: ".strlen($this->data)
				)); 
		return curl_exec($this->curl);
	}

	public function open_cookie() {
		date_default_timezone_set('PRC'); // 使用Cookie时，必须先设置时区
		curl_setopt($curlobj, CURLOPT_COOKIESESSION, TRUE); 
		curl_setopt($curlobj, CURLOPT_HEADER, FALSE);
	}

	public function ftp_download() {
	
		
	}

	public function ftp_upload($url, $localfile, $user, $passwd, $timeout=300) {
		$fp = fopen($localfile, 'r');

		curl_setopt($this->curl, CURLOPT_URL, $url);  
		curl_setopt($this->curl, CURLOPT_HEADER, FALSE); 
		curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, TRUE);  
		curl_setopt($this->curl, CURLOPT_TIMEOUT, $timeout); // times out after 300s
		curl_setopt($this->curl, CURLOPT_USERPWD, $user.":".$passwd);//FTP用户名：密码

		curl_setopt($this->curl, CURLOPT_UPLOAD, TRUE);
		curl_setopt($this->curl, CURLOPT_INFILE, $fp);
		curl_setopt($this->curl, CURLOPT_INFILESIZE, filesize($localfile));
		$rtn = curl_exec($this->curl);  
		fclose($fp); 
		
		if(!curl_errno($this->curl)){
			echo "Uploaded successfully.";  
		} else {
			echo 'Curl error: ' . curl_error($curlobj);
		}
	}
	public function close_curl() {	
		curl_close($this->curl);			// 关闭cURL
	}
	public function request() {
	
		
	}
}






?>
