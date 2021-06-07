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
		<font face="cinzel" size="4">
			<a href="trefex.html">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;
			
			<a href="ourbots.html">OUR BOTS</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="index.html">LOGIN</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="contactus.html">CONTACT US</a>
		</font>
	</h3>
	<br /><br /><br /><br /><br />
	<?php
$conn=mysqli_connect("localhost","root","","trefex");

if ($conn===false)
	{
		die("ERROR: Could not connect.".mysqli_connect_error());
	}


$email = mysqli_real_escape_string($conn,$_REQUEST['email']);
$username = mysqli_real_escape_string($conn,$_REQUEST['username']);
$password = mysqli_real_escape_string($conn,$_REQUEST['password']);
$repeatpassword = mysqli_real_escape_string($conn,$_REQUEST['repeatpassword']);


$sql="INSERT INTO id(email, username, password , repeatpassword) VALUES ('$email','$username','$password','$repeatpassword')";
if(mysqli_query($conn,$sql))
{
echo"Thank you for signing up.";
echo "<a href = 'index.html' > <h2>click here to sign in!!</h2> </a>";
}
else {
echo "ERROR:could not able to execute$sql.".mysqli_error($conn);

}
mysqli_close($conn);
?>
