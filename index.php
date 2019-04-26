<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate2.css">
<link rel="stylesheet" href="css/animate.css">
<head>
	<title>Dictionary | Home</title>
	<link rel="icon" type="image/ico" href="img/icon.jpg" style="border-radius: 50%">
</head>
<body>
<?php include "navbar.php"?>	
<div class="jumbotron">
	<center><img src="img/icon.jpg" style="border-radius: 50%" height="250" width="250"></center>
	<br/><br/>
	<center><h1 class="display-4 animated fadeIn">Enter a word here:</h1></center><br/>
	<form action="index.php" method="POST">
		<div class="row">
			<div class="col-10"><input type="text" name="search" value='' class="form-control animated fadeIn"></div>
			<div class="col-2"><input type="submit" value="Search!"  class="btn btn-outline-primary btn-block animated fadeIn"></div>
		</div>
	</form>
	</br>

	<?php
		include 'dbconfig.php';
		$output='';
		if(isset($_POST['search'])){
		    $searchkey= $_POST['search'];
		    $searchkey=preg_replace("#[^0-9a-z]#i", "", $searchkey);

		    $query = mysqli_query($mysqli,"SELECT DISTINCT * FROM maindata WHERE value LIKE '$searchkey%' ") or die("Could not search!");
		    $count = mysqli_num_rows($query);

		    if($count == 0){
		        $output="<p class='lead'>There was no search result! Please add words to improve this Dictionary!</p>";
		        echo "$output";
		    }
		    else{

		    	echo '<table border="0" cellspacing="2" cellpadding="4"> 
				      <tr> 
				          <th> <font face="Arial"><b>Word</font> </th> 
				          <th> <font face="Arial"><b>Meaning</font> </th>
				      </tr>';

		        while($row=mysqli_fetch_array($query)){ 
		            $value=$row['value'];
		            $mean=$row['mean'];
		            $output .='<tr><td>'.$value.'</td><td>'.$mean.'</td></tr>';
		            echo "$output";

		        }
		    }
		}
	?>﻿
</div>
</body>
</html>