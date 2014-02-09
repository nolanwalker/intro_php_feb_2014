<?php
	
	//simple array
	$fruits = array('Apples', 'Oranges', 'Bananas');

	echo $fruits[0] . "<br>";
	echo $fruits[1] . "<br>";
	echo $fruits[2] . "<hr>";

	exit;


	for($i=0;$i<sizeof($fruits);$i++) {
		echo $fruits[$i] . "<br>";
	}
	echo "<hr>";



	//assocaited array
	$nhl_pacific_team_wins = array(
								'ANAHEIM'=>38,
								'SAN JOSE'=>33,
								'LOS ANGELES'=>29,
								'VANCOUVER'=>26,
								'PHOENIX'=>24,
								'CALGARY'=>18,
								'EDMONTON'=>15
								); //as of Jan 25 2014

	foreach ($nhl_pacific_team_wins as $team => $wins) {
		echo $team . " wins: " . $wins . "<br>";
	}
	echo "<hr>";



	//array explode ( string $delimiter , string $string [, int $limit ] )
	$pizza_toppings_string = "pepperoni,bacon,mushroom,green peppar,cheese";
	var_dump($pizza_toppings_string);
	echo "<br>";
	$pizza_toppings_array = explode(",", $pizza_toppings_string);
	var_dump($pizza_toppings_array);
	echo "<hr>";

	

	//string implode ( string $glue , array $pieces )
	$pizza_toppings_string = implode("", $pizza_toppings_array);
	var_dump($pizza_toppings_string);
	echo "<br>";



?>
