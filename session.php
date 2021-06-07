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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trefex";

$ani = mysqli_connect("localhost", "root", "", "trefex");

if ($ani->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$admin= mysqli_real_escape_string($ani, $_REQUEST["USERNAME"]);
$psw = mysqli_real_escape_string($ani, $_REQUEST["PASSWORD"]);

$sql = "SELECT username, password FROM id";
$result = mysqli_query($ani, $sql);

while($row = mysqli_fetch_assoc($result))
{
	$name = $row['username'];
	$pass = $row['password'];

	if (( $admin == $name) and ( $psw == $pass)) 
		{
		$re = 0;
		break;          	
		}

	else if (( $admin != $name) or ( $psw != $pass)) 	
		{
	        $re = 1;
		}


	}
 
	if($re == 0)
	{
	echo "<h1>You have successfully logged in</h1>";
	echo "<a href = 'buy page.html' > <h2>Lets get started!!</h2> </a>";
	}

	if($re == 1)
	{
	echo "<h1>Your username or password is invalid</h1>";
	echo "<a href = 'index.html' > <h2>want to try again!!</h2> </a>";
	}
?>
