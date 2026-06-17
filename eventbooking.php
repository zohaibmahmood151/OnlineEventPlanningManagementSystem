<?php

session_start();

include_once(__DIR__ . "/admin/dal/db.php");

if(!isset($_SESSION["cust_id"]))
{
    echo "<script>window.open('login.php','_self')</script>";
    exit();
}

if(isset($_POST["booknow"]))
{
    $date     = $_POST["date"];
    $eventid  = $_POST["event_name"];
    $cus_id   = $_SESSION["cust_id"];
    $hall     = $_POST["hall"];
    $seats    = $_POST["seats"];
    $payment  = $_POST["payment"];
    $status   = "Active";

    $query = "INSERT INTO tbl_booking
    (event_id,cust_id,hall_id,seats,bookingdate,payment,status)
    VALUES
    ('$eventid','$cus_id','$hall','$seats','$date','$payment','$status')";

    $res = $con->query($query);

    if($res)
    {
        echo "<script>
        alert('Booking saved successfully');
        window.open('index.php','_self');
        </script>";
    }
    else
    {
        echo "Booking Error : ".$con->error;
    }
}
else
{
    header("Location:index.php");
    exit();
}

?>