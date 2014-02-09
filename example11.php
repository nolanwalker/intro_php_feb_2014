<?php
	
	if(isset($_POST['submit'])) {

		echo "First Name: " . $_POST['first_name'] . "<br>";
		echo "Last Name: " . $_POST['last_name'] . "<br>";

	}
?>
<html>
<body>

<form action="example11.php" method="post">
First Name: <input type="text" name="first_name"><br>
Last Name: <input type="text" name="last_name"><br>
<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
