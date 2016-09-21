<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		
		<?php 
			
			$conn = mysql_connect('localhost', 'root', '');
			
			$sql = 'set names utf8';
			mysql_query($sql, $conn);
			
			
			
			$sql = 'use zf';
			/**
			 * 网页utf8 ， 因此client 是utf8
			 * 表 utf8 , 连接器utf8
			 * 返回值 utf8
			 * 
			 * 因此 set names utf8
			 * 
			 * 牵涉到数据库，不乱码
			 * 1. 正确指定客户端的编码
			 * 2. 合理选择连接器的编码
			 * 3. 正确指定返回内容编码
			 */
			
		?>	
		
	</body>
</html>
