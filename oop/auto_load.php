<?php 
spl_autoload_register(function($class){
	require __DIR__."/".$class.".php";
});
auto_load1::sayHello();
auto_load2::sayHello();
 ?>