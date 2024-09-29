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

	<!-- banner -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item item1 active">
				<div class="banner-style d-flex align-items-center">
					<div class="container">
						<div class="w3l-space-banner">
							<div class="carousel-caption-banner" style="max-width:500px">
								<p>Get flat
									<span>10%</span> Cashback</p>
								<h3 class="mt-2">Exciting Deals on Televisions</h3>
								<a class="btn btn-style mt-4" href="product.html">Shop Now </a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item2">
				<div class="banner-style d-flex align-items-center">
					<div class="container">
						<div class="w3l-space-banner">
							<div class="carousel-caption-banner" style="max-width:500px">
								<p>Top
									<span>Brands</span> lowest <span>Prices</span></p>
								<h3 class="mt-2">Wide Range of Mobile Phones!</h3>
								<a class="btn btn-style mt-4" href="product.html">Shop Now </a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item3">
				<div class="banner-style d-flex align-items-center">
					<div class="container">
						<div class="w3l-space-banner">
							<div class="carousel-caption-banner" style="max-width:500px">
								<p>Get up to
									<span>25%</span> Off</p>
								<h3 class="mt-2">Smart Watches New Collection!</h3>
								<a class="btn btn-style mt-4" href="product.html">Shop Now </a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item4">
				<div class="banner-style d-flex align-items-center">
					<div class="container">
						<div class="w3l-space-banner">
							<div class="carousel-caption-banner" style="max-width:500px">
								<p>Top
									<span>Sale</span> Best <span>Deals</span></p>
								<h3 class="mt-2">Fresh, Healthy Air Everywhere!</h3>
								<a class="btn btn-style mt-4" href="product.html">Shop Now </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- //banner -->
<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->

 
</div>
	<!-- top Products -->
	<div class="ads-grid py-5">
		<div class="container py-md-5 py-4">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span class="font-weight-normal">Our</span> New Products</h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product right -->
				<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0 order-lg-first order-last">
					<div class="side-bar p-sm-4 p-3">
						<!-- reviews -->
						
						<!-- //reviews -->
						<!-- price -->
						
						<!-- //price -->
						<!-- discounts -->
						
						<!-- //discounts -->
						<!-- electronics -->
						
						<!-- //electronics -->
						<!-- delivery -->
						
						<!-- //delivery -->
						<!-- arrivals -->
						
						<!-- //arrivals -->
						<!-- best seller -->
						<div class="f-grid py-2" style="height:600px;">
							<h3 class="agileits-sear-head mb-3">Best Seller</h3>
							<div class="box-scroll" style="height:800px;">
								<div class="scroll">
									
                                    <?php	
 
  $obj= new Connections();
 
  $sql = $obj->db->prepare("select * from ep_product ORDER BY PD_ID DESC LIMIT 6");
$sql->execute();
 while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
	?>  
                                    
                                  <div class="row my-4">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
		<img src="../images/product/<?php echo $row['image1']; ?>" alt="" class="img-fluid">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<?php echo $row['PRODUCT_NAME']; ?>
											Rs. <?php echo $row['PRICE']; ?>/-
										</div>
									</div>
                                    
                                    
								  <?php } ?>
                                
                                
                                
								</div>
							</div>
						</div>
						<!-- //best seller -->
						<div class="customer-rev left-side py-2">
							<h3 class="agileits-sear-head mb-3">Brands</h3>
						 <?php	
 
  $obj= new Connections();
 
  $sql = $obj->db->prepare("select * from ep_product GROUP BY brand");
$sql->execute();
 while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
	?>  
                                    
                                  <div class="row my-4">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
		
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
	<a href="../brand-filter.php?brand=<?php echo $row['brand']; ?>">	<?php echo $row['brand']; ?></a>
										
										</div>
									</div>
                                    
                                    
								  <?php } ?>
                                
						</div>



						<div class="range py-2">
							<h3 class="agileits-sear-head mb-3">Price</h3>
							<div class="w3l-range">
							<ul>
									<li>
										<a href="../price-filter.php?min=0&max=1000">Under Rs. 1,000</a>
									</li>
									<li class="my-1">
						<a href="../price-filter.php?min=1000&max=5000">Rs. 1,000 - Rs. 5,000</a>
									</li>
									<li>
						<a href="../price-filter.php?min=5000&max=10000">Rs. 5,000 - Rs.10,000</a>
									</li>
									<li class="my-1">
										<a href="../price-filter.php?min=10000&max=20000">Rs. 10,000 - Rs. 20,000</a>
									</li>
									<li>
										<a href="../price-filter.php?min=20000&max=30000">Rs. 20,000 Rs. 30,000</a>
									</li>
									<li class="mt-1">
										<a href="../price-filter.php?min=30000&max=1000000">Over Rs. 30,000</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- //product right -->
				</div>




				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9 order-lg-last order-first">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-lg-4">
							<div class="row">
                            
                            
                             <?php	
 
  $obj= new Connections();
 
  $sql = $obj->db->prepare("select * from ep_product");
$sql->execute();
 while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
	?> 
         
								<div class="col-md-4 product-men">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											   <?php
																	 
																	
 if(!isset($_SESSION['Retailer'])){
	 echo '<a href="#login" data-toggle="modal" data-target="#exampleModal" class="">';
	 }else{
?>                                                                     <a href="../Product-details.php?id=<?php echo $row['PD_ID']; ?>">
<?php } ?>  <img src="../images/product/<?php echo $row['image1']; ?>"  style="height:300px; width:80%;"  alt="" class="img-fluid">  </a>
											
										</div>
										<div class="item-info-product text-center mt-2">
											<h6 class="pt-1">
												<?php echo $row['PRODUCT_NAME']; ?>
											</h6>
											<div class="info-product-price">
												<span class="item_price">Rs. <?php echo $row['PRICE']; ?>/-</span>
												<del>Rs. <?php echo $row['PRICE']+500; ?>/-</del>
											</div>
							<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												
											</div>
										</div>
									</div>
								</div>
                              
         
                           <?php } ?>
                        		
						        
                                
								</div>
						<!-- fourth section -->
						
						<!-- //fourth section -->
						<!-- 5th section -->
						
						<!-- 5th section -->
					</div>
				</div>
				<!-- //product left -->
			</div>
		</div>
	</div>
	<!-- //top products -->

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