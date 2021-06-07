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
$ani=mysqli_connect("localhost","root","","trefex");

if ($ani===false)
	{
		die("ERROR: Could not connect.".mysqli_connect_error());
	}


$username = mysqli_real_escape_string($ani,$_REQUEST['username']);
$password = mysqli_real_escape_string($ani,$_REQUEST['password']);

$sql="INSERT INTO admin( username ,password) VALUES ('$username','$password')";
if(mysqli_query($ani,$sql))
{
echo"<h1>Records added sucessfully.</h>";

echo "<a href = 'Adminportal.html' ><h2>Return</h2></a>";
}
else {
echo "ERROR:could not able to execute$sql.".mysqli_error($ani);
echo "<a href = 'Adminportal.html' ><h4>Return</h4></a>";
}
mysqli_close($ani);
?>
