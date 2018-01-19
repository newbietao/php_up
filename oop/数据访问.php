<?php
/**
 * Created by PhpStorm.
 * User: hantao
 * Date: 18-1-18
 * Time: 下午9:06
 */
class Parents {
    public function __construct()
    {
        echo "父类构造函数\n";
    }
    public function test() {
        echo "test \n";
    }
    public $name = "hantao";
    public static $age = 23;
    public static function test1() {
        echo "test1 \n";
    }
}

class Child extends Parents {
    public function __construct()
    {
        /**
         * parent 关键字能访问的数据
         * @1 父类的静态属性
         * @2 父类的静态方法
         * @3 父类的公有方法
         * @4 父类的受保护方法
         */
        // parent 关键字访问父类的构造函数
        parent::__construct();
        // parent 关键字访问父类的方法
        parent::test();
        // parent 关键字访问父类的静态方法
        parent::test1();
        // parent 关键字访问父类的静态属性
        echo parent::$age,"\n";
        // parent 关键字访问父类的属性
        // echo parent::$name,"\n"; 报错

    }

    /**
     * $this 关键字
     * @1 能访问内部的公有、私有、受保护属性
     * @2 能访问内部的公有、私有、受保护方法
     */
    public $home = "liaoning";
    public function changeHome($home) {
        // $this 访问内部属性
        $this->home = $home;
        // $this 访问内部方法
        $this->getHome();
    }
    public function getHome() {
        echo "hello $this->home \n";
    }



}
$test = new Child();
$test->getHome();
$test->changeHome("beijing");
$test->getHome();
