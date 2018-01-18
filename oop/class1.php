<?php
/**
 * Created by PhpStorm.
 * User: hantao
 * Date: 18-1-18
 * Time: 下午6:51
 */
// 类的声明是以class 关键字开头，然后接类名然后接花括号
class Human {
    // 声明属性
    public $height = 186;
    public $name = "hantao";
    public $age = 23;
    // 构造函数，在类被实例化时执行
    public function __construct()
    {
        echo "父类构造函数被执行了\n";
    }
    //声明方法
    public function sayHello() {
        echo "hello ". $this->name . "\n";
    }
    // 析构函数，在代码执行完执行或者是类的实例被销毁时执行
    public function __destruct()
    {
        echo "父类析构函数被执行\n";
    }

}
// 继承一个类，使用extends关键字
class Boy extends Human {
    public function __construct()
    {
        // 调用父类的构造函数
        parent::__construct();
        echo "子类的构造函数被执行\n";
    }

    public function __destruct()
    {
        // 调用父类的析构函数
        parent::__destruct();
        echo "子类的析构函数被执行\n";
    }
}
$tom = new Boy();// 实例化一个对象
$tom->sayHello();// 调用对象方法
echo $tom->name,"\n";