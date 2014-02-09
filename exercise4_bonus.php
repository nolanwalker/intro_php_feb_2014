<html>
<body>
<?php
	
	
	function write_multiplication_table($rows, $cols) {

		if(!is_numeric($rows) || !is_numeric($cols)) {
			echo "<script>alert('Please enter numeric values only.');history.go(-1);</script>";
			exit;
		}

		if($rows>50 || $cols>50) {
			echo "<script>alert('Please limit values to 50 or less.');history.go(-1);</script>";
			exit;
		}
	
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


<form action="exercise4_bonus.php" method="post">
Rows: <input type="text" name="rows"><br>
Columns: <input type="text" name="cols"><br>
<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
