<html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Epharmc</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2_metro.css" />
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="assets/css/pages/login-soft.css" rel="stylesheet" type="text/css"/>
	<!-- END PAGE LEVEL STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
	<!-- BEGIN LOGO -->
	<div class="logo">
            <img src="assets/img/login-logo.png"/>
	</div>
	<!-- END LOGO -->
	<!-- BEGIN LOGIN -->
	<div class="content">
		<!-- BEGIN LOGIN FORM -->
		<form class="form-vertical login-form" action="" method="post">
			<h3 class="form-title">Login to your account</h3>
			<div class="alert alert-error hide">
				<button class="close" data-dismiss="alert"></button>
				<span>Enter any username and password.</span>
			</div>
			<div class="control-group">
				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
				<label class="control-label visible-ie8 visible-ie9">Username</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-user"></i>
						<input class="m-wrap placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">Password</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-lock"></i>
						<input class="m-wrap placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
					</div>
				</div>
			</div>
			<div class="form-actions">
				<label class="checkbox">
				<input type="checkbox" name="remember" value="1"/> Remember me
				</label>
				<button type="submit" class="btn blue pull-right">
				Login <i class="m-icon-swapright m-icon-white"></i>
				</button>            
			</div>
			<div class="forget-password">
				<h4>Forgot your password ?</h4>
				<p>
					no worries, click <a href="javascript:;"  id="forget-password">here</a>
					to reset your password.
				</p>
			</div>
			<div class="create-account">
				<p>
					Don't have an account yet ?&nbsp; 
					<a href="javascript:;" id="register-btn" >Create an account</a>
				</p>
			</div>
		</form>
		<!-- END LOGIN FORM -->        
		<!-- BEGIN FORGOT PASSWORD FORM -->
		<form class="form-vertical forget-form" action="index.html" method="post">
			<h3 >Forget Password ?</h3>
			<p>Enter your e-mail address below to reset your password.</p>
			<div class="control-group">
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-envelope"></i>
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="Email" autocomplete="off" name="email" />
					</div>
				</div>
			</div>
			<div class="form-actions">
				<button type="button" id="back-btn" class="btn">
				<i class="m-icon-swapleft"></i> Back
				</button>
				<button type="submit" class="btn blue pull-right">
				Submit <i class="m-icon-swapright m-icon-white"></i>
				</button>            
			</div>
		</form>
		<!-- END FORGOT PASSWORD FORM -->
		<!-- BEGIN REGISTRATION FORM -->
                <form class="form-vertical register-form" action="register.php" method="post">
			<h3>Create Account</h3>
			<p>Enter your detail below:</p>
			<div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">Name Of Business</label>
				<div class="controls">
					<div class="input-icon left">
						<!--<i class="icon-font"></i>-->
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="Name Of Business" name="bname"/>
					</div>
				</div>
			</div>
			<div class="control-group">
				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
				<label class="control-label visible-ie8 visible-ie9">Type of Business</label>
				<div class="controls">
					<div class="input-icon left">
						<!--<i class="icon-envelope"></i>-->
						<select name="btype" class="form-control" >
                                                    <option>Select Type Of business</option>
                                                    <option value="Retailer">Retailer </option>
                                                    <option value="Distributor">Distributor</option>
                                                </select>
					</div>
				</div>
			</div>
			 
			 <div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">Name Of Owner</label>
				<div class="controls">
					<div class="input-icon left">
						<!--<i class="icon-font"></i>-->
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="Name of Owner" name="oname"/>
					</div>
				</div>
			</div>
                        
                        <div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">Date of Birth</label>
				<div class="controls">
					<div class="input-icon left">
						<!--<i class="icon-font"></i>-->
						<input class="m-wrap placeholder-no-fix" type="date" placeholder="Date of Birth" name="dob"/>
					</div>
				</div>
			</div>
                        
                         <div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">Sex</label>
				<div class="controls">
					<div class="input-icon left">
						<!--<i class="icon-font"></i>-->
						<select name="gender" class="form-control" >
                                                    <option>Gender</option>
                                                    <option value="Male">Male </option>
                                                    <option value="Female">Female</option>
                                                </select>
					</div>
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">Address</label>
				<div class="controls">
					<div class="input-icon left">
						<!--<i class="icon-font"></i>-->
                                            <textarea  class="m-wrap placeholder-no-fix" rows="3" cols="10" name="addr" >Address</textarea>
						 
					</div>
				</div>
			</div>
			 <div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">City</label>
				<div class="controls">
					<div class="input-icon left">
						<!--<i class="icon-font"></i>-->
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="City" name="city"/>
					</div>
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">District</label>
				<div class="controls">
					<div class="input-icon left">
						<!--<i class="icon-font"></i>-->
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="District" name="dist"/>
					</div>
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">State</label>
				<div class="controls">
					<div class="input-icon left">
						<!--<i class="icon-font"></i>-->
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="State" name="state"/>
					</div>
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">Pin</label>
				<div class="controls">
					<div class="input-icon left">
						<!--<i class="icon-font"></i>-->
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="Pin" name="pin"/>
					</div>
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">Phone</label>
				<div class="controls">
					<div class="input-icon left">
						<!--<i class="icon-font"></i>-->
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="Phone" name="phone"/>
					</div>
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">Email</label>
				<div class="controls">
					<div class="input-icon left">
						<!--<i class="icon-font"></i>-->
						<input class="m-wrap placeholder-no-fix" type="email" placeholder="Email" name="email"/>
					</div>
				</div>
			</div>
                        
			<p>Enter your account details below:</p>
			<div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">Username</label>
				<div class="controls">
					<div class="input-icon left">
						<!--<i class="icon-user"></i>-->
						<input class="m-wrap placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">Password</label>
				<div class="controls">
					<div class="input-icon left">
						<!--<i class="icon-lock"></i>-->
						<input class="m-wrap placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password"/>
					</div>
				</div>
			</div>
			
			<div class="control-group">
				<div class="controls">
					<label class="checkbox">
					<input type="checkbox" name="tnc"/> I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
					</label>  
					<div id="register_tnc_error"></div>
				</div>
			</div>
			<div class="form-actions">
				<button id="register-back-btn" type="button" class="btn">
				<i class="m-icon-swapleft"></i>  Back
				</button>
				<button type="submit"   class="btn green pull-right">
				Create Account <i class="m-icon-swapright m-icon-white"></i>
				</button>            
			</div>
		</form>
		<!-- END REGISTRATION FORM -->
	</div>
	<!-- END LOGIN -->
	<!-- BEGIN COPYRIGHT -->
	<div class="copyright">
	 
	</div>
	<!-- END COPYRIGHT -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->  
        <script src="assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
	<!--[if lt IE 9]>
	<script src="assets/plugins/excanvas.min.js"></script>
	<script src="assets/plugins/respond.min.js"></script>  
	<![endif]-->   
	<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
	<script src="assets/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="assets/scripts/app.js" type="text/javascript"></script>
	 <script src="assets/scripts/login-soft.js" type="text/javascript"></script>      
	<!-- END PAGE LEVEL SCRIPTS --> 
	<script>
		jQuery(document).ready(function() {     
		  App.init();
		  Login.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->
	
</body>
<!-- END BODY -->
</html>