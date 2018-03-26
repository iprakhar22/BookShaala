<?php
	ob_start();

	$name= $_POST["name"];
	$author= $_POST["author"];
	$subject = $_POST["subject"];

	mysql_connect("localhost","root","password");
	mysql_select_db("bookshaala");

	$query="insert into request values ('$name', '$author', '$subject')";
	if($result= mysql_query($query))	
		echo "<h1>Successfully Added $name To Your Requests</h1>\n<h3>You will now be directed back to the request page.</h3>" ;
	else
		echo mysql_error();

	header( "refresh:5; url=../request.php" ); 
?>