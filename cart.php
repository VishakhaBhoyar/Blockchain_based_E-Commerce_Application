<?php include 'Includes/session.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | User Account</title>
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
				 
                  <?php 
if(isset($_POST['user_id']) && isset($_POST['product_id'])){
  $user_id=$_POST['user_id'];
  $product_id=$_POST['product_id'];
if($obj->delete_prod($user_id,$product_id)==1)
{
echo "<h5 style='color:red;'>Product Deleted From Cart.</h5>";
}
else
{
echo "Oops";
}	
}
?>
 <?php	
if(isset($_POST['send-enquire'])){
  $obj= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
	 
	 $user_id=$_SESSION['Retailer_id'];
	 $sql1 = $obj->db->prepare("select * from cart where user_id='$user_id'");
	$sql1->execute();
	$i=0;
		while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) {
				 $product=$row1['product_id'];	
  $sql = $obj->db->prepare("select * from ep_product where PD_ID='$product'");
		$sql->execute();
		while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			$DISTRIBUTER_ID=$row['DISTRIBUTER_ID'];
			$sql2 = $obj->db->prepare("select * from  ep_user where USER_ID='$DISTRIBUTER_ID'");
		$sql2->execute();
		while($row2 = $sql2->fetch(PDO::FETCH_ASSOC)) {
			
			echo $row2['EMAIL'];
			
			
			
			
			


function spamcheck($field) {
  // Sanitize e-mail address
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);
  // Validate e-mail address
  if(filter_var($field, FILTER_VALIDATE_EMAIL)) {
    return TRUE;
  } else {
    return FALSE;
  }
}

// display form if user has not clicked submit
  // the user has submitted the form
  // Check if the "from" input field is filled out
  if (isset($_POST["from"])) {
    // Check if "from" email address is valid
    $mailcheck = spamcheck($_POST["from"]);
    if ($mailcheck==FALSE) {
      echo "Invalid input";
    } else {
      $from = $_POST["from"]; // sender
      $subject = $_POST["subject"];
      $message = $_POST["message"];
	  $message .= "Name: ".$_POST['f-name']."\n";
	  $message .= "Email: ".$_POST['f-email']."\n";
          $message .= "Reason: ".$_POST['f-reason']."\n";
          $message .= "Reason: ".$_POST['f-subject']."\n";
          $message .= "Reason: ".$_POST['f-description']."\n";
	 
	  
	
	 
		
	  // message lines should not exceed 70 characters (PHP rule), so wrap it
      $message = wordwrap($message, 70);
      // send mail
      mail("kushaldhole@hotmail.com",$subject,$message,"From: $from\n");
	  echo "<script>alert('Thank You!! We will get back to you shortly');</script>";
      }
  }



			
			
			
			
			
			
			

}
}
}}
?> 
            







				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description">Name of Seller</td>
							<td class="price">City</td>
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
	 $sql1 = $obj->db->prepare("select * from cart where user_id='$user_id' group by dist_id");
	$sql1->execute();
	$i=0;
		while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) {
			 $product=$row1['dist_id'];	
  $sql = $obj->db->prepare("select * from ep_user where USER_ID='$product'");
		$sql->execute();
		
		    while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			
			?> 
                       
						<tr>
							<td class="cart_product">
                     <a href="payments_details.php?id=<?php echo $product; ?>"><img src="images/brown-man-icon.png" style="height:150px; width:150px;" alt=""></a>
							</td>
							<td class="cart_description">
							
								<p><?php echo $row['F_NAME']; ?></p>
							</td>
							<td class="cart_price">
								<p><?php echo $row['CITY']; ?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
                                
                             <form method="POST" action="cart.php">
                             
        <?php
		$sqls = $obj->db->prepare("select COUNT(*) as c from cart where dist_id='$product'");
		$sqls->execute();
		while($rows = $sqls->fetch(PDO::FETCH_ASSOC)) {
			 echo "Products "; echo $quant=$rows['c']; }
		?>
							 
						
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price" style="color:white;"> <img src="images/rs1.png"> 
                                
                                
                                
                                
       <?php	
   $user_id=$_SESSION['Retailer_id'];

	 $sql2 = $obj->db->prepare("select * from cart where user_id='$user_id'");
	$sql2->execute();
	$i=0;
		while($rows1 = $sql2->fetch(PDO::FETCH_ASSOC)) {
				 $product=$rows1['product_id'];	
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

					<?php }} ?>	 
						 
					</tbody>
				</table>
                <center>
                <form action="cart.php" method="POST">
               <!-- <input type="submit" name="send-enquire" value="Send Enquire" class="btn btn-primary">-->
               </form>
                </center>
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