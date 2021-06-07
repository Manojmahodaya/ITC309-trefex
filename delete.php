<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>
		Welcome to Trefex 
	</title>
</head>
<body background="https://bestrobotsforex.com/wp-content/uploads/2017/10/best-robots-forex-background-08.jpg" 
	  background-repeat: no-repeat;>

	
	<br />
 <h3 align="center">
	
 <img src=" https://drive.google.com/thumbnail?id=1JvKlAWgEnnVtiE6bSBD5A-JLB1CWS6bo">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php

$conn = mysqli_connect("localhost", "root", "", "trefex");

if ($conn === false) 

{
	die("ERROR: Could not connect! " . mysqli_connect_error());
}

$username = mysqli_real_escape_string($conn, $_REQUEST["username"]);

$sql = "DELETE FROM admin WHERE (username = '$username')";

if(mysqli_query($conn, $sql))
{
	echo "<h1>Records deleted successfully </h1>";

echo "<a href = 'Adminportal.html' ><h2>Return</h2> </a>";

}

else {
	echo "ERROR: Could not able to execute" . mysqli_error($conn);

}

mysqli_close($conn);
?>


