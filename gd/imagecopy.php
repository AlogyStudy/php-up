<?php
	
	$dst_im = imagecreatetruecolor(800, 450);
	$src_im = imagecreatefromjpeg('./haohao.jpg');
	
	
	$gary = imagecolorallocate($dst_im, 100, 100, 100);
	imagefill($dst_im, 0, 0, $gary);
	
	imagecopy($dst_im, $src_im, 0, 20, 200, 150, 400, 400);
	imagecopy($dst_im, $src_im, 420, 20, 200, 150, 400, 400);
	
	header('Content-type: image/png');
	imagepng($dst_im);
	
	imagedestroy($im);	

?>