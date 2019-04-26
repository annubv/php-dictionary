<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate2.css">
<link rel="stylesheet" href="css/animate.css">
<head>
	<title>Dictionary | Word Added!</title>
	<link rel="icon" type="image/ico" href="img/icon.jpg" style="border-radius: 50%">
</head>
<body>
<?php include "navbar.php"?>	
<div class="jumbotron">
	<center><img src="img/icon.jpg" style="border-radius: 50%" height="250" width="250"></center>
	<br/><br/>
	<center><h1 class="display-4 animated fadeIn">Word Successfully Added!</h1></center>
		<br/><br/>
</div>

<?php
	include 'dbconfig.php';

	$field1 = $mysqli->real_escape_string($_POST['value']);
	$field2 = $mysqli->real_escape_string($_POST['mean']);

	$query = "INSERT INTO maindata (value, mean)
	            VALUES ('{$field1}','{$field2}')";
	 
	$mysqli->query($query);
	$mysqli->close();
?>

</body>
</html>