<?php
/**
 * Created by PhpStorm.
 * User: hantao
 * Date: 18-1-18
 * Time: 下午7:11
 */
class Test {
    /**
     * 访问控制
     * public 公共，在内部、子类、实例中都能访问
     * private 私有的，只能在内部使用
     * protected 受保护的，只能在内部和子类的内部访问
     */
    // 私有属性
    private $name = "hantao";

    public function sayName() {
        echo "hello $this->name\n";
    }
    // 受保护的、
    protected $age = 23;
    public function sayAge() {
        echo $this->name . "is " . $this->age . "year old\n";
    }
}
$haha = new Test();
//echo $haha->name; 会报错，因为私有属性只能在类的内部使用
//echo $haha->age;  会报错，因为受保护属性只能在类和子类的内部使用