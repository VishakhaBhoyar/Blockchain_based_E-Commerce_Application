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
				 


<h2><a href="My-Orders.php" style="float:left; padding:5px;" class="btn"><i class="fa fa-crosshairs"></i>Back</a>
</h2>
<?php 
$sql1 = $obj->db->prepare("select * from final_order where user_id='$user_id' AND dist_id='$id'");
$sql1->execute();
$i=0;
while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) {
			
} ?>
<a href=""></a>

</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
                         <td class="image">Order Id</td>
							<td class="image">Date</td>
                           
                            <td class="image">Item</td>
							<td class="description">Product Name</td>
							<td class="price">Description</td>
							<td class="quantity">Price</td>
                            <td class="quantity">Quantity</td>
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
	 $id=$_GET['id'];
	 $sql1 = $obj->db->prepare("select * from final_order where user_id='$user_id' AND dist_id='$id'");
	$sql1->execute();
	$i=0;
		while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) {
			 $order_date=$row1['order_date'];
			  $order_id=$row1['order_id'];
			  $product=$row1['p_id'];	
			$quant=$row1['quantity'];	
  $sql = $obj->db->prepare("select * from ep_product where PD_ID='$product'");
		$sql->execute();
		
		    while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			
			?> 
                       
						<tr>
                        
                        
                        
                         <td class="cart_total_price">
							
								<?php echo  $order_id; ?>
							</td>
                            
                            
                            
                        <td class="cart_description">
							
								<p><?php echo $order_date; ?></p>
							</td>
                            
                            
                           
                            
                            
                            
							<td class="cart_product">
                    <img src="../images/product/<?php echo $row['image1']; ?>" alt="" style="height:100px; width:50px;" />
							</td>
							<td class="cart_description">
							
								<p><?php echo $row['PRODUCT_NAME']; ?></p>
							</td>
							<td class="cart_price">
								<p><?php echo $row['DESCRIPTION']; ?></p>
							</td>
							<td class="cart_quantity">
							<p><i class="fa fa-inr"></i>  <?php echo $row['PRICE']; ?></p>
							</td>
                            <td class="cart_quantity">
							  <p><?php echo  $quant; ?> Unit</p>
							</td>
                            
                            
                            
							<td class="cart_total">
								<p class="cart_total_price"> <i class="fa fa-inr"></i>
                         
                        <?php echo $quant*$row['PRICE']; ?></p>
                               
							</td>
                            
                            
							
                                                        
						</tr>

					<?php }} ?>	 
						 
					</tbody>
				</table>
               
			</div>
		</div>
	</section> <!--/#cart_items-->

	
	<?php include 'Includes/footer.php'; ?>
	
<?php
if(isset($_POST['id']))
{
$id=$_POST['id'];
$file=$_FILES["file"]["name"];
if($obj->update_file($id,$file)==1)
{
echo "<script>alert('Uploaded');</script>";
}
}
?>

    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>