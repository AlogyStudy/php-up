<meta charset="UTF-8"/>
<?php
	
	class Action {
		public function __call( $method, $arg ) {
			if ( $method ) {
				echo $method,'预报';
			}
		}
	}

	$action = new Action();
	$method = $_GET['method'];
	
	$action->$method();

?>