<?php
	
	// 强制分裂
	
	$a = 3;
	/**
	 * {
	 * 		value: 3;
	 * 		type: IS_LONG;
	 * 	  refcount_gc: 1;
	 * 		is_ref_gc: 0;
	 * }
	 */
	$b = $a;
	/**
	 * {
	 * 		value: 3;
	 *    type: IS_LONG;
	 *    refcount_gc: 2;
	 *    is_ref_gc: 0;
	 * }
	 */
	$c = &$a;
	// 不会按照 底下结构体变化
	/**
	 *	{
	 * 		value: 3;
	 *    type: IS_LONG;
	 *    refcount_gc: 3;  
	 *    is_ref_gc: 1; 
	 * } 
	 */	
	
	// 正确的结构体变化
	// 如果is_ref_gc  0->1 的过程中(从0到1,表示想引用变量)。refcount_gc>1。多个变量共享一个变量值。将会产生强制分裂
	/**
	 * // $a $c 结构体 
	 *	{
	 * 		value: 3;
	 *    type: IS_LONG;
	 *    refcount_gc: 2;  
	 *    is_ref_gc: 1; 
	 * } 
	 * 
	 * // $b 结构体
	 * {
	 * 		value: 3;
	 *    type: IS_LONG;
	 *    refcount_gc: 1;  
	 *    is_ref_gc: 0; 
	 * }
	 *  
	 */	  
	
	$c = 5;
	// a c
	/**
	 * value: 5
	 * type: IS_LONG; 
	 * refcount_gc: 2;
	 * is_ref_gc: 1;
	 */
	 
  // b
	/**
	 * value: 3
	 * type: IS_LONG;
	 * refcount_gc: 1;
	 * is_ref_gc: 0;
	 */	
	
	echo $a, $b, $c; // 5 , 3 , 5
	 
	