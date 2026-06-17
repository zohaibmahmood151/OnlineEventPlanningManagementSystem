<?php
session_start();

if(isset($_SESSION['cust_id'])){
    header("location:index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Customer Login</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

<style>
body{
    background-image:url("img/1.jpg");
    background-size:cover;
}
.login-form{
    width:450px;
    margin:80px auto;
}
.login-form form{
    background:white;
    padding:35px;
    box-shadow:0px 2px 2px rgba(0,0,0,0.3);
}
.btn{
    background:#FF6984;
    font-weight:bold;
    border:none;
}
.clearfix{
    margin-top:15px;
    padding:10px;
    background:#d5ede6;
    font-weight:bold;
}
</style>
</head>

<body>

<div class="login-form">
<form method="POST" action="logincheck.php">

<h2 class="text-center">Customer Login</h2>

<?php if(isset($_GET['error'])){ ?>
<div class="alert alert-danger">
<?php echo $_GET['error']; ?>
</div>
<?php } ?>

<div class="form-group">
<label>Email</label>
<input type="email" name="uemail" class="form-control" placeholder="Enter Email" required>
</div>

<div class="form-group">
<label>Password</label>
<input type="password" name="upass" class="form-control" placeholder="Enter Password" required>
</div>

<div class="form-group">
<button type="submit" name="btnlogin" class="btn btn-primary btn-block">Login</button>
</div>

<div class="clearfix">
<p class="text-center">
<a href="register.php">Create New Account</a>
</p>
</div>

</form>
</div>

</body>
</html>