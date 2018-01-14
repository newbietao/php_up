<?php

// 声明一个命名空间
namespace demo1 {

	function sayHello() {
		echo "hello\n";
	}


}

namespace demo2 {
	// 在命名空间里调用其他命名空间里的函数
	\demo1\sayHello();
}

// 全局空间
namespace {
	// 在全局空间里面调用其他命名空间里的函数
	demo1\sayHello();
}




?>