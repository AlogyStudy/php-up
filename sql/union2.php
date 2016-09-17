<?php

	header('Content-type: text/html; charset=utf-8');

	/**
	 * 商城留言板
	 * 
	 * 一般情况下，做留言板的显示很容易。
	 * 直接select 查询，再显示出来。
	 * 
	 * 但是ecshop中的留言板难点在于
	 * 留言条数来自于2张表。
	 * feedback 留言表
	 * comment 评论表
	 * 
	 * 需要把两张表中的数据都取出来，显示结果。
	 */
	 
	/**
	 * 思路：从业务逻辑层，用PHP来解决问题
	 * 1. 先取出feedback 表，循环取出数据，放入一个数组
	 * 2. 再取出comment 表，循环取出数据，放入一个数组
	 * 3. 取出的两个数组合并
	 * 4. 循环合并后的数组
	 */ 
	
	$counn = mysql_connect('localhost', 'root', '');
	
	$sql = 'use ecshop';
	mysql_query($sql, $counn);	
	 
	$sql = 'set names utf8';
	mysql_query($sql, $counn);
	
	// 取出feedback表中数据
	$sql = 'select user_name, msg_content, msg_time from ecs_feedback where msg_status = 1';
	
	$feeds = array();
	$rs =	mysql_query($sql, $counn);
	
	while ( $row = mysql_fetch_assoc($rs) ) {
		
		$feeds[] = $row; 
		
	}
	
	// 取出comment表中数据
	$sql = 'select user_name, content as msg_content, add_time as msg_time from ecs_comment where status = 1';
	$rs = mysql_query($sql, $counn);
	
	$comm = array();
	while ( $row = mysql_fetch_assoc($rs) ) {
		
		$comm[] = $row;
				
	}
	
	$all = array_merge($feeds, $comm);
	
?>

<html>
	<head>
		<title></title>
	</head>
	<body>
		
		<h1>留言板</h1>
		
		<table border="1">
			<?php foreach ( $all as $v ) { ?>			
			<tr>
				<td>用户名：<?php echo $v['user_name'] ?></td>
				<td>发布时间：<?php echo $v['msg_time'] ?></td>
			</tr>
			
			<tr>
				<td colspan="2">内容： <?php echo $v['msg_content'] ?></td>
			</tr>
			
			<?php } ?>
		</table>
		
	</body>
</html>