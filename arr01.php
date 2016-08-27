<?php
	
		// 循环数组时的怪现象
		$arr = array(0, 1, 2, 3);
		
		foreach ( $arr as $v ) {
			
		}
	
		var_dump(current($arr));  // 数组指针停留在数组结尾处， 取不到值. false
		
		echo '<br/>';
		
		$arr = array(0, 1, 2, 3);
		
		foreach ( $arr as $val=>$key ) { // foreach 使用的 $arr 是   $arr的副本.
			$arr[$key] = $val;  // 修改之后，就会产生分裂。 foreach 遍历的是 $arr 的副本。 但是原数组的指针已经走了一步. 
		} 
		
		var_dump(current($arr)); // 1
		
		
		$arr = array('a', 'b', 'c', 'd');
		
		foreach ( $arr as &$val ) {  // 该foreach 会导致 $val = &$arr[3];
			
		}
		
		foreach ( $arr as $val ) {
			print_r($arr);
			echo '<br/>';
		}
		// 两个问题： 
		// 数组使用时，要慎用引用。
		// foreach 使用后，不会把数组的内部指针重置, 使用数组时，不要假想内部指针指向数组头部. 也可以在foreach 之后 reset(); 指针。
	
	
	
?>		

