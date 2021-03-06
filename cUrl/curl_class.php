<?php
/**
 * @author hantao
 * @date 2018-01-01
 */

class Curl {
	private $url = "";
	private $data = "";
	private $curl = "";

	private function __construct($url, $data = []) {
		$this->init($url, $data);
	}

	public function init($url, $data = []) {
		$this->url = $url;
	    $this->data = $data;
	    $this->curl = curl_init();//初始化curl
		$arr = parse_url($url);
		if(isset($arr['scheme']) && $arr["scheme"] == "https"){
			date_default_timezone_set('PRC'); // 使用Cookie时，必须先设置时区
			curl_setopt($this->curl, CURLOPT_SSL_VERIFYPEER, FALSE); // 对认证证书来源的检查从证书中检查SSL加密算法是否存在
			curl_setopt($this->curl, CURLOPT_SSL_VERIFYHOST, 2); 
		}
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
		curl_setopt($this->curl, CURLOPT_POST, FALSE);  
		curl_setopt($this->curl, CURLOPT_HTTPGET, TRUE);  
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
		curl_setopt($this->curl, CURLOPT_COOKIESESSION, TRUE); 
		curl_setopt($this->curl, CURLOPT_HEADER, FALSE);
	}

	public function ftp_download($url, $file_name, $user, $passwd, $timeout=300) {
		curl_setopt($this->curl, CURLOPT_URL, $url);  
		curl_setopt($this->curl, CURLOPT_HEADER, FALSE); 
		curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, TRUE);  
		curl_setopt($this->curl, CURLOPT_TIMEOUT, $timeout); // times out after 300s
		curl_setopt($this->curl, CURLOPT_USERPWD, $user.":".$passwd);//FTP用户名：密码
		// Sets up the output file
		$outfile = fopen($flie_name, 'wb');//保存到本地的文件名
		curl_setopt($this->curl, CURLOPT_FILE, $outfile);
			
		$rtn = curl_exec($this->curl);  
		fclose($outfile); 
		if(!curl_errno($this->curl)){
			return TRUE;  
		} else {
			return FALSE;
		}
		
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
			return TRUE;  
		} else {
			return FALSE;
		}
	}
	public function close_curl() {	
		
	}
	public function request() {
	
		
	}
	public function __destruct() {
		curl_close($this->curl);			// 关闭cURL
	}
}
?>
