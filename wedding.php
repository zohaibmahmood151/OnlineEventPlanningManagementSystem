<?php
session_start();
if(!isset($_SESSION["cust_id"]))
{
	echo"<script>window.open('login.php','_self')</script>";
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
<title>Home</title>
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="css/bootstrap.min.css" >

 <!-- Optional theme -->
 <link rel="stylesheet" href="css/bootstrap-theme.min.css" >
 <link rel="stylesheet" href="css/custom.css" >
 <!-- Latest compiled and minified JavaScript -->
 <script src="js/jquery.js"></script>
 <script src="js/bootstrap.js" ></script>
 <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
 </head>
 <body>
 <nav class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed btn-clr" data-toggle="collapse" data-target="#abc" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar bar-clr"></span>
        <span class="icon-bar bar-clr"></span>
        <span class="icon-bar bar-clr"></span>
      </button>
	  <img src="img/logo.jpg" class="logo" style="width:10%;">
      <a class="navbar-brand" href="#"></a>
    </div>

    <div class="collapse navbar-collapse" id="abc">
      
   
      <ul class="nav navbar-nav">
        <li><a href="#hotelsec">About Us</a></li>
             <li><a href="#pkg">Services</a></li>
     <li><a href="#">Contact Us</a></li>
     <li><a href="logout.php">Log Out</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container m-top-300">
<div class="row m-top-300 m-bottom-20">
	   <div class="col-lg-6">
	     <img src="img/wedplan.jpg" class="about-img"  >
	    </div>
	
	    <div class="col-lg-6">
		<h2 class= "aboutplan">Wedding Events</h2><HR>
		<p class="with">A wedding is a special moment for families and friends. It is a memory that is treasured and remembered.<br>
		La Celebrators consciously prioritizes the precious values that are instilled in a wedding and therefore lays great emphasis and effort on ensuring that the entire event is organized and executed in perfect fashion.<br>
		From the minutest of details to the grandest of issues that surround a particular wedding,<br>
		Zoreed takes great care with service that ensures a glitch-free event. </p>
		 <p class="with">
		First of all congratulation for your special day. Every Detail appreciates that planning a wedding can be very time consuming task.<br>
		We know that all the worries and tension that goes into planning of one of the biggest events of your life - we take away. Your tailor made package is designed to alleviate many of the pressures and hassles and help you enjoy each moment of your wedding planning. 
		</p>
		<p class="with">
		Hiring a wedding planner does not mean that you are pushed into a corner whilst someone else makes all the decisions for you.<br>
		We can co-ordinate you with every detail you make all the decisions and our recommendations are simply that - ensuring that every detail of your wedding is exactly as you dream. </p>
		<h2 class="aboutplan" >You Will Experience The many benefits in hiring every detail</h2>
		<ul class="with"><li>We listen to you and what you really want for your wedding. </li>
							<li>We secure you the best services at negotiated prices through our reliable and highly experienced suppliers.</li>
							<li>We give you sound advice and experience. </li>
							<li>We give you our commitment to your ideas . </li>
		</ul>
		<h2 class="aboutplan" >Tulips Events Provides the following services for your wedding:</h2>
		<ul class="with"><li> Venue Booking  </li>
							<li> Printing and Designing of Invitation Cards </li>
							<li> Planning and Layout of Events </li>
							<li>We give you our commitment to your ideas . </li>
		</ul>
							
		