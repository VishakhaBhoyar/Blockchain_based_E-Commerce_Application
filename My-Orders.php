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
            
			<div class="table-responsive cart_info">
            
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
                            <td class="image">Purchaser Details</td>
							<td class="description">Order Id</td>
							<td class="quantity">Total Quantity</td>
							<td class="total">Total</td>
							<td>Payment Mode</td>
						</tr>
					</thead>
					<tbody>
                    
 <?php

  $obj= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
	   $user_id=$_SESSION['Retailer_id'];
	 
	 $sql1 = $obj->db->prepare("select * from final_order where user_id='$user_id' group by order_id ORDER BY ID DESC");
	$sql1->execute();
	$i=0;
		while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) {
			$product=$row1['dist_id'];	
			$order_date=$row1['order_date'];
			  $order_id=$row1['order_id'];
			  $product=$row1['p_id'];$user_id=$row1['user_id'];	

			
			?> 
                       
						<tr>
							<td class="cart_product">
                     <a href="../My-Orders-View-Details.php?id=<?php echo $order_id; ?>" class="btn btn-primary">
                     <img src="../images/icon-order.png" height="30" width="30" alt=""> View Order</a>
							</td>
					<td class="cart_total_price">
					  <p><?php
							
							
							 $sql12 = $obj->db->prepare("select * from ep_user where USER_ID='$user_id'");
	$sql12->execute();
	
		while($row12 = $sql12->fetch(PDO::FETCH_ASSOC)) {
			echo "<strong> Name: </strong>".$row12['F_NAME']." ".$row12['L_NAME'];	echo "<br>";
		
			echo "<strong>Address: </strong>".$row12['ADDRESS'];echo "<br>";	
			echo "<strong>City: </strong>".$row12['CITY'];echo "<br>";	
			echo "<strong>Pincode: </strong>".$row12['PIN'];echo "<br>";		
			
		}
			 ?></p>
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
								<p class="cart_total_price"> <img src="../images/rs1.png"> 
                                
                                
                                
                                
       <?php	
 
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
						<td class="cart_total_price">
					  <p><?php
							
							
							 $sql12 = $obj->db->prepare("select * from payment_mode where order_id='$order_id'");
	$sql12->execute();
	
		while($row12 = $sql12->fetch(PDO::FETCH_ASSOC)) {
		
		
			echo "<strong>Payment Mode: </strong>".$row12['payment_mode'];echo "<br>";	
			if($row12['payment_mode']=='online'){
		?>

			<a href="../images/payment/<?php echo $row12['screenshot'];	?>" download> Download Payment screenshot</a><?php
			}
			
		}
			 ?></p>
					  </td>	
                                                        
						</tr>

					<?php } ?>	 
						 
					</tbody>
				</table>
				
			</div>
		</div>
	</section> <!--/#cart_items-->

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