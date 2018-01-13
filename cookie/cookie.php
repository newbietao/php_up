<?php
	/**
	 * @author hantao newbietao@163.com
	 * 
	 */
	class cookie{
		private static $object = null;
		private $expire = 0;
		private $path = "";
		private $domain = "";
		private $secure = false;
		private $httponly = false;

		private function __contruct($option) {
			$this->setOption($option);
		}
		/**
		 * 设置cookie选项
		 *
		 * @param array $option cookie选项
		 */
		private function setOption($option) {
			if(isset($option['expire']) && !empty($option['expire'])){
				$this->expire = $option['expire'];
			}
			if(isset($option['path']) && !empty($option['path'])){
				$this->path = $option['path'];
			}
			if(isset($option['domain']) && !empty($option['domain'])){
				$this->domain = $option['domain'];
			}
			if(isset($option['secure']) && !empty($option['secure'])){
				$this->secure = $option['secure'];
			}
			if(isset($option['httponly']) && !empty($option['httponly'])){
				$this->httponly = $option['httponly'];
			}
		}
		/**
		 * 设置cookie
		 *
		 * @param string $name  cookie name
		 * @param mixed $value cookie value
		 */
		private function set_cookie($name,$value) {
			setcookie($name,$value,$this->expire,$this->domain,$this->secure,$this->httponly);
		}
		/**
		 * 构建cookie类的单列模式
		 *
		 * @param  array $option 设置cookie的选项
		 *
		 * @return object self::$object 返回当前类的对象或者是null
		 */
		public static function getInstance($option) {
			if(is_null(self::$object)){
				$class = __CLASS__;
				self::$object = new $class($option);
			}
			return self::$object;
		}

		public function set($name, $vuale，$option = []) {
			if(is_array($option) && count($option)>0){
				$this->setOption($option);
			}
			if(is_array($value) || is_object($value)){
				$value = json_decode($vlue);
			}
			$this->set_cookie($name,$value);
		}

		public function get($name) {

		}

		public function delete() {

		}

		public function deleteAll() {

		}
	}
?>