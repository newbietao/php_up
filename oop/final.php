<?php
/**
 * Created by PhpStorm.
 * User: hantao
 * Date: 18-1-19
 * Time: 下午8:42
 */

class Final_test１ {
    final public function test() {
        echo "我是不能被子类重写的\n";
    }
}
final class Final_test２ {
    public function test() {
        echo "我是不能被子类重写的\n";
    }
}
class Child extends Final_test {
    // final声明的方法不能在子类中被重写
    //public function test() {
        //echo "我要重写父类的方法\n";
    //}
}
//　使用final关键字声明的类不能被继承
//class Child１ extends Final_test２ {}