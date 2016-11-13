<meta charset="UTF-8"/>
<?php

	$area = array(
		array('id' => 1, 'name' => '安徽', 'parent' => 0),
		array('id' => 2, 'name' => '昌平', 'parent' => 4),
		array('id' => 3, 'name' => '海淀', 'parent' => 4),
		array('id' => 4, 'name' => '北京', 'parent' => 0),
		array('id' => 5, 'name' => '福建', 'parent' => 0),
		array('id' => 6, 'name' => '湖里区', 'parent' => 7),
		array('id' => 7, 'name' => '厦门', 'parent' => 5)
	);

	/**
	 * 寻找子孙树
	 */
	 
	function subtree( $arr, $parent = 0 ) {
		
		$task = array($parent); // 任务表
		$tree = array(); // 地区表
		
		while ( !empty($task)  ) {
			
			$flag = false;
			
			foreach ( $arr as $k => $v ) {
				
				if ( $v['parent'] == $parent ) {
					$tree[] = $v;
					array_push($task, $v['id']); // 最新的地区id压入任务栈. 
					$parent = $v['id'];
					unset($arr[$k]); // 找到的单元unset() 掉.
					
 					$flag = true; // 说明找到子栏目
				}
				
			}

			var_dump($task);
							
			if ( $flag == false ) {
				array_pop($task);
				$parent = end($task);
			}
			
		}
		
		return $tree;
	}

	
	var_dump(subtree($area, 0));
	
?>