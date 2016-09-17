<?php

	$conn = mysql_connect('localhost', 'root', '');
	
	$sql = 'use zf';
	
	mysql_query($sql, $conn);
	
	$sql = 'set names utf8';
	
	mysql_query($sql, $conn);
	
	
	/**
	 * 两表全相乘,来查询.
	 */
	 
//	$sql = 'select goods_id, goods_name, goods_number, shop_price, cat_name from goods, category where goods.cat_id = category.cat_id';
	$sql = 'select goods_id, goods_name, goods_number, shop_price, cat_name from goods left join categroy on goods.cat_id = category.cat_id';
	
	$rs = mysql_query($sql, $conn); 
	 
	$list = array(); 
	while ( $row = mysql_fetch_assoc($rs) ) {
	
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

