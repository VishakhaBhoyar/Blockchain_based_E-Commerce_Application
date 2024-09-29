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
	<!-- //common jquery plugin --
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


	<!-- page --><div class="container">
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">

		</div>
	</div>
	<!-- //page -->
<div style="margin: 8px auto; display: block; text-align:center;">

</div>
	<!-- Single Page -->
    

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
        
				<div class="row">
					
                        
                        

 <?php	
  //require "includes/connection.php";
   // Here we just call the ADB_Fuctions file for provinding the connection
   
  $obj= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
		$q=$_POST['q'];	
  $sql = $obj->db->prepare("select * from ep_product where PRODUCT_NAME like 
  '%$q%'");
			
		$sql->execute();
		
		    while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			
			?> 
                        
                        
                        
                        <div class="col-sm-4">
							<div class="product-image-wrapper">
								
                                
                                
                                
                                
                                <div class="single-products">
										<div class="productinfo text-center">
                                                                                 <?php
																	 
																	
 if(!isset($_SESSION['Retailer'])){
	 echo '<a href="#login" data-toggle="modal" data-target="#exampleModal" class="">';
	 }else{
?>                                                                     <a href="../Product-details.php?id=<?php echo $row['PD_ID']; ?>">
<?php } ?> 
      <img src="../images/product/<?php echo $row['image1']; ?>" alt="" style="height:300px; width:150px;" /></a>
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






<?php include "1/includes/footer.php"; ?>
	

	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- js -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<!-- //js -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<!-- nav smooth scroll -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //nav smooth scroll -->

	<!-- popup modal (for location)-->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //popup modal (for location)-->

	<!-- scroll seller -->
	<script src="js/scroll.js"></script>
	<!-- //scroll seller -->

	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		paypals.minicarts
			.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

		paypals.minicarts.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- theme switch js (light and dark)-->
	<script src="js/theme-change.js"></script>
	<script>
		function autoType(elementClass, typingSpeed) {
			var thhis = $(elementClass);
			thhis.css({
				"position": "relative",
				"display": "inline-block"
			});
			thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
			thhis = thhis.find(".text-js");
			var text = thhis.text().trim().split('');
			var amntOfChars = text.length;
			var newString = "";
			thhis.text("|");
			setTimeout(function () {
				thhis.css("opacity", 1);
				thhis.prev().removeAttr("style");
				thhis.text("");
				for (var i = 0; i < amntOfChars; i++) {
					(function (i, char) {
						setTimeout(function () {
							newString += char;
							thhis.text(newString);
						}, i * typingSpeed);
					})(i + 1, text[i]);
				}
			}, 1500);
		}

		$(document).ready(function () {
			// Now to start autoTyping just call the autoType function with the 
			// class of outer div
			// The second paramter is the speed between each letter is typed.   
			autoType(".type-js", 200);
		});
	</script>
	<!-- //theme switch js (light and dark)-->

	<!-- disable body scroll which navbar is in active -->
	<script>
		$(function () {
			$('.navbar-toggler').click(function () {
				$('body').toggleClass('noscroll');
			})
		});
	</script>
	<!-- //disable body scroll which navbar is in active -->

	<!--bootstrap-->
	<script src="js/bootstrap.min.js"></script>
	<!-- //bootstrap-->
	<!-- //Js scripts -->

</body>


</html>  