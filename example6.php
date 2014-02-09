<?php
	
	$string = 'My name is Nolan';

	//int strlen ( string $string )
	$length = strlen($string);
	echo $length . "<hr>";

	exit;


	//string strpos ( string $haystack , mixed $needle [, int $offset = 0 ] )
	$position = strpos($string, 'Nolan');
	echo $position . "<hr>";

	//string substr ( string $string , int $start [, int $length ] )
	$string_part = substr($string, 0, 11);
	echo $string_part . "<hr>";
?>
