<?php
	
	//***********STRING*************
	$string1 = 'I am a string in single quotes.';
	echo $string1 . "<hr>";

	exit;

	$string2 = "I am a string in double quotes.";
	echo $string2 . "<hr>";


	//***********INTEGER*************
	$integer1 = 16;
	echo $integer1 . "<hr>";

	$integer2 = -459;
	echo $integer2 . "<hr>";

	//***********FLOATING POINT*************
	$float_point1 = 9.78;
	echo $float_point1 . "<hr>";


	//***********BOOLEAN*************
	$x = false;
	echo $x . "<hr>";

	$y = true;
	echo $y . "<hr>";

	//***********ARRAY*************
	$odd_numbers = array(1,3,5,7,9);
	var_dump($odd_numbers);
	echo  "<hr>";

	//***********OBJECT*************
	class Fruit {
		public $the_fruit = "apple";

		function oranges($quantity) {
			return $quantity . " oranges";
		}
	

	}

	$my_fruit = new Fruit;
	//property
	$my_fruit->the_fruit = "grape";
	echo $my_fruit->the_fruit . "<hr>";
	
	//method
	echo $my_fruit->oranges(5) . "<hr>";


	//***********NULL*************
	$a = "apple";
	$a = "";
	var_dump($a);
	echo "<hr>";

	$b = "apple";
	$b = null;
	var_dump($b);
	echo "<hr>";





	
?>
