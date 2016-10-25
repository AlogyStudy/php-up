<?php

	// 1->N的和
	
//	function sum($n) {
//		for ( $sum=0, $i=1; $i<=$n; $i++ ) {
//			$sum += $i;
//		}
//		return $sum;
//	}


//		function sum($n) {
//			return array_sum(range(1, $n));	
//		}

	function sum( $n ) {
		if ( $n == 1 ) {
			return 1;
		}
		return sum($n-1) + $n;	
	}

	echo sum(100). '<br/>';
	
?>