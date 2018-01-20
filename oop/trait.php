<?php
/**
 * Created by PhpStorm.
 * User: hantao
 * Date: 18-1-20
 * Time: 下午4:17
 */
trait test1 {
    public function sayHello() {
        echo "hello \n";
    }
}
trait test2 {
    public function sayWorld() {
        echo "world \n";
    }
}
class test3 {
    use test1,test2;
}
$test = new test3();
$test->sayHello();
$test->sayWorld();