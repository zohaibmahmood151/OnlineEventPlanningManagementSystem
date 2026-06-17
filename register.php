<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Online Tulips Event Management System</title>
<link rel="stylesheet" href="css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
<script src="js/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script src="js/bootstrap.js" ></script>
<style type="text/css">
	.body {
	 background-image: url("img/1.jpg");		
		
	}
	
	.login-form {
		width: 580px;
    	margin: 5px auto;
		
	}
    .login-form form {
    	margin-bottom: 15px;
        background: white;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 50px;
    }
    .login-form h2 {
        margin: 0 0 10px;
    }
    .form-control, .btn {
        min-height: 15px;
        border-radius: 2px;
    }
    .btn {
		background:#FF6984;       
        font-weight: bold;
        font-size: 15px;
    }
	.clearfix{
		  font-size: 15px;
        font-weight: bold;
			 background: #d5ede6;	


		
	}
</style>
</head>
<body class="body">
<div class="login-form">
    <form class="form-horizontal" method="POST" name="register-form" action="insertcust.php" enctype="multipart/form-data">
        <h2 class="text-center">Registration</h2>       
        <div class="form-group">
			<label>Name</label>
            <input type="text"  class="form-control" name="cname" id="fname" placeholder="First Name Here">
        </div>
		
        <div class="form-group">
			<label>Address</label>
            <input type="text" name="caddress" class="form-control" id=""  placeholder=" address Here">
        </div>
		<div class="form-group">
			<label>Phone</label>
				<input type="text" class="form-control" name="cnum">        
				
		</div>
		<div class="form-group">
			<label>Email</label>
                 <input type="email"  class="form-control" name="cemail" id="useremail" placeholder="Email Here">
        </div>
		<div class="form-group">
			<label>Password</label>
              <input type="password" class="form-control" name="cpass" id="userpass" placeholder="Password Here">
        </div>
		
		<div class="form-group">
			<label>Image</label>
              <input type="file"  class="form-control" name="fileToUpload" id="fileToUpload" placeholder="">
        </div>
		
		<div class="form-group">
			<label>Gender</label>
				<select class="form-control" name="gender">
					<option value="male">Male</option>
					<option value="female">FeMale</option>
				</select>
             
        </div>
		
        <div class="form-group">
            <input  type="submit" class="btn btn-primary btn-block" value="Register Now" name="addcustomer">
        </div>
		<div class="clearfix">
             <p class="text-center"><a href="login.php">Already Account?</a></p>
			 </div>
    </form>
	
</div>
<script>
$(function(){
		$("form[name='register-form']").validate({
			rules:
			{
				cname:
				{
					required:true,
				
				
				},
				caddress:
				{
					required:true,
					
				},
				cnum:
				{
					required:true,
					
				},
				cemail:
				{
					required:true,
					email:true
					
				},
				cpass:
				{
					required:true,
					
				},
				fileToUpload:
				{
					required:true,
					
				},
				gender:
				{
					required:true,
					
				}
			},
			messages:
			{
				cname:
				{
					required:"Enter your Name",
				
				
				},
				caddress:
				{
					required:"Enter your Address",
					
				},
				cnum:
				{
					required:"Enter your Number",
					
				},
				cemail:
				{
					required:"Enter your Email",
					
				},
				cpass:
				{
					required:"Enter your Password",
					
				},
				fileToUpload:
				{
					required:"Enter your Image",
					
				},
				gender:
				{
					required:"Enter your Gender",
					
				}
			},
			submitHandler:function(form){
				form.submit();
			}
		
			
			
			
			
		});
});
</script>
</body>
</html>                                		                            