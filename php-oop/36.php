<meta charset="UTF-8"/>
<?php

	// 延迟绑定/后期绑定
	
	class Human {
		
		public static function whoami() {
			echo '父类whoami';
		}
		
		public static function say() {
			self::whoami(); // 子类内没有say方法，找到了父类这里
											// 这里的self指的是父类.
		}
		public static function say2() {
			static::whoami(); // 子类没有say2方法，又找到父类这里。
												// 但是父类用static::whoami;
												// 指调用你的子类自己的whoami方法 		
		}
	}
	
	class Stu extends Human {
		
		public static function whoami() {
			echo '子类whoami';
		}
		
	}
	
	Stu::say();
	Stu::say2();

?>