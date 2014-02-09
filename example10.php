<?php
	

	function write_your_name($first,$last) {
		echo $first . " " . $last . "<hr>";
	}

	write_your_name('Nolan', 'Walker');

	exit;


	function get_your_name($first,$last) {
		return $first . " " . $last;
	}

	echo get_your_name('Nolan', 'Walker') . "<hr>";



	function count_down($top=100) {
		for($y=$top;$y>=0;$y--) {
			echo $y . "<br>";
		}
	}

	count_down(50);

?>
