<?php

	// 一个session，有2方面的数据共同发挥作用
	// 1：客户端的cookie
	// 2： 服务器端的session文件

	// 删除也是要从这两个方面去删除	

	// 在php.ini 中， `session.cookie_lifetime = 15`; // 控制sessionid的cookie的声明周期，以秒为单位
	
	// 注意: 如果用户修改cookie，让cookie的生命周期为1年.也无法判断。
	//  $_SESSION['time'] = 登陆时的时间戳
	// 检验session的开启时间
		
	
?>