<?php
/**
 * Created by PhpStorm.
 * User: hantao
 * Date: 18-1-18
 * Time: 下午7:35
 */
class Static_class {
    public static $name = 'hantao';
    public static function sayHello() {
        echo "hello world!\n";
    }
    public static function sayName() {
        // 静态方法只能调用静态属性
        echo self::$name,"\n";
    }
}
// 调用静态方法
Static_class::sayHello();
// 调用静态属性
echo Static_class::$name,"\n";
Static_class::sayName();