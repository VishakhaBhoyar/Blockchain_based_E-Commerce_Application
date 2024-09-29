<?php
/*if(isset($_SESSION['username']))
{
header("location:userdashboard.php");	
}*/
session_start();
include './Admin/Application/DB_Functions.php';  // Include Db_function file for asseccing the function
$obj= new Connections(); // Create object of class connection for calling the Personal_Details function

if(isset($_POST['bname']))
{
$bname = $_POST['bname'];
$btype = "Retailer";
$oname = $_POST['oname'];
$dob = "";
$gender = $_POST['gender'];
$addr = $_POST['addr'];
$city = $_POST['city'];
$dist = "";
$state = "";
$pin = $_POST['pin'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$username = $_POST['username'];
$pass = $_POST['password'];
$status = 0;
//echo $bname; 


if($obj->StoreUser($bname,$btype,$oname,$dob,$gender,$addr,$city,$dist,$state,$pin,$phone,$email,$username,$pass,$status)==1)
{
echo "<script>alert('User Account Created successfull, Please Enter Login to Continue!');</script>";
   echo "<script>window.location='login.php';</script>";
}
else{

}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login |Epharmc</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body  style="background-image: linear-gradient(to top, #ffffff, #e5eaf7, #c1d8ed, #95c8df, #63b9c9, #51b9c3, #3fb9bb, #2fb9b1, #3cc9c1, #48dad1, #53eae1, #5ffbf1); height:680px;">
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<br>
							</ul>
						</div>
					</div>
					 
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="images/home/logo.png" alt="" /></a>
						</div>
						 
					</div>
                           
			</div>
		</div><!--/header-middle-->
	
		
	</header><!--/header-->
	
	<section id="form"><!--form-->
		<div class="container">
                    
                    <div class="signup-form"><!--sign up form-->
						<h2>New User Create Account!</h2>
                                                <form action="#" method="post">
                                                    
							<input class="m-wrap placeholder-no-fix" type="text" placeholder="First Name" name="bname"/>
                            
						 <input  type="text" placeholder="Last Name" name="oname"/>
                                               
                                                       
                                                     
							
                                                      <select name="gender"  >
                                                    <option>Gender</option>
                                                    <option value="Male">Male </option>
                                                    <option value="Female">Female</option>
                                                </select>
							<textarea  class="m-wrap placeholder-no-fix" rows="3" cols="10" name="addr" >Address</textarea>
                                                        <input class="m-wrap placeholder-no-fix" type="text" placeholder="City" name="city"/>
							
                                                       <input class="m-wrap placeholder-no-fix" type="text" placeholder="Pin" name="pin"/>
							<input class="m-wrap placeholder-no-fix" type="text" placeholder="Mobile no" name="phone"/>
							<input class="m-wrap placeholder-no-fix" type="email" placeholder="Email" name="email"/>
                                                        <input class="m-wrap placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
							<input class="m-wrap placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password"/>
							
							<button type="submit" class="btn btn-default">Create Account</button>
						</form>
                                                <br/>
                                                <span>
                                                            Already Member.? <a href="login.php">Login </a>
								
							</span>
					</div><!--/sign up form-->
                                        
                                        
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					
				</div>
				 
				<!--<div class="col-sm-4">
					
				</div>-->
			</div>
                   
		</div>
	</section><!--/form-->
	
  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>