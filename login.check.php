<?php
session_start();
include_once("admin/dal/db.php");

if(isset($_POST['btnlogin']))
{
    $username = $_POST['uemail'];
    $password = $_POST['upass'];

    $sql = "SELECT * FROM tbl_customer 
            WHERE cust_email='$username' 
            AND cust_password='$password' 
            AND cust_status='Active'";

    $res = $con->query($sql);

    if($res && $res->num_rows == 1)
    {
        $row = $res->fetch_assoc();

        $_SESSION['cust_id'] = $row['cust_id'];
        $_SESSION['cust_email'] = $row['cust_email'];
        $_SESSION['cust_name'] = $row['cust_name'];

        if(isset($_SESSION["booking_event_id"]) && $_SESSION["booking_event_id"] > 0)
        {
            $eid = $_SESSION["booking_event_id"];
            unset($_SESSION["booking_event_id"]);

            echo "<script>window.open('booking.php?id=$eid','_self')</script>";
        }
        else
        {
            echo "<script>window.open('index.php','_self')</script>";
        }
    }
    else
    {
        echo "<script>window.open('login.php?error=username or password is invalid','_self')</script>";
    }
}
else
{
    header("Location: login.php");
    exit();
}
?>