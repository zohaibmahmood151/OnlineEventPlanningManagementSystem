<?php
$eid = isset($_GET['id']) ? intval($_GET['id']) : 0;

session_start();

if(!isset($_SESSION["cust_id"]))
{
    $_SESSION["booking_event_id"] = $eid;
    echo "<script>window.open('/OnlineEventManagementSystem/login.php','_self')</script>";
    exit();
}

include_once("admin/dal/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Booking Form</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

<style>
body{
    background-image:url("img/4.jpg");
    background-size:cover;
}
.login-form{
    width:580px;
    margin:50px auto;
}
.login-form form{
    background:#fff;
    padding:30px;
    box-shadow:0px 2px 2px rgba(0,0,0,0.3);
}
</style>

</head>
<body>

<div class="login-form">

<form class="form-horizontal" method="POST" action="eventbooking.php">

<h2 class="text-center">Booking Form</h2>

<input type="hidden" name="cus_id" value="<?php echo $_SESSION["cust_id"]; ?>">

<div class="form-group">
<label>Event Name</label>

<select class="form-control" name="event_name" required>

<?php

$query="SELECT * FROM tbl_event WHERE event_status='Active'";
$run=$con->query($query);

while($row=$run->fetch_assoc())
{
    $selected = ($eid==$row["event_id"]) ? "selected" : "";

    echo "<option value='".$row["event_id"]."' ".$selected.">".$row["event_name"]."</option>";
}

?>

</select>

</div>

<div class="form-group">
<label>Payment Method</label>

<select class="form-control" name="patym" required>

<?php

$query="SELECT * FROM tbl_payment WHERE status='Active'";
$run=$con->query($query);

while($row=$run->fetch_assoc())
{
    echo "<option value='".$row["payment_id"]."'>".$row["payment_method"]."</option>";
}

?>

</select>

</div>

<div class="form-group">
<label>Hall</label>

<select class="form-control" name="hall" id="hallid" required>

<option value="">Select Hall</option>

<?php

$query="SELECT * FROM tbl_halls WHERE hall_status='Active'";
$run=$con->query($query);

while($row=$run->fetch_assoc())
{
    echo "<option value='".$row["hall_id"]."'>".$row["hall_name"]."</option>";
}

?>

</select>

</div>

<div class="form-group">
<label>Seats</label>
<input type="text" class="form-control" name="seats" id="hallseats" readonly required>
</div>

<div class="form-group">
<label>Price</label>
<input type="text" class="form-control" name="payment" id="hallprice" readonly required>
</div>

<div class="form-group">
<label>Booking Date</label>
<input type="date" class="form-control" name="date" required>
</div>

<div class="form-group">
<button type="submit" name="booknow" class="btn btn-primary btn-block">
Book Now
</button>
</div>

</form>

</div>

<script>

$(document).ready(function(){

$("#hallid").change(function(){

var hallnum=$(this).val();

$.post("getprice.php",{hid:hallnum},function(data){
$("#hallprice").val($(data).text());
});

$.post("getseats.php",{hid:hallnum},function(data){
$("#hallseats").val($(data).text());
});

});

});

</script>

</body>
</html>