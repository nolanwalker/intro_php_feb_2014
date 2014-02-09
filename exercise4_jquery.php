<html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>
</script>
<script>


$(document).ready(function(){


	$("#submit").click(function(){

		var rows = $("#rows").val();
		var cols = $("#cols").val();

		$.post("exercise4_jquery_ajax.php", 
		{
			rows:rows,
			cols:cols

		},
		function(data) {
			$("#mult_table_holder").html(data);
			
		});
		
	});

});

</script>
</head>
<body>


<div id="mult_table_holder"></div>

Rows: <input type="text" name="rows" id="rows"><br>
Columns: <input type="text" name="cols" id="cols"><br>
<input type="submit" name="submit" value="Submit" id="submit">

</body>
</html>
