<?php
	
	$var1 = 8;
	$var2 = 4;
	
	//if
	if($var1>$var2){
		echo "var1 is greater than var2.<hr>";
	}

	exit;


	//if/else
	if($var1 == $var2){
		echo "var1 is equal to var2.<hr>";
	} else {
		echo "var1 is NOT equal to var2.<hr>";
	}

	//if/elseif/else
	if($var1<$var2){
		echo "var1 is less than  var2.<hr>";
	} elseif($var1 == $var2) {
		echo "var1 is equal to var2.<hr>";
	} else {
		echo "var 1 is NOT less than var2, and val1 is NOT equal to val2.";
	}

	//switch
	$fav_fruit = "apple";
	switch ($fav_fruit) {
		case 'apple':
			echo "You like apples.";
			break;

		case 'oranges':
			echo "You like oranges.";
			break;

		case 'bananas':
			echo "You like bananas.";
			break;
		
		default:
			echo "You don't like apples, oranges, or bananas?";
			break;
	}

?>
