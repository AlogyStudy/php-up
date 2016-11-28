<meta charset="UTF-8"/>

<?php
	
//	setcookie($name, $value, $expire, $path, $domain, $secure, $httponly);

	setcookie('pink', 'p'); // cookie 随着浏览器的关闭，就失效

	setcookie('age', 23, time() + 15); // 第三个参数， cookie的生命周期，以时间戳为单位    (time()+15) 以当前时间加十五秒
	setcookie('school', 'MBA', time() + 3600); // 一个小时之后无效
	
	
	/**
	 * cookie 的作用域
	 * 一个页面设置cookie，
	 * 默认在其同级目录下，及其子目录下可以读取。
	 * 
	 * 如果想让cookie整个站有效果，可以在根目录下setcookie()
	 * 也可以使用第四个参数，来指定cookie生效路径
	 */
	
	setcookie('global', 'any where!', time() + 3600, '/');
	
	/**
	 * cookie 是不能够跨域名(否则存在安全问题)
	 * 
	 * 例如： sohu.com 的cookie，不能被发送到sina.com下使用。
	 * 但是可以在一个域名的子域名下使用.
	 * 可以使用第五个参数
	 */
	setcookie('key', 'val', time() + 3600, '/', '.linxingzhang.com'); // 这个cookie在 m.linxingzhang.com , wap.linxingzhang.com 中都可以使用.
	
		 
	echo '设置成功';	
	
?>