<!DOCTYPE html>
<html>

<head>
<title>Home Page</title>
 <link rel="stylesheet" href="css/bootstrap.min.css" >
 <link rel="stylesheet" href="css/bootstrap-theme.min.css" >
 <link rel="stylesheet" href="css/custom.css" >
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
        <li><a href="about.php">About Us</a></li>
		 
             <li><a href="#services">Services</a></li>
     <li><a href="#contact">Contact Us</a></li>
	 <li><a href="#bookevent">Book Event</a></li>
	 
	 <?php 
	 session_start();
	 if(isset($_SESSION['cust_id']))
	 {
		 $name=$_SESSION["cust_name"];
		 echo '<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">WELCOME | '.$_SESSION["cust_name"].'
        <span class="caret"></span></a>
        <ul class="dropdown-menu" style="background-color:#FF6984;">
          <li><a href="logout.php">Logout</a></li>
     
          
        </ul>
      </li>';
	 }
	 ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container-fluid sec1" >
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
<link rel="stylesheet" type="text/css" href="test.css">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">

  <div class="item active">
    <img src="img/1.jpg" style="width:100%; height:550px;">
    <div class="carousel-caption">
      <h1>Online Event Planning Management System</h1>
      <p>Plan Your Events Easily With Tulips Event Management</p>
    </div>
  </div>

  <div class="item">
    <img src="img/67.jpg" style="width:100%; height:550px;">
    <div class="carousel-caption">
      <h1>Book Your Favourite Event</h1>
      <p>Birthday, Wedding, Mehndi, Anniversary and More</p>
    </div>
  </div>

  <div class="item">
    <img src="img/1141.jpg" style="width:100%; height:550px;">
    <div class="carousel-caption">
      <h1>Best Event Management Services</h1>
      <p>Choose Hall, Seats, Date and Book Online</p>
    </div>
  </div>

</div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


     

<a class="left-carousel-control" id="aboutus" href="#mycarousel"  dataslide="prev">
  <span class="glphyicon glphyicon-chevron-left">
  </span>
<span class="sr-only">previous
</span>
</a>
<section class="container-fluid"  >
	<div class="row m-top-20 m-bottom-20"  >
	   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	     <img src="img/about.png" class="about-img" style="width:400px; height:400px;"  >
	    </div>
	    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"  >
		<h2 class= "aboutplan">About Our Planwey</h2>
		<p class="with">With our passion, knowledge, creative flair and inspiration,<br> 
		we are dedicated in helping you to achieve your dream wedding day<br>
		 or special event within your budget.</p>
		 <p class="with">
		Our wedding planning and events coordination services are designed<br>
		 for Any Sized budget, meaning anyone. Our wedding planning and events <br>
		coordination services are designed.
		</p>
		<div class="row">
			<div class="col-md-4">
				<h1>50<sub>K</sub></h1>
				<p>Customers</p>
			</div>
			<div class="col-md-4">
				<h1>15<sub>YEAR</sub></h1>
				<p>Experience</p>
			</div>
			<div class="col-md-4">
				<h1>100<sub>+</sub></h1>
				<p>Project Done</p>
			</div>
		</div>

	    </div>
	</div>
	<div class="row custom-color" >
	   <div class="col-lg-12" id="services" >
		<br><br><br>
		<h4 align="center" class="what">
		
		WHAT WE OFFER</h4><br>
		<h3 align="center" class= "provide" >Provide Best Services
		</h3>
	    </div>
	 </div> 

	<div class="row">
	    <div class="col-lg-3">
	      <img src="img/wedding.jpg"  style="width:350px; height:250px;"><div class="carousel-caption"><h2></h2></div>
	    </div>
	    <div class="col-lg-3">
	      <img src="img/114.jpg"  style="width:400px; height:250px;">
	    </div>
	<div class="col-lg-3">
	      <img src="img/picc.jpg" style="width:400px; height:250px;">
	    </div>
		<div class="col-lg-3">
	      <img src="img/07.jpg"  style="width:305px; height:250px;">
	    </div>
	</div>
	<div class="container-fluid" style="text-align:center">
<div class="row custom-color">
	<div class="col-lg-3">
	   <h3>Wedding Events</h3><p><br>
	   Wedding is not a day its an emotion for<br>
	   those who play any role in this event <br>
	   and our wedding planners know how to<br>
	   make these emotions memorable.
		</div>
	<div class="col-lg-3">
	   <h3>Corporate Events</h3><p><br>
	Since 2006, Tulips is elevating standards<br>
	of event planning in corporate and private <br>
	sectors of Pakistan and working with <br>
	famous multinational and national brands.
		</div>
		<div class="col-lg-3">
	   <h3>Birthday Events</h3><p><br>

Birthday is not a day its an emotion<br>
 for those who play any role in<br>
 this event and our birthday planners<br>
 know how to make these emotions memorable.
		</div>
		<div class="col-lg-3">
	   <h3>Party Events</h3><p><br>

