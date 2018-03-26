<?php
	ob_start();

	$name= $_POST["bname"];
	$author= $_POST["author"];
	$subject = $_POST["subject"];
	$email = $_POST["email"];
	$contact = $_POST["contactname"];
	$price = $_POST["price"];

	//print_r($_POST);

	mysql_connect("localhost","root","password");
	mysql_select_db("bookshaala");

	$query="insert into sell values ('$name', '$author', '$subject', '$price', '$contact', '$email');";
	if($result= mysql_query($query))	
		echo "<h1>Successfully added $name in our database. We will update you when the book is ready to sell.</h1>\n<h3>You will now be directed back to the sell page.</h3>" ;
	else
		echo mysql_error();

	header( "refresh:5; url=../sell.php" ); 
?>