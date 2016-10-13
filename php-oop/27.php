<?php

	// 单例模式

	/**
	 * 
	 * 第一步：一个普通的类。
	 * 普通的类，可以new来实例化。
	 * 这显然不是单例
	 * 	class Single {
	 * }
	 */	

	 /**
	  * 第二步： 干脆不让new
	  * 把构造方法  保护/私有 外部不能new。
	  * 
	  */	
//	  class Single {
//	  	protected function __construct() {}
//			
//			public function getInstance() {
//				return new self();
//			}
//			
//	  }
		
//		$s = new Single();

		/**
		 * 第三步： 通过内部的static方法来调用。
		 */
		 
// 	  class Single {
// 	  	
//			static protected $ins = NULL;
//			
//	  	protected function __construct() {
//	  		
//	  	}
//			
//			static public function getInstance() {
//				return new self();
//			}
//			
//	  }
//		
//		$s1 = Single::getInstance();
//		$s2 = Single::getInstance();
		
		/**
		 * 两个对象什么时间相等.
		 * 只有指向一个对象的时候，才相等.
		 */
		 
		/**
		 * 第四步：通过内部的static方法实例化，并且，把实例保存在类内部的静态属性上.
		 */  
		 
 	  class Single {
 	  	
			static protected $ins = NULL;
			
	  	protected function __construct() {}
			
			static public function getInstance() {
				
				if ( self::$ins instanceof self ) {
					return self::$ins;	
				}
				
				return self::$ins = new self();
				
			}
			
	  }
		
		$s1 = Single::getInstance();
		$s2 = Single::getInstance();
		
		var_dump($s1);
		var_dump($s2);
		
		class Test extends Single {
			public function __construc() {
				parent::__construct();
			}
		}
		
//		final 		
?>