We assign our clients their own dedicated<br>
 party planning team who can handle the <br>
 entire party. We’ll look after <br>
 everything from designing a theme,<br>
 shortlisting venues and hiring staff<br>
 through to perfect lighting, flowers and music.
		</div>
</div>


<div class="row we" >
	    <div class="col-lg-4">
	      <img src="img/11..jpg" class="img-thumbnail">
	    </div>
	    <div class="col-lg-8" >
	      <h4 style="margin-top: 60px">WHAT WE DO
Get Premium Our Services<br>
We have a huge range of suppliers and contacts in the industry that work closely<br> 
with us to not only ensure you get the wedding day.<br> 

Catering & Decor<br> 
Lorem Ipsum is simply dummy text of the printing and typendard nknown.<br> 

View More<br> 
Venue Selections<br> 
Lorem Ipsum is simply dummy text of the printing and typendard nknown.</h4>
	    </div>
</div>


 

<div class="row" id="bookevent">
	   <div class="col-lg-12">
		<h4 align="center" class="latest">
		LATEST<br></h4>
		<h2 align="center">Our Events<br>
		</h2>
	    </div>
</div>
<br>
<div class="container">
  <div class="row">
  <?php 
  include_once("admin/dal/db.php");
  global $con;
  $qurey="SELECT * FROM tbl_event where event_name='Birthday'";
  $run=$con->query($qurey);
  while($row=$run->fetch_assoc())
	  
  {
	  $img=$row["event_img"];
	  $eid=$row["event_id"];

	  ?>
		<div class="col-md-4">
				<img src="img/<?php echo $img; ?>" class=" " style="width:300px; height:300px;" >
				<h2>Birthday Event</h2>
				<button class="btn " style="background-color: #EAECEE  ; font-style:italic; font-weight:bold; font-family: 'Cookie', cursive; color: #76D7C4;  color: #170b21;"><a href="booking.php?id=<?php echo $eid?>">Book Now</a> </button>
		</div>
  <?php }	?>
	    
		
  <?php 
  include_once("admin/dal/db.php");
  global $con;
  $qurey="SELECT * FROM tbl_event where event_name='Anniversary'";
  $run=$con->query($qurey);
  while($row=$run->fetch_assoc())
	  
  {
	  $img=$row["event_img"];
	  	  $eid=$row["event_id"];


	  ?>
		<div class="col-md-4">
				<img src="img/<?php echo $img; ?>" class="  " style="width:300px; height:300px;" >
				<h2>Anniversary Event</h2>
				<button class="btn" style="background-color:  #EAECEE  ; font-style:italic; font-weight:bold; font-family: 'Cookie', cursive; color: #76D7C4;  color: #170b21;"><a href="booking.php?id=<?php echo $eid?>">Book Now</a></button>
		</div>
  <?php }	?>
  
  
  
  
  		  
  <?php 
  include_once("admin/dal/db.php");
  global $con;
  $qurey="SELECT * FROM tbl_event where event_name='Live_Concerts'";
  $run=$con->query($qurey);
  while($row=$run->fetch_assoc())
	  
  {
	  $img=$row["event_img"];
	  	  $eid=$row["event_id"];


	  ?>
		<div class="col-md-4">
				<img src="img/<?php echo $img; ?>" class=" " style="width:300px; height:300px;"  >
				<h2>LiveConcerts</h2>
				<button class="btn " style="background-color: #EAECEE  ; font-style:italic; font-weight:bold; font-family: 'Cookie', cursive; color: #76D7C4;  color: #000000;"><a href="booking.php?id=<?php echo $eid?>">Book Now</a></button>
		</div>
		<?php }	?>
		</div>
		</div>
  <div class="container">
    		  <div class="row  m-top-20 m-bottom-20">
			  
  
  <?php 
  include_once("admin/dal/db.php");
  global $con;
  $qurey="SELECT * FROM tbl_event where event_name='Wedding'";
  $run=$con->query($qurey);
  while($row=$run->fetch_assoc())
	  
  {
	  $img=$row["event_img"];
	  	  $eid=$row["event_id"];


	  ?>
		<div class="col-md-4">
				<img src="img/<?php echo $img; ?>" class=" " style="width:300px; height:300px;">
				<h2>Wedding Event</h2>
				<button class="btn " style="background-color:  #EAECEE  ; font-style:italic; font-weight:bold; font-family: 'Cookie', cursive; color: #76D7C4; color: #170b21;"><a href="booking.php?id=<?php echo $eid?>">Book Now</a></button>
		</div>
		
  <?php }	?>
  
  		  
  <?php 
  include_once("admin/dal/db.php");
  global $con;
  $qurey="SELECT * FROM tbl_event where event_name='Mehndi'";
  $run=$con->query($qurey);
  while($row=$run->fetch_assoc())
	  
  {
		  	  $eid=$row["event_id"];
  
	  $img=$row["event_img"];

	  ?>
		<div class="col-md-4">
				<img src="img/<?php echo $img; ?>" class=" " style="width:300px; height:300px;">
				<h2>Mehndi Event</h2>
				<button class="btn" style="background-color: #EAECEE  ; font-style:italic; font-weight:bold; font-family: 'Cookie', cursive; color: #76D7C4;  "><a href="booking.php?id=<?php echo $eid?>">Book Now</a></button>
		</div>
  <?php }	?>
    		  
  <?php 
  include_once("admin/dal/db.php");
  global $con;
  $qurey="SELECT * FROM tbl_event where event_name='College_Functions'";
  $run=$con->query($qurey);
  while($row=$run->fetch_assoc())
	  
  {
	  	  	  $eid=$row["event_id"];

	  $img=$row["event_img"];

	  ?>
		<div class="col-md-4">
				<img src="img/<?php echo $img; ?>" class=" " style="width:300px; height:300px;">
				<h2>College Event</h2>
				<button class="btn " style="background-color:  #EAECEE  ; font-style:italic; font-weight:bold; font-family: 'Cookie', cursive; color: #76D7C4;  color: #170b21;"><a href="booking.php?id=<?php echo $eid?>">Book Now</a></button>
		</div>
  <?php }	?>
 </div>
	 </div>
  
