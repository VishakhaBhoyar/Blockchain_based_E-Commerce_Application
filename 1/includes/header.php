<?php
$obj1= new Connections(); // Now we create the object of AdminConnection class and through that object we are going to call connection
if(isset($_POST['username']) && isset($_POST['passwordlogin']))
            {
        $name=strip_tags($_POST['username']);
         $passwordlogin=($_POST['passwordlogin']); 


  $obj1= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
			
  $sql = $obj1->db->prepare("select * from  ep_user where USERNAME='$name' AND PASSWORD='$passwordlogin'");
		
		$sql->execute();
		if($sql->rowCount()>0){
		 while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
		
        	if($row['TYPE_BUSINESS']=="Distributor"){
				
         $_SESSION['Distributor']=$name;
		 $_SESSION['Distributor_id']=$row['USER_ID'];
		 
           echo "<script>//window.location='Distributor/userdashboard.php';</script>";
			}
			
			if($row['TYPE_BUSINESS']=="Retailer"){
         $_SESSION['Retailer']=$name;
		 $_SESSION['Retailer_id']=$row['USER_ID'];
           echo "<script>window.location='../index.php';</script>";
			}		   
		   
          
        }}
        else
        {
        echo "<script>alert('Incorrect Username and Password');</script>";
        }
            }
?>
	<!-- top-header -->
	<div class="agile-main-top">
		<div class="container">
			<div class="row main-top-w3l py-2">
				<div class="col-lg-3 col-sm-4 header-most-top">
					<p class=" text-lg-left text-center">Welcome to our shop!</p>
				</div>
				<div class="col-lg-9 col-sm-8 header-right ml-auto text-sm-right text-center">
					<!-- header lists -->
					<ul class="top-header-lists">
						
                        <?php if(isset($_SESSION['Retailer'])){ ?> <li>Welcome  <strong><?php echo $_SESSION['Retailer']; ?> |  </strong> </li>
                        <li><a href="../My-Orders.php"><i class="fa fa-star"></i> My Orders | </a></li>
							
								<li><a href="../cart_details.php?id=14&payment=cod"><i class="fa fa-shopping-cart"></i> Cart<?php	
 //require "includes/connection.php";
   // Here we just call the ADB_Fuctions file for provinding the connection
   
  $obj= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
	 
	 $user_id=$_SESSION['Retailer_id'];
	 $sql1 = $obj->db->prepare("select COUNT(*) as c from cart where user_id='$user_id'");
	$sql1->execute();
		while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) {
			
			echo $row1['c'];}
		
		?> | </a></li>
       
                                                                <li><a href="../logout.php"><i class="fa fa-crosshairs"></i> Logout</a></li>
							 <?php }else{ ?>
                        
						<li class="mx-3">
							<a href="../#login" data-toggle="modal" data-target="#exampleModal" class="">
								<i class="fas fa-sign-in-alt mr-1"></i> Log In </a>
						</li>
						<li>
							<a href="../register.php" class="">
								<i class="fas fa-sign-out-alt mr-1"></i>Register </a>
						</li>
						<li>
							<a href="../miners/index.php" class="">
								<i class="fas fa-sign-out-alt mr-1"></i>miners </a>
						</li>
						<li>
							<a href="../Admin/index.php" class="">
								<i class="fas fa-sign-out-alt mr-1"></i>Admin </a>
						</li>
                        <?php } ?>
                        
                        
					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>

	
	<!-- //shop locator (popup) -->
	<!-- modals -->
	<!-- log in -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center">Log In</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="" method="post">
						<div class="form-group">
							<input type="text"  class="form-control" placeholder="Username" name="username" required="">
						</div>
						<div class="form-group">
							<input type="password"   class="form-control" placeholder="Password" name="passwordlogin"
								required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Log in">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
								<label class="custom-control-label" for="customControlAutosizing">Remember me?</label>
							</div>
						</div>
						<p class="text-center dont-do mt-3">Don't have an account?
							<a href="../register.php">
								Register Now</a>
						</p>
						
						
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- register -->
	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Register</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="#" method="post">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Name" name="Name" required="">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" placeholder="Email" name="Email" required="">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Password" name="Password"
								id="password1" required="">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Confirm Password"
								name="Confirm Password" id="password2" required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Register">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
								<label class="custom-control-label" for="customControlAutosizing2">I Accept to the Terms
									& Conditions</label>
							</div>
						</div>
						<p class="text-center dont-do mt-3">(Or)</p>
						<div class="social text-center mt-2">
							<ul class="list-unstyled">
								<li class="d-inline">
									<a class="icon fb" href="#facebook">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li class="d-inline mx-1">
									<a class="icon tw" href="#twitter">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li class="d-inline">
									<a class="icon gp" href="#google-plus">
										<i class="fab fa-google-plus-g"></i>
									</a>
								</li>
							</ul>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<!-- //top-header -->

	<!-- header-bottom-->
	<div class="header-bot my-md-4 my-3" id="site-header">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid align-items-center">
				<!-- logo -->
				<div class="col-lg-3 col-md-4 logo_agile">
					<h1>
						<a href="../index.php"><span>E</span>lectronics <span>M</span>art</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-lg-9 col-md-8 header">
					<div class="row">
						<!-- search -->
						<div class="col-lg-9 col-sm-8 agileits_search">
							<form class="form-inline" action="../Search-Dashboard.php" method="post" style="max-width:600px;">
								<input class="form-control" type="search"
									placeholder="Search for products, brands and more" aria-label="Search" required name="q">
								<button class="btn" type="submit"><i class="fa fa-search"
										aria-hidden="true"></i></button>
							</form>
						</div>
						<!-- //search -->
						<!-- cart details -->
						<div
							class="col-lg-3 col-sm-4 top_nav_right text-center mt-sm-0 mt-2 d-flex align-items-center justify-content-between">
							<div class="cart-store">
								<!-- toggle switch for light and dark theme -->
								<div class="cont-ser-position">
									<nav class="navigation">
										<div class="theme-switch-wrapper">
											<label class="theme-switch" for="checkbox">
												<input type="checkbox" id="checkbox">
												<div class="mode-container">
													<i class="gg-sun"></i>
													<i class="gg-moon"></i>
												</div>
											</label>
										</div>
									</nav>
								</div>
								<!-- //toggle switch for light and dark theme -->
							</div>
						
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								<a href="../cart_details.php?id=14&payment=cod">
										<img src="images/cart.png" alt="" class="img-fluid"> Cart
								</a>
							</div>
						</div>
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->
	<!-- navigation -->
	<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="agileits-navi_search">
					<form action="#" method="post">
						

       
