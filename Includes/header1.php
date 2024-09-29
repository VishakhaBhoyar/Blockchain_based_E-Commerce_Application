<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><br /></li>
								<li><br /></li>
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
							<a href="userdashboard.php"><img src="images/home/logo.png" alt="" style="width:600px;" /></a>
						</div>
                                            <?php	
 /* //require "includes/connection.php";
   // Here we just call the ADB_Fuctions file for provinding the connection
   
  $obj= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
	
	$id=$_SESSION['Retailer_id'];
			
	 $sql = $obj->db->prepare("select * from ep_user where USER_ID='$id'");
		$sql->execute();
		while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			$city=$row['CITY'];
                        $name_buisness=$row['F_NAME'];
				
				}*/
                                ?>
                                          
						 
					</div>
                                    
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								 
								<!--<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>--><li><a href="index.php"><i class="fa fa-star"></i> Home</a></li>
								<?php if(isset($_SESSION['Retailer'])){ ?><li><a href="My-Orders.php"><i class="fa fa-star"></i> My Orders</a></li>
							
								<li><a href="cart_details.php?id=14&payment=cod"><i class="fa fa-shopping-cart"></i> Cart<?php	
 //require "includes/connection.php";
   // Here we just call the ADB_Fuctions file for provinding the connection
   
  $obj= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
	 
	 $user_id=$_SESSION['Retailer_id'];
	 $sql1 = $obj->db->prepare("select COUNT(*) as c from cart where user_id='$user_id'");
	$sql1->execute();
		while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) {
			
			echo $row1['c'];}
		
		?></a></li>
        <li>Welcome  <strong><?php /*echo $name_buisness;*/ ?>, </strong> </li>
                                                                <li><a href="logout.php"><i class="fa fa-crosshairs"></i> Logout</a></li>
							 <?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	 <form method="POST" action="Search-Dashboard.php">
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						 
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="typeahead.min.js"></script>
    <script>
    $(document).ready(function(){
    $('input.typeahead').typeahead({
        name: 'typeahead',
        remote:'search.php?key=%QUERY',
        limit : 10
    });
});
    </script> <form action="Search-Dashboard.php" method="get" id="search_box">
    
     <div class="wrapper"><div class="row">
  <div class="col-lg-12">
   
  <div class="col-lg-12">
    <div class="input-group">
							<input type="text" name="q" required autofocus style="font-family: 'Rokkitt', serif;" class="typeahead tt-query" id="search" placeholder="Search for Products" autocomplete="off" spellcheck="false"/>
                            <span class="input-group-btn">
        <button class="btn btn-secondary" type="submit">Go!</button>
      </span>
                                                       
                            </div>
                            </form>
                              
                
	
        
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header--> 
    
  