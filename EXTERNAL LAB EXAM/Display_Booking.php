<!DOCTYPE HTML>
<html>
<body bgcolor="pink">
<center><h2>ONLINE BOOKING FOR CONVENTION CENTRE</h2></center>
<br>
<?php
include("dbconnection(1).php");
$query = "select name,location,capacity,available_dates,contact_details from online_booking"; 
$result = mysqli_query($db,$query);
if(capacity>0)
{
?>
<table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<th> NAME </th>
<th> LOCATION </th>
<th> CAPACITY </th>
<th> AVIALABLE DATES </th>
<th> CONTACT DETAILS </th>
</tr>
<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["name"];?> </td>
<td><?php echo $row["location"];?> </td>
<td><?php echo $row["capacity"];?> </td>
<td><?php echo $row["available_dates"];?> </td>
<td><?php echo $row["contact_details"];?> </td>
</tr>
<?php
}
}
else
echo "<center>No booking is available for this convention centre </center>" ;
?>
</table>
</body>
</html>
<br>

