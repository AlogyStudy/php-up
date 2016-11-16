<meta charset="UTF-8"/>
<?php
	
	/**
	 * GD
	 */

//	var_dump(gd_info());

	// 创建画布(width, height)
	
	$width = 200;
	$height = 300;
	$im = imagecreatetruecolor($width, $height);
	
	// 创建各种颜料	
	$green = imagecolorallocate($im, 100, 120, 100);

	// 画图
	$x = 100;
	$y = 200;
	$color = $green;
	imagefill($im, $x, $y, $color);

	// 保存成图片
//	imagepng($image), imagejpeg($image); imagegif($image);
	if ( imagepng($im, './01.png') ) {
		echo '图片生成成功';
	} else {
		echo '图片生成失败';
	}
	
	// 销毁画布
	imagedestroy($im);
		
?>