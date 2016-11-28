<?php

	/**
	 * 扭曲验证码
	 */
	
	/**
	 * 思路：
	 * 建立一个与原始验证码一样大小的画布
	 * 
	 * 原画布 A
	 * 另一个画布 B
	 * 
	 * A 每一个像素的竖条， 复制到B上
	 * 每一个竖条  在上下有波动。
	 */
	 
	// 普通验证码 -> 扭曲验证码
	
	class Image {
		public static function code() {
			
			$str = 'ABCDEFGHJKLMNPQRSTUVWXYZabcdefghjklmnpqrstuvwxyz23456789';
			$text = substr(str_shuffle($str), 0, 4);
			
			$src = imagecreatetruecolor(50, 25);
			$dst = imagecreatetruecolor(50, 25);
			
			$src_gray = imagecolorallocate($src, 200, 200, 200);
			$dst_gray = imagecolorallocate($dst, 200, 200, 200);
			
			imagefill($src, 0, 0, $src_gray);
			imagefill($dst, 0, 0, $dst_gray);
			
			$color = imagecolorallocate($src, mt_rand(50, 255), mt_rand(50, 150), mt_rand(50, 200));
			
			imagestring($src, 6, 7, 5, $text, $color);
			
			// 扭曲
			for ( $i=0; $i<60; $i++ ) {
				
				$offsetY = 3; // 最大波动像素  (px)
				$round = 2; // 2个周期  即 (4π)
				$posY = round(sin( ($round * 2 * M_PI / 60) * $i ) * $offsetY); // 根据正选曲线计算上下波动的 posY 
				
				imagecopy($dst, $src, $i, $posY, $i, 0, 1, 25);
				
			}
			
			// 显示
			header('Content-type: image/png');
			imagepng($dst);
			
			imagedestroy($src);
			imagedestroy($dst);
			
		} 
	}  	
	
	echo Image::code();		

?>