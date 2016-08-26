<?php
	
	$b = 'hello';
	
	/**
	 * 
	 * {
	 * 	union_zvalue {
	 * 	 // 字符串的指针
	 * 		struct{
	 * 			char: 'hello';
	 * 			len: 5 
	 * 		} str;
	 * 	}
	 * 	type: IS_STRING;
	 *  refcount_gc: 1,
	 *  is_ref_gc: 0 
	 * }
	 * 
	 */
	 
//在PHP中字符串的长度，是直接体现在其结构体中,所以调用strlen(); 速度非常快，时间复杂度为0(1)

echo strlen($b);

