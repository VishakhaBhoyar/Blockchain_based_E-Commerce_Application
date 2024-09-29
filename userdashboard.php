<?php include 'Includes/session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Home </title>
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

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head><!--/head-->

<body>

	<?php include 'Includes/header1.php'; ?>
    <?php include 'Includes/sidebar.php'; ?>

	     <?php
$obj= new Connections(); // Create object of class connection for calling the Personal_Details function
if(isset($_POST['user_id']))
{
 $user_id = $_POST['user_id'];
 $product_id = $_POST['product_id'];
$DISTRIBUTER_ID=$_POST['DISTRIBUTER_ID'];
//echo $bname; 

 $obj1= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
			
  $sql = $obj1->db->prepare("select * from cart where user_id='$user_id' AND product_id='$product_id'");
		
		$sql->execute();
		 $sql->rowCount();
		if($sql->rowCount()==0){
if($obj->Storecart($user_id,$product_id,$DISTRIBUTER_ID)==1)
{
echo "
<script type='text/javascript'>
    $(window).load(function(){
        $('#myModal').modal('show');
    });
</script>";}
else{

}
		}else{
echo "<span style='color:red; float:left;'><strong>Product Already Added to Cart...Please Check your<a href='cart.php'> Cart</a></strong></span>";
			}
		
}

?>   
        

				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Product List</h2>
						
                        
          
<div class="container" style="margin-left: -102px;">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" style="height:300px; width:1000px;">

      <div class="item active">
        <img src="images/misc-1-0.jpg" style="height:400px; width:100%;" alt="Chania" width="800" height="345">
        <div class="carousel-caption">
         
        </div>
      </div>

      <div class="item">
        <img src="images/4500x900_03._UX1500_SX1500_.jpg" style="height:400px; width:100%;" alt="Chania"  width="800" height="345">
        <div class="carousel-caption">
         
        </div>
      </div>
    
      <div class="item">
        <img src="images/Laptopbunk._UX1500_SX1500_.jpg" style="height:400px; width:100%;" alt="Flower" width="800" height="345">
        <div class="carousel-caption">
          
        </div>
      </div>

      <div class="item">
        <img src="images/mobile-slider-image23.png" style="height:400px; width:100%;" alt="Flower" width="800" height="345">
        <div class="carousel-caption">
          
        </div>
      </div>
  
    </div>

  </div>
</div>              
                        
<br><br>
 <?php	
  //require "includes/connection.php";
   // Here we just call the ADB_Fuctions file for provinding the connection
   
  $obj= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
			
  $sql = $obj->db->prepare("select * from ep_product ORDER BY PD_ID DESC limit 12");
			
		$sql->execute();
		
		    while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			
			?> 
                        
                        
                        
                        <div class="col-sm-4">
							<div class="product-image-wrapper">
								
                                
                                
                                
                                
                                <div class="single-products">
										<div class="productinfo text-center">
                                                                     <?php
																	 
																	
 if(!isset($_SESSION['Retailer'])){
	 echo '<a href="login.php">';
	 }else{
?>                                                                     <a href="Product-details.php?id=<?php echo $row['PD_ID']; ?>">
<?php } ?>
      <img src="images/product/<?php echo $row['image1']; ?>" alt="" style="height:300px; width:150px;" /></a>
											
<p><?php echo substr($row['PRODUCT_NAME'],0,25); ?></p>
                                           
                                           
											
											 <form method="POST" action="">
                                            <input type="hidden" name="user_id" value="<?php echo $_SESSION['Retailer_id']; ?>">
											  <input type="hidden" name="product_id" value="<?php echo $row['PD_ID']; ?>">
                                                <input type="hidden" name="DISTRIBUTER_ID" value="<?php echo $row['DISTRIBUTER_ID']; ?>">
											 
                        <?php
 if(!isset($_SESSION['Retailer'])){
	 echo '<a href="login.php" class="btn btn-default add-to-cart">';
	 }else{
?>                                                                <a href="Product-details.php?id=<?php echo $row['PD_ID']; ?>" class="btn btn-default add-to-cart">
<?php } ?>                   View Details</a>
                                                                                  
                                            </form>
										</div>
										 
								</div>
								 
                                
                                
                                
                                
							</div>
                            
                            
                            
						</div>
                        
                        
                        
                        <?php } ?>
                        
                        
                        
                        
                        
                        
						 
						 
						 
						 
						 
						
					</div><!--features_items-->
					
					 
					
					
				</div>
			</div>
		</div>
	</section>
	
    
    
    
    
    
    
    
       
    
    
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Product Added to Cart Succesfully</h4>
        </div>
        <div class="modal-body">
      
          <?php
		  if(isset($_POST['user_id']) && isset($_POST['product_id']))
			{
		
  
   $product_id=$_POST['product_id'];
    
  $obj= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
			
  $sql = $obj->db->prepare("select * from ep_product where PD_ID='$product_id'");
			
		$sql->execute();
		
		    while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			?>

<table class="table">
<thead>
<tr>
<th>Product </th>
<th>Product Description</th>
<th>Price</th>

</tr>
</thead>
   <tbody>
      <tr>
        <th> 
       <img src="../images/product/<?php echo $row['image1']; ?>" alt="" style="height:150px; width:80px;" /><br>
        <?php
        echo  substr($row['PRODUCT_NAME'],0,25);
		?>
        </th>
        <th>
        <?php
        echo  wordwrap($row['DESCRIPTION'],0,25);
		?>
        </th>
        <th>
		<?php
        echo  substr($row['PRICE'],0,25);
		?></th>
      </tr>
  <tbody>
  <tbody>
<tr>
<th>Total </th>
<th></th>
<th>
		<?php
        echo  substr($row['PRICE'],0,25);
		?></th>

</tr>
<tbody>
    
  </table>
			<?php }
			}
		   ?>
          </div>
        <div class="modal-footer">
        <a href="cart.php" style="float:left;">Visit Your Cart.</a>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>







	<?php include 'Includes/footer.php'; ?>
	

  
   <!-- <script src="js/jquery.js"></script>-->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>