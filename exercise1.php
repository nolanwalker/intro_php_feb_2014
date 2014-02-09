<?php
	
	$email = "nwalker@advantcomp.com";

	//echo strpos($email, "@") . "<br>";
	//echo substr($email, strpos($email, "@")) . "<br>";
	echo substr($email, strpos($email, "@")+1) . "<br>";


?>
