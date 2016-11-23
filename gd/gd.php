<meta charset="UTF-8"/>
<?php
	
	$file = './123.jpg';
	
	$im = imagecreatefromjpeg($file);
	
//	var_dump($im);

	// color
	$red = imagecolorallocate($im, 255, 0, 0);
	$blue = imagecolorallocate($im, 0, 0, 255);
		
	// 画线	
	imageline($im, 0, 0, 1024, 768, $red);
	imageline($im, 0, 768, 1024, 0, $blue);
//		imageellipse($im, 200, 200, 100, 100, $red);
	
	
	// 保存图片
//	if ( imagejpeg($im, './ellipse.jpeg') ) {
//		echo '保存成功';
//	} else {
//		echo '保存失败';
//	};	

	// 输出图片
	header("Content-type: image/png");
	imagepng($im);
	
	imagedestroy($im);
	
?>