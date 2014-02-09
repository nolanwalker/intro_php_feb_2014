<?php
	
	
	function multiply($var1, $var2) {
		
		//bonus
		if(!is_numeric($var1) || !is_numeric($var2)) {
			$return = 0;
		}
		$return = $var1 * $var2;

		return $return;	
	}


	echo multiply(5, 15);

?>