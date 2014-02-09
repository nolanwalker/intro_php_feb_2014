<?php
	

	$rows = $_POST['rows'];
	$cols = $_POST['cols'];

	echo "<table border='1'>"; 

	for($tr=1;$tr<=$rows;$tr++){ 
	     
	    echo "<tr>"; 
	        for($td=1;$td<=$cols;$td++){ 
	               echo "<td align='center'>".$tr*$td."</td>"; 
	        } 
	    echo "</tr>"; 
	} 

	echo "</table>";
	



	
?>