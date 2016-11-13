<meta charset="UTF-8"/>
<?php
	/**
	 * 多文件上传
	 */

	/**
	 * 计算并创建的目录
	 * @return {String} 返回创建成功的路径
	 */ 
	function mk_dir() {
		$dir = date('md/i', time());
		
		if ( is_dir('./'.$dir) ) {
			return $dir;
		} else {
			mkdir('./'. $dir, 0777, true);
			return $dir;
		}
	} 
	
	/**
	 * 获取后缀名
	 * @param {String} $file 文件名
	 * @return {String} 文件后缀名
	 */
	function getExt( $file ) {
		
		$tmp = explode('.', $file);
		
		return end($tmp);
		
	} 
	
	
	/**
	 * 生成随机文件名
	 * @return {String} 返回随机的6位字符串 
	 */
	function rand_name() {
		
		$str = 'abcdefghijlmnpqrstuvwxyz1234567890';
		
		return substr(str_shuffle($str), 0, 6);
		
	}
	
	foreach ( $_FILES as $k => $v ) {
		
		$path = './' . mk_dir() . '/' . rand_name() . '.' . getExt($v['name']);
		
		if ( $v['error'] != 0 ) {
			echo $k, '上传失败<br/>';
			echo '错误代码是:'. $v['error'],'<br/>';
			continue;
		}
				
		if ( move_uploaded_file($v['tmp_name'], $path) ) {
			echo '成功';
		} else {
			echo '失败';
		}
				
	}

?>