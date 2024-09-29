<?php include 'Includes/session.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart </title>
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
			
            




<h2><a href="My-Orders.php" style="float:left; padding:5px;" class="btn"><i class="fa fa-star"></i>View by Distrubtor</a>
<a href="My-Orders-Productwise.php" style="float:left; padding:5px;" class="btn"><i class="fa fa-star"></i>View Order Product Wise</a>
</h2>


				</ol>
			</div>
            
			<div class="table-responsive cart_info">
            
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description">Order Id</td>
							
							<td class="quantity">Total Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
                    
 <?php	
  //require "includes/connection.php";
   // Here we just call the ADB_Fuctions file for provinding the connection
  $obj= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
	 
	  $user_id=$_SESSION['Retailer_id'];
	 $sql1 = $obj->db->prepare("select * from final_order where user_id='$user_id' group by order_id");
	$sql1->execute();
	$i=0;
		while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) {
			$product=$row1['dist_id'];	
			$order_date=$row1['order_date'];
			  $order_id=$row1['order_id'];
			  $product=$row1['p_id'];	

			
			?> 
                       
						<tr>
							<td class="cart_product">
                     <a href="My-Orders-View-Details.php?id=<?php echo $order_id; ?>">
                     <img src="images/icon-order.png" alt=""></a>
							</td>
							<td class="cart_total_price">
							<p><?php echo $row1['order_id']; ?></p>
							</td>
							
							<td class="cart_quantity">
								<div class="cart_quantity_button">
                                
                             <form method="POST" action="cart.php">
                             
        <?php
		$sqls = $obj->db->prepare("select COUNT(*) as c from final_order where order_id='$order_id'");
		$sqls->execute();
		while($rows = $sqls->fetch(PDO::FETCH_ASSOC)) {
			 echo "Products "; echo $quant=$rows['c']; }
		?>
							 
						
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"> <img src="images/rs1.png"> 
                                
                                
                                
                                
       <?php	
  $user_id=$_SESSION['Retailer_id'];
	 $sql2 = $obj->db->prepare("select * from final_order where order_id='$order_id'");
	$sql2->execute();
	$i=0;
		while($rows1 = $sql2->fetch(PDO::FETCH_ASSOC)) {
				 $product=$rows1['p_id'];	
  $sql3 = $obj->db->prepare("select * from ep_product where PD_ID='$product'");
		$sql3->execute();
		
		    while($rows2 = $sql3->fetch(PDO::FETCH_ASSOC)) {
				
				 $i=$i+$rows2['PRICE'];
				
			} }
			echo $i;
			?>                          
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                </p>
							</td>
							
                                                        
						</tr>

					<?php } ?>	 
						 
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