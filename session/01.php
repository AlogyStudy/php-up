<?php

	// cookie 由浏览器带着，如果被篡改了， 如何做.
	// cookie 往往用来记住用户名，浏览历史，等安全性要求不高的地方.		
	
	session_start(); // 开启session
	
	echo $_SESSION['user'] = 'pink';
	
?>