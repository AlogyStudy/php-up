<?php
	
	$data = isset($_POST) ? isset($_POST) : '';
	
	$msg = array(
		'reg' => 1,
		'msg' => array(
			'title' => '提交成功'
		)
	);
	
	echo json_encode($msg);
	
?>