<?php

	$conn = mysql_connect('localhost', 'root', '');
	
	$sql = 'use zf';
	
	mysql_query($sql, $conn);
	
	$sql = 'set names utf8';
	
	mysql_query($sql, $conn);
	
	$sql = 'select goods_name, cat_id, goods_number, shop_price from goods';
	
	$rs = mysql_query($sql, $conn);
	
	$list = array();
	while ( $row = mysql_fetch_assoc($rs) ) {
	
		/**
		 * 根据$row 中的cat_id 在此查询category表
		 * 每循环一次，又要查询另一张表
		 * 因此，查询 1+N 次.
		 */
		$sql = 'select cat_name from category where cat_id = ' . $row['cat_id'];
		
		$rs2 = mysql_query($sql, $conn);
		
		$cat = mysql_fetch_assoc($rs2);
		
		$row['cat_name'] = $cat['cat_name'];
		
		$list[] = $row;
		
	}
	
?>

<html>
	<head>
		<title></title>
		<mate charset="utf-8" />
	</head>
	<body>


		<h1>报价单</h1>
		
		<table border="1">
			<tr>
				<td>商品名称</td>
				<td>栏目名称</td>
				<td>商品库存</td>
				<td>商品价格</td>
			</tr>
			
			<?php foreach ( $list as $v ) { ?>
				<tr>
					<td><?php echo $v['goods_name'] ?></td>
					<td><?php echo $v['cat_name'] ?></td>
					<td><?php echo $v['goods_number'] ?></td>
					<td><?php echo $v['shop_price'] ?></td>
				</tr>
			<?php } ?>
			
		</table>
		
	</body>
</html>

