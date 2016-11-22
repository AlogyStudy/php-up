<?php
	
	/**
	 * 复制， 透明复制
	 */
	$dst_im = imagecreatetruecolor(800, 450);
	$src_im = imagecreatefromjpeg('./haohao.jpg');

	
	$gory = imagecolorallocate($dst_im, 100, 100, 100);
	
	imagefill($dst_im, 0, 0, $gory);
	
	$dst_w = 300;
	$dst_h = 400;
	$src_w = $dst_w/(3/4);
	$src_h = $dst_h/(3/4);
	
	imagecopyresampled($dst_im, $src_im, 20, 10, 200, 200, $dst_w, $dst_h, $src_w, $src_h);
	imagecopymerge($dst_im, $src_im, 20 + $dst_w + 20, 10, 200, 200, $src_w, $src_h, 80);
	imagealphablending($dst_im, true);	
	
//	header('Content-type: image/png');
	echo imagepng($dst_im, './ad.png') ? 'ok' : 'no';
	
	imagedestroy($dst_im);

?>