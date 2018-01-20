<?php
/**
 * Created by PhpStorm.
 * User: hantao
 * Date: 18-1-20
 * Time: 上午10:17
 */

/**
 * Interface Template
 * 使用interface 声明接口，借口内部的方法不用具体实现
 */
interface Template {
    public function add($num);
    public function sum($num1,$num2);
}

/**
 * implements 关键字可以让一个类实现接口
 * 实现接口的类必须在类中将接口中的方法具体实现
 */
class Num  implements Template {
    public $num = 0;
    public function add($num) {
        $this->num += $num;
    }
    public function sum($num1,$num2) {
        return $num1 + $num2;
    }
    public function getNum() {
        echo $this->num,"\n";
    }
}
$test = new Num();
$test->add(1);
$test->add(1);
$test->add(1);
$test->getNum();