<script>
document.getElementById('agileinfo-nav_search').onchange = function() {
    window.location.href = this.children[this.selectedIndex].getAttribute('href');
}
</script>
                          
 <select onchange="location = this.value;" id="agileinfo-nav_search" name="agileinfo_search" required="">
                 <option value="">All Categories</option>    <?php	
  //require "includes/connection.php";
   // Here we just call the ADB_Fuctions file for provinding the connection
   
  $obj= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
			
  $sql = $obj->db->prepare("select * from  ep_category");
		
		$sql->execute();
		
			
		    while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			
			?>  

							
<option value="../Category-Search.php?id=<?php echo $row['CATEGORY_NAME']; ?>">
	<?php echo $row['CATEGORY_NAME']; ?></option>
							
					  
                            <?php } ?>	</select>
					</form>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav text-center ml-auto">
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="../index.php">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								Electronics
							</a>
							<div class="dropdown-menu">
								<div class="agile_inner_drop_nav_info p-4">
									<h5 class="mb-3">Mobiles, Computers</h5>
									<div class="row">
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li>
													<a href="../Category-Search.php?id=Smart Phone">All Mobile Phones</a>
												</li>
												
												<li>
													<a href="../Category-Search.php?id=Cases & Covers">Cases & Covers</a>
												</li>
												<li>
													<a href="../Category-Search.php?id=Screen Protectors">Screen Protectors</a>
												</li>
												<li>
													<a href="../Category-Search.php?id=Power Banks">Power Banks</a>
												</li>
												
											</ul>
										</div>
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li>
													<a href="../Category-Search.php?id=Laptops">Laptops</a>
												</li>
												<li>
													<a href="../Category-Search.php?id=Drives & Storage">Drives & Storage</a>
												</li>
												<li>
													<a href="../Category-Search.php?id=Printers & Ink">Printers & Ink</a>
												</li>
												<li>
													<a href="../Category-Search.php?id=Networking Devices">Networking Devices</a>
												</li>
												<li>
													<a href="../Category-Search.php?id=Computer Accessories">Computer Accessories</a>
												</li>
												<li>
													<a href="../Category-Search.php?id=Game Zone">Game Zone</a>
												</li>
												<li>
													<a href="../Category-Search.php?id=Software">Software</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								Appliances
							</a>
							<div class="dropdown-menu">
								<div class="agile_inner_drop_nav_info p-4">
									<h5 class="mb-3">TV, Appliances, Electronics</h5>
									<div class="row">
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li>
													<a href="../Category-Search.php?id=Televisions">Televisions</a>
												</li>
												
												<li>
													<a href="../Category-Search.php?id=Headphones">Headphones</a>
												</li>
												<li>
													<a href="../Category-Search.php?id=Speakers">Speakers</a>
												</li>
												
												<li>
													<a href="../Category-Search.php?id=Cameras">Cameras</a>
												</li>
												<li>
													<a href="../Category-Search.php?id=DSLR Cameras">DSLR Cameras</a>
												</li>
											
											</ul>
										</div>
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li>
													<a href="../Category-Search.php?id=Musical Instruments">Musical Instruments</a>
												</li>
												<li>
													<a href="../Category-Search.php?id=Gaming Consoles">Gaming Consoles</a>
												</li>
												<li>
													<a href="product2.html">All Electronics</a>
												</li>
												<li>
													<a href="../Category-Search.php?id=Air Conditioners">Air Conditioners</a>
												</li>
												<li>
													<a href="../Category-Search.php?id=Refrigerators">Refrigerators</a>
												</li>
												<li>
													<a href="../Category-Search.php?id=Washing Machines">Washing Machines</a>
												</li>
												<li>
													<a href="../Category-Search.php?id=Kitchen & Home Appliances">Kitchen & Home Appliances</a>
												</li>
												<li>
													<a href="../Category-Search.php?id=Heating & Cooling Appliances">Heating & Cooling Appliances</a>
												</li>
												
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
					
					
					
						<li class="nav-item">
							<a class="nav-link" href="../contact.php">Contact Us</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->