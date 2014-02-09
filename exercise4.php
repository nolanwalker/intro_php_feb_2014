<html>
<body>
<?php
	
	
	function write_multiplication_table($rows, $cols) {
	
		echo "<table border='1'>"; 

		for($tr=1;$tr<=$rows;$tr++){ 
		     
		    echo "<tr>"; 
		        for($td=1;$td<=$cols;$td++){ 
		               echo "<td align='center'>".$tr*$td."</td>"; 
		        } 
		    echo "</tr>"; 
		} 

		echo "</table>";
	}

	if(isset($_POST['submit'])) {

		write_multiplication_table($_POST['rows'], $_POST['cols']);

	}
?>

<form action="exercise4.php" method="post">
Rows: <input type="text" name="rows"><br>
Columns: <input type="text" name="cols"><br>
<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
