<?php
include_once("admin/dal/db.php");
global $con;
$hallid=$_POST["hid"];
$query="SELECT * FROM tbl_halls where hall_id='$hallid'";
$run=$con->query($query);
while($row=$run->fetch_assoc())
{
	
	$seats=$row["hall_seats"];
	echo "<option value='$seats'>";
	echo $seats;
	echo "</option>";
	
}
?>