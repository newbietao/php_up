<?php
/**
 * Created by PhpStorm.
 * User: hantao
 * Date: 18-1-20
 * Time: 上午10:55
 */
 class Test {
     public function __set($name, $value)
     {
        echo $name ."=>".$value."\n";
     }
     public function __get($name)
     {
         echo "__get $name\n";
     }
     public function __toString()
     {
         echo "__toString\n";
         return "teat";
     }
     public function __invoke()
     {
         echo "__invoke\n";
     }
     public function __isset($name)
     {
         echo "__isset\n";
     }
     public function __unset($name)
     {
         echo "__unset\n";
     }
     public function __clone()
     {
         echo "__clone\n";
     }
 }
 $test = new Test();
 $test->name = "hantao";
 $age = $test->age;
 isset($test->num);
 unset($test->age);
 echo $test;
 $test();
 $test1 = clone $test;