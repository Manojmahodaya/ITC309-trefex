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
$ani=mysqli_connect("localhost","root","","trefex");

if ($ani===false)
	{
		die("ERROR: Could not connect.".mysqli_connect_error());
	}


$Name = mysqli_real_escape_string($ani,$_REQUEST['Name']);
$Email = mysqli_real_escape_string($ani,$_REQUEST['Email']);
$Address = mysqli_real_escape_string($ani,$_REQUEST['Address']);
$City = mysqli_real_escape_string($ani,$_REQUEST['City']);
$State = mysqli_real_escape_string($ani,$_REQUEST['State']);
$Zip = mysqli_real_escape_string($ani,$_REQUEST['Zip']);
$Cname = mysqli_real_escape_string($ani,$_REQUEST['Cname']);
$Cnumber = mysqli_real_escape_string($ani,$_REQUEST['Cnumber']);
$Emonth = mysqli_real_escape_string($ani,$_REQUEST['Emonth']);
$Eyear = mysqli_real_escape_string($ani,$_REQUEST['Eyear']);

$sql="INSERT INTO payment (Name, Email, Address , City , State , Zip , Cname , Cnumber , Emonth , Eyear) VALUES ('$Name','$Email','$Address','$City','$State', '$Zip','$Cname','$Cnumber','$Emonth','$Eyear')";
if(mysqli_query($ani,$sql))
{
echo"<h1>Thank you for your payment.</h1>";
echo "<a href = 'download.html' > <h1> Continue</h1>  </a>";
}
else {
echo "ERROR:could not able to execute$sql.".mysqli_error($ani);

}
mysqli_close($ani);
?>
