<meta charset="UTF-8"/>

<?php

	// 创建目录、删除目录
	
//	// 创建目录
//	foreach ( array('a', 'b', 'c') as $v  ) {
//		$path = $v;
//		if ( mkdir($path) ) {
//			echo $path . '创建成功';
//		} else {
//			echo $path . '创建失败';
//		}
//	}
//	// 如果创建成功，第二次执行就创建失败.
	
	
//	foreach ( array('a', 'b', 'c') as $v  ) {
//		
//		$path = $v;
//		
//		if ( file_exists($path) && is_dir($path) ) { // 增加判断条件：是文件或者是目录， 并且存在当前文件.
//			echo $path . '该目录已经存在<br/>';
//			continue;
//		}
//		
//		if ( mkdir($path) ) {
//			echo $path . '创建成功<br/>';
//		} else {
//			echo $path . '创建失败';
//		}
//		
//	}


		// rmdir(); 只能删除非空目录.
		// 如果一个目录非空，该如何删除？
		// 使用递归，判断是否为空，一层层删除。
		foreach( array('a', 'c', 'e') as $v ) {
			
			$path = $v;
			
			if ( file_exists($path) && is_dir($path) ) {
				
				if ( rmdir($path) ) {
					echo $path . '删除成功';
				} else {
					echo $path . '删除失败';
				}
				
			} else {
				echo $path . '文件不存在';
			}
			
		};
	
?>