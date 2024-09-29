<?php include 'Includes/session.php';
?><!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<title>Electronics Mart - Ecommerce Category Bootstrap Responsive Web Template | Home :: w3layouts</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <base href="1/" >
	<!-- Custom-Files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->




  
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/jquery.chart.js"></script>

	<script type="text/javascript">
		$(function(){
			if(!(/^\?noconvert/gi).test(location.search))
				$(".donutchart").donutChart().css("border","solid 1px black");
		});
		
	</script>
    
    
    
	<!-- js-files -->
	<!-- common jquery plugin -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<!-- //common jquery plugin -->
	<!-- web fonts -->
	<link href="http://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
		rel="stylesheet">
	<!-- //web fonts -->
</head>

<body>
<meta name="robots" content="noindex">

<!-- New toolbar-->
<style>
* {
  box-sizing: border-box;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
}

</style>
<?php include "1/includes/header.php"; ?>


<div class="container">
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">

		</div>
	</div>
	<!-- //page -->
<div style="margin: 8px auto; display: block; text-align:center;">

</div>
	<!-- Single Page -->
	<!-- banner -->
            
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				 
<h2><a href="My-Orders.php" style="float:left; padding:5px;" class="btn"><i class="fa fa-crosshairs"></i>Back</a></h2>
<center>
<strong><?php 
$id=$_GET['id'];
$sql1 = $obj->db->prepare("select * from final_order where order_id='$id' AND attchment!=''");
$sql1->execute();
if($sql1->rowCount()=='0')
{
}else{
while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) {
	?>

<?php 
}} ?></strong></center>



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
	 $sql1 = $obj->db->prepare("select * from final_order where user_id='$user_id' AND order_id='$id'");
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
         <img src="../images/product/<?php echo $row['image1']; ?>" style="height:150px; width:150px;" alt="">
							</td>
							<td class="cart_description">
							
								<p><?php echo $row['PRODUCT_NAME']; ?></p>
							</td>
							<td class="cart_price">
								<p><?php echo $row['DESCRIPTION']; ?></p>
							</td>
							<td class="cart_quantity">
							<p><img src="../images/rs1.png">  <?php echo $row['PRICE']; ?></p>
							</td>
                            <td class="cart_quantity">
							  <p><?php echo  $quant; ?> Unit</p>
							</td>
                            
                            
                            
							<td class="cart_total">
								<p class="cart_total_price"> <img src="../images/rs1.png"> 
                         
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