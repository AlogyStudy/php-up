<?php

	$im = imagecreatefromjpeg('./haohao.jpg');
	
	
	header('Content-type: image/png');
	imagepng($im);
	
	imagedestroy($im);	

?>