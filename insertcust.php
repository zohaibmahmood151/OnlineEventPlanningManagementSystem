<?php
session_start();
include_once("admin/dal/db.php");

if(isset($_POST["addcustomer"]))
{
    $name = $_POST["cname"];
    $address = $_POST["caddress"];
    $phone = $_POST["cnum"];
    $email = $_POST["cemail"];
    $password = $_POST["cpass"];
    $gender = $_POST["gender"];

    $img = "";
    if(isset($_FILES["fileToUpload"]["name"]) && $_FILES["fileToUpload"]["name"] != "")
    {
        $img = $_FILES["fileToUpload"]["name"];
        $tmp = $_FILES["fileToUpload"]["tmp_name"];
        move_uploaded_file($tmp, "img/".$img);
    }

    $query = "INSERT INTO tbl_customer 
    (cust_name, cust_address, cust_phoneno, cust_email, cust_password, cust_gender, cust_img, cust_status)
    VALUES
    ('$name', '$address', '$phone', '$email', '$password', '$gender', '$img', 'Active')";

    $res = $con->query($query);

    if($res)
    {
        echo "<script>alert('Account created successfully'); window.open('login.php','_self');</script>";
    }
    else
    {
        echo "Registration Error: " . $con->error;
    }
}
?>