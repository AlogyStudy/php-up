<meta charset="UTF-8" />
<?php

	// 用 cookie来记录， 本网站已经访问了多少页面 
	
	// 如果是第一次访问，没有cookie信息
	
//	if ( !isset($_COOKIE['num']) ) {  // 第一次访问
//		setcookie('num', 1);
//	} else { // 存在cookie 信息
//		setcookie('num', $_COOKIE['num']+1);
//	}
//	
//	echo '这是你的第' . $_COOKIE['num'] . '次访问'; // 首次，警告. 	


		if ( !isset($_COOKIE['num']) ) {
			$num = 1;
			setcookie('num', $num);
		} else {
			$num = $_COOKIE['num'];
			setcookie('num', $num+1);
		}
		
		echo '这是你的第' . $num . '次访问';

?>