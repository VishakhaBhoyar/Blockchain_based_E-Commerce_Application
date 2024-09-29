<?php
session_start();
if(isset($_SESSION['name'])){
 echo "<script>window.location='index.php';</script>";
	
}
?><!DOCTYPE HTML>
<html>
<head>
<title>Blockchain based academic certificate management using smart contract</title>
<!-- Bootstrap -->
<link href="web/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="web/css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.web/js/1.4.2/respond.min.js"></script>
<![endif]--><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="web/js/jquery.min.js"></script>
<script type="text/javascript" src="web/js/bootstrap.js"></script>
<script type="text/javascript" src="web/js/bootstrap.min.js"></script>
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/web/css/font-awesome.min.css">
   	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	
<style type="text/css">
	    .navbar{margin-bottom:0px;}.navbar-inverse .navbar-brand{ color: white;}
.navbar-inverse .navbar-nav>li>a {
    color: #ffffff;
}
	    .navbar-inverse {
    background-color: #27639f;
    border-color: #125eaa;
}
</style>
</head>
<body>

<?php 
include 'Application/DB_Functions.php';  // Include Db_function file for asseccing the function

$obj= new Connections(); 
if(isset($_POST['f_name']))
{

$f_name = $_POST['f_name'];
$email = $_POST['email'];
$password =$_POST['password'];
$contact = $_POST['contact'];


if($obj->insert_miners_reg($f_name,$email,$password,$contact)==1)
{

 echo "<script>alert('You have submitted your data Succesfully!!');window.location='miners-login.php';</script>";
}
else{
echo "<script type='text/javascript'>
alert('Email is already Register with us!!');
</script>";
}}
 ?>



<div class="main_btm"><!-- start main_btm -->
	<div class="container">
		<br><br>
			 
				<div class="col-md-8">
				  <div class="contact-form">
				  	<h2>Miners Registration</h2>
	 <form method="post" action="" enctype="multipart/form-data">
		
    			


<div>
						    	<span> Name</span>
<span><input type="text" required name="f_name" class="form-control" id="userName">
</span>
</div>

	   <div>
						    	<span> E-mail</span>
						    	<span><input type="text" name="email" class="form-control" id="inputEmail3"></span>
						    </div>
                             <div>
						    	<span> Password</span>
						    	<span><input type="password" name="password" class="form-control" id="inputEmail3"></span>
						    </div>
    
                     <div>
						    	<span>Company Contact</span>
<span><input type="text" maxlength="10" required name="contact" class="form-control" id="userName">
</span>
						    </div>
                           <br>
						    
                         <div>
						   		<label class="fa-btn btn-1 btn-1e">
                                <input type="submit" value="Register">
                                </label>
						  </div>
					    </form>
					    <br>
					    <a href="miners-login.php">Login</a>
				    </div>
  			</div>		
  			<div class="clearfix"></div>		
	 
</div>
</div>

</body>
</html>