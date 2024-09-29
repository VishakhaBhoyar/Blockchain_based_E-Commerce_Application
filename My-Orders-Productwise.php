<?php include 'Includes/session.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | Epharmc</title>
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

<body>
	<?php include 'Includes/header.php'; ?>

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
			
            




<h2><a href="My-Orders-View.php" style="float:left; padding:5px;" class="btn"><i class="fa fa-star"></i>View by Order</a></h2>
<h2><a href="My-Orders-Productwise.php" style="float:left; padding:5px;" class="btn"><i class="fa fa-star"></i>View by Product</a></h2>


				</ol>
			</div>
            
			<div class="table-responsive cart_info">
            
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description">Product Name</td>
							<td class="price">Price</td>
							<td class="quantity">Total Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
                    
 <?php	

 $obj= new Connections();
	   $user_id=$_SESSION['Retailer_id'];
	 $sql1 = $obj->db->prepare("select * from final_order where user_id='$user_id'");
	 $sql1->execute();
	 $i=0;
	 while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) {
	$pid=$row1['p_id'];
	$quantity=$row1['quantity'];
	$sql2 = $obj->db->prepare("select * from ep_product where PD_ID='$pid'");
	$sql2->execute();
	$i=0;
	while($row2 = $sql2->fetch(PDO::FETCH_ASSOC)) {
			?> 
                       
						<tr>
							<td class="cart_product">
        <img src="images/product_demo.jpg" style="height:150px; width:150px;" alt="">
							</td>
							<td class="cart_description">
							<p><?php echo $row2['PRODUCT_NAME']; ?></p>
							</td>
							<td class="cart_price">
								<p><?php echo $row2['PRICE']; ?></p>
							</td>
                            <td class="cart_price">
								<p><?php echo $quantity; ?></p>
							</td>
                             <td class="cart_price">
								<p><?php echo $quantity*$row2['PRICE']; ?></p>
							</td>
							
							        
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                </p>
							</td>
							
                                                        
						</tr>

					<?php }} ?>	 
						 
					</tbody>
				</table>
                <!--<center>
                <form action="cart.php" method="POST">
                <input type="submit" name="send-enquire" value="Send Enquire" class="btn btn-primary">
               </form>
                </center>-->
			</div>
		</div>
	</section> <!--/#cart_items-->

	
	<?php include 'Includes/footer.php'; ?>
	


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>