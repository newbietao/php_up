<?php 
	class cookie{
		private static $object = null;
		private function __contract() {

		}
		public static function getInstance($option) {
			if(is_null(self::$object)){
				$class = __CLASS__;
				self::$object = new $class($option);
			}
			return self::$object;
		}
		public function set($name, $vuale) {

		}

		public function get($name) {

		}
	}
?>