<!DOCTYPE HTML>
<html>
<body bgcolor="pink">
<center><h2>ONLINE BOOKING CONVENTION CENTRE</h2></center>
<br>
<?php
include("dbconnection(1).php");
$isbn=$_POST["name"];
$title=$_POST["location"];
$author=$_POST["capacity"];
$edition=$_POST["available_dates"];
$publication=$_POST["contact_details"];

$query = "insert into online_booking(name,location,capacity,available_dates,contact_details) values('$name','$location','$capacity','$available_dates','$contact_details')";
$result = mysqli_query($db,$query);

?>
<h3> Successfully Registered the covention centre details </h3>
<a href="booking.php"> To Book for Convention Centres click here </a>
</body>
</html>
