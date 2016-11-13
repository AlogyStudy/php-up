<meta charset="UTF-8"/>
<?php

	// 无限级分类
	
	// 该数组，每个单元有自己的id和地区名
	// 每个单元之间的地位是平等的.
	// 因此没有谁是谁的上下级关系 
	$area = array(
		array('id' => 1, 'name' => '安徽'),
		array('id' => 2, 'name' => '昌平'),
		array('id' => 3, 'name' => '海淀'),
		array('id' => 4, 'name' => '北京'),
		array('id' => 5, 'name' => '福建')
	);

	
	// 为了表示上下级关系，人为的增加一个字段`parent`
	// parent是表示该栏目的父栏目`id`.
	// 找A栏目的子栏目时：谁的`parent`值等于A的id，谁就是A的儿子. 
	$area = array(
		array('id' => 1, 'name' => '安徽', 'parent' => 0),
		array('id' => 2, 'name' => '昌平', 'parent' => 4),
		array('id' => 3, 'name' => '海淀', 'parent' => 4),
		array('id' => 4, 'name' => '北京', 'parent' => 0),
		array('id' => 5, 'name' => '福建', 'parent' => 0),
		array('id' => 6, 'name' => '湖里区', 'parent' => 7),
		array('id' => 7, 'name' => '厦门', 'parent' => 5)
	);

	
	// 无限级分类:
	// 0. 找指定栏目的子栏目. 
	// 1. 找指定栏目的子孙栏目，即子孙树
	// 2. 找指定栏目的父栏目/父父栏目...顶级栏目 ，即家谱树
	
	/**
	 * 查找子栏目
	 * @param {Array} $arr 查找的集合
	 * @param {Float} $id 查找子栏目的id
	 * @return {Array}
	 */
	function finson( $arr, $id = 0 ) {
		// $id 的栏目的 子栏目 有哪些
		// 	遍历数组，谁的parent值 与 $id 相等， 该$id 的子栏目就寻找出来.
		
		$sons = array();
		
		foreach ( $arr as $v ) {
			
			if ( $id == $v['parent'] ) {
				$sons[] = $v;
			}
			
		};
		
		return $sons;
			
	}
	
	/**
	 * 查找子孙树
	 * @param {Array} $arr 查找的集合
	 * @param {float} $id 查找子孙树的id
	 * @param {float} $lev 显示的等级
	 * @return {Array}
	 */
	function subtree( $arr, $id = 0, $lev = 1 ) {
		
		static $subs = array();
		
		foreach( $arr as $v ) {
			$v['lev'] = $lev;
			if ( $v['parent'] == $id ) {
				$subs[] = $v;
				subtree( $arr, $v['id'], $lev+1 );
			}
			
		}
	
		return $subs;
				
	}
	
	// 显示
	$tree = subtree($area,0,1);
	foreach( $tree as $v ) {
		echo str_repeat('&nbsp', $v['lev']),$v['name'],'<br />';
	}
	
?>