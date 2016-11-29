<?php

	session_start();
	
	$_SESSION['jiaxiang'] = 'xiamen';
	unset($_SESSION['user']);
	
	// 1. 可以单独销毁某个单元 ，即把$_SESSION数组某一个单元`unset()`
//	unset($_SESSION['user']);
	
	// 2. 可以把整个$_SESSION销毁
//	$_SESSION = array(); // 临时存储的文件中的内容不存在 
	
	// 	3. 利用函数把箱子整体清空
//	session_unset($_SESSION); // 临时存储的文件中的内容不存在

	// 4. 把文件销毁.
	session_destroy();

?>