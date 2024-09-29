<?php
/*if(isset($_SESSION['username']))
{
header("location:userdashboard.php");	
}*/
session_start();
include './Admin/Application/DB_Functions.php';  // Include Db_function file for asseccing the function


$obj1= new Connections(); // Now we create the object of AdminConnection class and through that object we are going to call connection
if(isset($_POST['username']) && isset($_POST['passwordlogin']))
            {
        $name=strip_tags($_POST['username']);
         $passwordlogin=strip_tags($_POST['passwordlogin']); 


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
           echo "<script>window.location='index.php';</script>";
			}		   
		   
          
        }}
        else
        {
        echo "<script>alert('Incorrect Username and Password');</script>";
        }
            }
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

	<!-- web fonts -->
	<link href="http://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
		rel="stylesheet">
	<!-- //web fonts -->
</head>

<body>
<meta name="robots" content="noindex">
<body>
<!-- New toolbar-->
<style>
* {
  box-sizing: border-box;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
}

</style>
<?php include "1/includes/header.php"; ?>

	
	<!-- //page -->
<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->

 
</div>
	<!-- checkout page -->

		<div class="container py-md-5 py-4">
			<div class="checkout-right">
			
				
			<div class="checkout-left">
				<div class="address_form_agile mt-sm-5 mt-4">
					<h4 class="mb-sm-4 mb-3">Login</h4>
					<form action="" method="post" class="creditly-card-form agileinfo_form">
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls form-group">
										<input class="billing-address-name form-control" type="text" name="username"
											placeholder="Username" required="">
									</div>
									<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left form-group">
											<div class="controls">
												<input type="password" class="form-control" placeholder="Password"
													name="passwordlogin" required="">
											</div>
										</div>
										
									</div>
									
								
								</div>
								<button class="submit check_out btn">Login</button>
							</div>
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</div>
	<!-- //checkout page -->

	<!-- middle section -->
	<div class="join-w3l1 py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<div class="row">
				<div class="col-lg-6">
					<a href="product2.html">
						<div class="join-agile text-left p-4">
							<div class="row">
								<div class="col-sm-7 offer-name">
									<h6>New Collections, New Trendy</h6>
									<h4 class="mb-3">Smart Watches</h4>
									<p>Sale up to 25% off all in store</p>
								</div>
								<div class="col-sm-5 offerimg-w3l">
									<img src="images/off1.png" alt="" class="img-fluid">
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-6 mt-lg-0 mt-4">
					<a href="product.html">
						<div class="join-agile text-left p-4">
							<div class="row ">
								<div class="col-sm-7 offer-name">
									<h6>Top Brands, lowest Prices</h6>
									<h4 class="mb-3">Smart Phones</h4>
									<p>Free shipping order over $100</p>
								</div>
								<div class="col-sm-5 offerimg-w3l">
									<img src="images/off2.png" alt="" class="img-fluid">
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- middle section -->
<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->
 
</div>
	<!-- footer -->
	
<?php include "1/includes/footer.php"; ?>

	<!-- js-files -->
	<!-- common jquery plugin -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<!-- //common jquery plugin -->

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

	<!-- quantity -->
	<script>
		$('.value-plus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) + 1;
			divUpd.text(newVal);
		});

		$('.value-minus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) - 1;
			if (newVal >= 1) divUpd.text(newVal);
		});
	</script>
	<!--quantity-->
	<script>
		$(document).ready(function (c) {
			$('.close1').on('click', function (c) {
				$('.rem1').fadeOut('slow', function (c) {
					$('.rem1').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close2').on('click', function (c) {
				$('.rem2').fadeOut('slow', function (c) {
					$('.rem2').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close3').on('click', function (c) {
				$('.rem3').fadeOut('slow', function (c) {
					$('.rem3').remove();
				});
			});
		});
	</script>
	<!-- //quantity -->

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