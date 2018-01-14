<?php
	/**
	 * 单例模式
	 */
	class Single {
		private static $_instance = null;
		private function __construct() {
			echo "单例模式的构造函数","</br>";
		}
		public function __destruct() {
			echo "单例模式的析构函数","</br>";
		}
		public static function getInstance() {
			if(is_null(self::$_instance)){
				$class = __CLASS__;
				self::$_instance = new $class();
		}
			return self::$_instance;
		}
		public function test() {
			echo "test","</br>";
		}

	}
	$test = Single::getInstance();
	$test->test();

?>