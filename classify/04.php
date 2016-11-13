
<meta charset="UTF-8" />

<?php

	// 迭代 - 查找家谱树
	
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
	 * 迭代 - 找寻家谱树
	 * @param {Array} $arr 家谱树集合
	 * @param {Float} $id 找寻id
	 * @return {Array}  
	 */
	 
	function tree( $arr, $id ) {
		
		$tree = array();
		
		while ( $id !== 0 ) {
			foreach( $arr as $v ) {
			
				if ( $v['id'] == $id ) {
					
					$tree[] = $v;
					$id = $v['parent'];
					
					break;
				}
				
			}
		}		
		
		return $tree;
		
	}
	
	var_dump(tree($area, 6));

?>