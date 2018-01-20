<?php
/**
 * Created by PhpStorm.
 * User: hantao
 * Date: 18-1-20
 * Time: 上午10:38
 */
abstract class Test {
    abstract public function sayHello();
    public function eat(){
        echo "I'm eating \n";
    }
}
class MyTest extends Test {
    public function sayHello() {
        echo "hello world \n";
    }
}
$test = new MyTest();
$test->sayHello();
$test->eat();