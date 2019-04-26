
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate2.css">
<link rel="stylesheet" href="css/animate.css">
<head>
	<title>Dictionary | Add a word</title>
	<link rel="icon" type="image/ico" href="img/icon.jpg" style="border-radius: 50%">
</head>
<body>
<?php include "navbar.php"?>	
<div class="jumbotron">
	<center><img src="img/icon.jpg" style="border-radius: 50%" height="250" width="250"></center>
	<br/><br/>
	<center><h1 class="display-4 animated fadeIn">Enter details:</h1></center><br/>
		<form action="in.php" method="post">
			<div class="row">
				<div class="col-3"><input type="text" name = "value" class="form-control animated fadeIn" placeholder="Word"></div>
			    <div class="col-7"><input type="text" name = "mean" class="form-control animated fadeIn" placeholder="Meaning"></div>
			    <div class="col-2"><input type="submit" class="btn btn-outline-success btn-block animated fadeIn"></div>
			</div>
		</form>
		<br/><br/>
</div>
</body>
</html>