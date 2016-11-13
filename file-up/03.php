<meta charset="UTF-8"/>
<?php


	// 接收文件，并分目录存储，生成随机文件名
	
	/**
	 * 1. 根据时间戳，并按一定规则创建目录
	 * 2. 获取文件后缀名
	 * 3. 判断大小
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
	
	
	if ( $_FILES['pic']['error'] != 0 ) {
		echo '上传失败';
		exit;
	} 
	
	// 处理上传过程
	// 拼接文件路径  文件名 + 随机数 + 后缀.
	$path = './' . mk_dir() . '/' . rand_name() . '.' . getExt($_FILES['pic']['name']);
	
	if ( move_uploaded_file($_FILES['pic']['tmp_name'], $path) ) {
		echo '成功'; 
	} else {
		echo '失败';
	}

?>