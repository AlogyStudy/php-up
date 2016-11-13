<meta charset="UTF-8" />
<?php

	// 家谱树
	
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
	 * 输出家谱树
	 * @param {Array} $arr 寻找家谱树的集合
	 * @param {float} $id 寻找家谱的id
	 * @return {Array} 
	 * // 思路 parent 不为零 就继续寻找
	 */
	function familyTree( $arr, $id ) {
		
		static $tree = array();
//			$tree = array();
		
		foreach($arr as $v) {
			
			if ($v['id'] == $id) {
				
				// 是否需要继续寻找父栏目
				if ( $v['parent'] > 0 ) {
					familyTree($arr, $v['parent']);
//					$tree = array_merge($tree, familyTree($arr, $v['parent']));
				}
					
				$tree[] = $v;
			} 
			
		}
		
		return $tree;
		
	}	
	
	var_dump(familyTree($area, 6));

?>