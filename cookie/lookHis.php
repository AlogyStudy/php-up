<?php

	/**
	 * 浏览历史
	 */
	 
	echo $_SERVER['REQUEST_URI'];
	
	$id = isset($_GET['id']) ? $_GET['id'] : 0;

	$uri = $_SERVER['REQUEST_URI'];
	
	// cookie只能存放字符串，数字，不能存储数组，资源这样的多维数据.
	// 把uri放入cookie里
//	setcookie('history', array($uri));

	if ( !isset($_COOKIE['history']) ) { // 第一次访问
		$his[] = $uri;
	} else { // 第n次访问
		$his = explode(',', $_COOKIE['history']);		 
		array_unshift($his, $uri);
		$his = array_unique($his);
		// 最多十条
		if ( count($his) >= 10 ) {
			array_pop($his);
		}
		
	}
	setcookie('history', implode(',', $his));
?>

<p>
	<a href="lookHis.php?id=<?php echo $id-1; ?>">上一页</a>
</p>

<p>	
	<a href="lookHis.php?id=<?php echo $id+1; ?>">下一页</a>
</p>

<ul>
	<li>浏览历史</li>
	<?php foreach( $his as $v ) {?>
		<li><?php echo $v;?></li>
	<?php };?>
</ul>
