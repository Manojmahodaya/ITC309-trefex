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
$email = mysqli_real_escape_string($ani,$_REQUEST['email']);
$password = mysqli_real_escape_string($ani,$_REQUEST['password']);
$repeatpassword = mysqli_real_escape_string($ani,$_REQUEST['repeatpassword']);



$sql = "UPDATE id SET email = '$email', password='$password', repeatpassword='$repeatpassword' Where (username = '$username')";

if(mysqli_query($ani,$sql))

{

echo"<h1>Records updated sucessfully.</h1>";
echo "<a href = 'Adminportal.html' ><h2> Return </h2> </a>";

}

else
 {

echo "ERROR:could not able to execute$sql.".mysqli_error($ani);

}

mysqli_close($ani);
?>