<div class="row">
	   <div class="col-lg-12">
	   	<h4 align="center" class="latest">
		See our Best<br></h4>
		<h2 align="center">
		
		Photo Gallery</h2>
	    </div>
</div>

  <div class="row">
	    <div class="col-lg-4">
	      <img src="img/pic1.jpg" class=" img-thumbnail" style="width:400px; height:400px;">
	    </div>
	    <div class="col-lg-4" >
	      <img src="img/picc2.jpg" class="img-thumbnail " style="width:400px; height:400px;">
	    </div>
	<div class="col-lg-4">
	      <img src="img/pic3.jpg" class="img-thumbnail " style="width:400px; height:400px;">
	    </div>
   </div>

  <div class="row">
	    <div class="col-lg-4">
	      <img src="img/gallery2.jpg" class="img-thumbnail " style="width:400px; height:400px;">
	    </div>
	    <div class="col-lg-4">
	      <img src="img/picc.jpg" class="img-thumbnail " style="width:400px; height:400px;">
	    </div>
	<div class="col-lg-4">
	      <img src="img/gallery1.jpg" class="img-thumbnail"  style="width:400px; height:400px;">
	    </div>
   </div>
   
</section>

<div class="container-fluid m-bottom-20 m-top-20" >
	<div class="row " >
	   <div class="col-lg-6 my-color-custom">
	      <h2 class="cf-sec m-left-10">Clients feedback</h2>
			<h2 >Mubarra:<br></h2>
			<p class="what"><br>
			" I have truly enjoyed using Planning Pod to keep my <br>
			event details in one central location, which definitely<br>
			makes it easier for me to stay on track while planning <br>
			events.
			I especially like the to-do list templates that allow me to<br>
			set up an event and load in all my to-do’s without<br>
			starting from scratch each time! "</p>
	

	    </div>
	    <div class="col-lg-6 my-color-2">
		 <img src="img/about.jpg" class="img-thumbnail">
	    </div>
</div>
</div>

<div class="container-fluid">
<div class="row custom-color">
	<div class="col-lg-3"  id="contact" >
	   <h3>Contact Us</h3><p><br>
	   Themeforest, Envanto HQ<br>
		24 Fifth st., Los Angeles, USA<br>
		info@example.com<br>
		Phone: (+01) 123 456 7890<br>
		Support: (+01) 123 456 7890
		</div>
	<div class="col-lg-3">
	   <h3>Our Services</h3><p><br>
	   Our Story<br>
Our Gallery<br>
Event Guides<br>
About Us<br>
Latest News<br>
Pricing & Terms<br>
		</div>
		<div class="col-lg-3">
	   <h3>Recent Posts</h3><p><br>

post-img<br>
Our Biggest Summer Meetup<br>
August 1, 2018<br>
post-img<br>
5 Steps To Planning A Sweet Party<br>
August 1, 2018<br>
		</div>
		<div class="col-lg-3">
	   <h3>Frequent Questions</h3><p><br>

How Can I Set An Event?<br>
What Venues Do You Use?<br>
Event Catalogue<br>
Shipping & Delivery<br>
What's your dream job?
		</div>
</div>
<div class="row custom-color">
	   <div class="col-lg-2">
		<img src="img/logo.jpg" class="img-thumbnail">
	    </div>
		<div class="col-lg-10">
		<p><br><br><br>
	    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesue corrupti quos dolores<br>
 et quas molestias excepturi sint occaecati cupiditate non provident,<br>
 similique sunt in culp.</p>
		</div>
</div>
</body>
</html>
