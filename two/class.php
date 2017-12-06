<?php
	// 声明一个类
	class Car {
		public $name = "baoma";
		public function getName() {
			return $this->name;
		}
	
	}
	$car = new Car();
	echo $car->getName();
	// 类的访问控制

	class NewCar {
		private $name = "BYD";
		public function getName() {
			return $this -> name;
		}
	}
	$byd = new NewCar();
	// echo $byd -> name;
	echo "</br>";
	echo $byd -> getName();
	echo "</br>";
	// 静态属性和方法
	class StaticClass {

		public static $name = "static Car";
		public static function getName() {
			return self::$name;
		}
	}
	$staticCar = new StaticClass();
	echo $staticCar::getName();
	echo "</br>";
	

	// 构造函数和析构函数
	class Construct {
		public function __construct() {
			echo "构造函数执行</br>";
		
		}
		public function __destruct() {
			echo "析构函数执行</br>";
		}
	}
	$xg = new Construct();
	unset($xg);
	// 属性必须有访问控制关键字
	class BYD {
		public $name = "BYD";//属性必须在前面用访问控制声明
		private function getName() {
			return $this -> name;
		}
		public function sayName() {
			echo $this->getName();
		}
		
	}
	// 构造函数被声明成私有方法后就不能直接实例化对象了，可以使用静态方法实例化对象
	class Test {
		private function __construct() {
			echo "构造函数执行</br>";
		}
		public static function construct() {
			return new Test();
		}
		public $name = "haha";
		public function sayName() {
			return $this -> name;
		}
		
	}
	$test = Test::construct();
	echo $test -> sayName();
	echo "</br>";
	// 类的继承
	class Parents {
		public function __construct() {
			echo "父类的构造函数</br>";
		}
	
	}
	class Child extends Parents {
		public function __construct(){
			parent::__construct();
			echo "子类的构造函数</br>";
		}
	}
	$child = new Child();
	

	// 重载
	class CZ {
		private $arr = array();
		public function __set($key,$value) {
			$this->arr[$key] = $value;
		}
		public function __get($key) {
			if(isset($this->arr[$key])){
				return $this -> arr[$key];
			}
			return null;
		}
		public function __isset($key) {
			if(isset($this->arr[$key])){
				return true;
			}
			return false;
		}
		public function __unset($key){
			unset($this->arr[$key]);
		
		}
		public function __call($name,$args) {
			if($name == "sayHello"){
				echo "hello";
			}
		}


	}
	$cz = new CZ();
	$cz->name = "hantao";
	echo $cz->name;
	echo "</br>";
	$cz -> sayHello();









?>
