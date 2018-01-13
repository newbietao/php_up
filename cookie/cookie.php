<?php
	/**
	 * @author hantao newbietao@163.com
	 * 
	 */
	class Cookie{
		private static $object = null;
		private $expire = 0;
		private $path = "";
		private $domain = "";
		private $secure = false;
		private $httponly = false;

		private function __construct($option) {
			$this->setOption($option);
		}
		/**
		 * 设置cookie选项
		 *
		 * @param array $option cookie选项
		 */
		private function setOption($option) {
			if(isset($option['expire']) && !empty($option['expire'])){
				$this->expire = (int)$option['expire'];
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
		private function set_cookie($name, $value, $option = []) {
			$this->setOption($option);
			setcookie($name,$value,$this->expire,$this->domain,$this->secure,$this->httponly);
		}
		/**
		 * 构建cookie类的单列模式
		 *
		 * @param  array $option 设置cookie的选项
		 *
		 * @return object self::$object 返回当前类的对象或者是null
		 */
		public static function getInstance($option = []) {
			if(is_null(self::$object)){
				$class = __CLASS__;
				self::$object = new $class($option);
			}
			return self::$object;
		}
		/**
		 * 设置cookie
		 *
		 * @param string $name   cookie name
		 * @param mixed $value   cookie value
		 * @param array  $option 其他选项
		 */
		public function set($name, $value, $option = []) {
			if(is_array($option) && count($option)>0){
				$this->setOption($option);
			}
			if(is_array($value) || is_object($value)){
				$value = json_encode($value);
			}
			$this->set_cookie($name,$value);
		}
		/**
		 * 获取cookie
		 *
		 * @param  string $name cookie name
		 *
		 * @return mixed 返回null或者是cookie的值
		 */
		public function get($name) {
			if(!isset($_COOKIE[$name])) return null;

			$res = $_COOKIE[$name];
			return substr($res,0,1) == "{" ? json_decode($res) : $res;
		}
		/**
		 * 删除cookie
		 *
		 * @param  string $name   cookie name
		 *
		 * @return boolean
		 */
		public function delete($name) {
			if(!isset($_COOKIE[$name])) return false;
			$this->set_cookie($name,"",['expire'=>time()-1]);
			return true;

		}
		/**
		 * 删除全部cookie
		 *
		 */
		public function deleteAll() {
			foreach ($_COOKIE as $key => $value) {
				$this->delete($key);
			}
		}
	}
	$cookie = Cookie::getInstance();
	// $cookie->set('userinfo[name]','hantao');
	// $cookie->set('userinfo[age]','23');
	// $cookie->set('userinfo[home]','liaoning');
	var_dump($_COOKIE);
?>