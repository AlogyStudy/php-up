<?php

	// 创建，修改，销毁
	session_start();
	
	$_SESSION['user'] = 'pink';
	$_SESSION['jiaxiang'] = 'fujian';
	
	echo 'ok';	

?>