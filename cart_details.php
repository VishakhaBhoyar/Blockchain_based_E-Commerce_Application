<?php include 'Includes/session.php';?>
<!DOCTYPE html>
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
echo "List of Products";
}	
}
?>


<?php 
if(isset($_POST['user_id_update']) && isset($_POST['product_id_update'])){
  $retailer=$_POST['user_id_update'];
  $pid=$_POST['product_id_update'];
   $quantity=$_POST['quant'];
if($obj->check($pid,$quantity,$retailer)==1)
{
echo "<script>alert('Product Quantity Updated.');</script>";
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
			
			
		


			
			
			
			
			
			
			

}
}
}}

if(isset($_POST['send-enquire1'])){
  $obj= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
	 
	 $user_id=$_SESSION['Retailer_id'];
	 $dist_id=$_GET['id'];
	 $sql1 = $obj->db->prepare("select * from cart where dist_id='$dist_id' AND user_id='$user_id'");
	$sql1->execute();
	$i=0;
	$randnum = rand(1111111111,9999999999);
		while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) {
			$product=$row1['product_id'];	
			$quantity=$row1['quantity'];	
			$sql = $obj->db->prepare("select * from ep_product where PD_ID='$product'");
		$sql->execute();
		while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			$DISTRIBUTER_ID=14;
			$DISTRIBUTER=14;	
			$PRICE=$row['PRICE'];	
			$date=date("d")."-".date("m")."-".date("Y");
	


		$sql11 = $obj->db->prepare("select * from final_order ORDER BY ID DESC limit 1");
		$sql11->execute();
		while($row11 = $sql11->fetch(PDO::FETCH_ASSOC)) {
		$previous_block_hash=$row11['current_block_hash'];	
		}			

$current_block_hash=sha1($randnum.$product.$quantity.$PRICE);



if($obj->final_order($user_id,$randnum,$product,$quantity,$PRICE,$DISTRIBUTER_ID,$DISTRIBUTER,$date,$previous_block_hash,$current_block_hash)==1)
{

}
else
{
echo "Oops";
}


if($obj->delete_cart($user_id,$dist_id,$product)==1)
{

}
else
{
echo "Oops";
}

	
}


}
$type=$_POST['type'];
if($type=='cod'){
	$type=$_POST['type'];
	 $image_1="-";
if($obj->payment($image_1,$type,$randnum)==1)
{

}
	}else{
 $image_1=$_FILES['file']['name'];
$type=$_POST['type'];
if($obj->payment($image_1,$type,$randnum)==1)
{

}
}

echo "<script>alert('Order Placed Succesfully!!'); window.location='../index.php';</script>";
}
?> 
            







				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description">Product Name</td>
							<td class="price">Description</td>
							<td class="quantity">Price</td>
                            <td class="quantity">Quantity</td>
							<td class="total">Total</td>
                            <td class="total">Close</td>
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
	 $sql1 = $obj->db->prepare("select * from cart where user_id='$user_id' AND dist_id='$id'");
	$sql1->execute();
	$i=0;
		while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) {
			 $product=$row1['product_id'];	
			$quant=$row1['quantity'];	
  $sql = $obj->db->prepare("select * from  ep_product where PD_ID='$product'");
		$sql->execute();
		
		    while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			
			?> 
                       
						<tr>
							<td class="cart_product">
                     <a href="cart_details.php?id=<?php echo $product; ?>"><img src="../images/product/<?php echo $row['image1']; ?>" style="height:180px; width:100px; margin:30px;" alt=""></a>
							</td>
							<td class="cart_description">
							
								<p><?php echo wordwrap($row['PRODUCT_NAME'],15,'<br>'); ?></p>
							</td>
							<td class="cart_price">
								<p><?php echo wordwrap($row['DESCRIPTION'],30,'<br>'); ?></p>
							</td>
							<td class="cart_quantity">
							<p><img src="../images/rs1.png">  <?php echo $row['PRICE']; ?></p>
							</td>
                            <td class="cart_quantity">
							 <form method="POST" action="">
                            <input type="hidden" value="<?php echo $_SESSION['Retailer_id']; ?>" name="user_id_update">
                            <input type="hidden" value="<?php echo $row['PD_ID']; ?>" name="product_id_update">
							<input type="text" value="<?php echo $quant; ?>" name="quant">
                           <input type="submit" value="Update">
                          </form> 
							</td>
                            
                            
                            
							<td class="cart_total">
								<p class="cart_total_price"> <img src="../images/rs1.png"> 
                         
                         <p><?php echo $quant*$row['PRICE']; ?></p>
                                </p>
							</td>
							<td class="cart_delete">
                            <form method="POST" action="">
                            <input type="hidden" value="<?php echo $_SESSION['Retailer_id']; ?>" name="user_id">
                            <input type="hidden" value="<?php echo $row['PD_ID']; ?>" name="product_id">
							<button type="submit" class="cart_quantity_delete" style="background-color:#F55;"><i class="fa fa-times"></i></a>
							</button>
                            </button>
                            </form>
                            </td>
                                                        
						</tr>

					<?php }} ?>	 
						 
					</tbody>
                    
                  
				</table>
                <div class="row">
                <div class="col-xs-6">
                <div style="margin:20px;">
               <h4> Order Delivery Address Details</h4>
               
               
               <table style="width:300px;">
 <?php 
  $user_id=$_SESSION['Retailer_id'];
	
$sql1 = $obj->db->prepare("select * from ep_user where USER_ID='$user_id'");
$sql1->execute();
while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) {
echo "<tr><td><strong>ADDRESS: </strong></td><td>"; echo $ADDRESS=$row1['ADDRESS'];	
echo "</td></tr>";
echo "<tr><td><strong>CITY: </strong></td><td>"; echo $CITY=$row1['CITY'];
echo "</td></tr>";


 echo "<tr><td><strong>DISTRICT: </strong></td><td>"; echo $DISTRICT=$row1['DISTRICT'];
 echo "</td></tr>";
 
 
  echo "<tr><td><strong>PIN: </strong></td><td>"; echo $PIN=$row1['PIN'];
 echo "</td></tr>";
 
  echo "<tr><td><strong>STATE:  </strong></td><td>"; echo $STATE=$row1['STATE'];
 echo "</td></tr>";
 
  echo "<tr><td><strong>PHONE: </strong></td><td>"; echo $PHONE=$row1['PHONE'];
 echo "</td></tr>";
 
  echo "<tr><td><strong>EMAIL: </strong></td><td>"; echo $EMAIL=$row1['EMAIL'];
 echo "</td></tr>";
 
 
 
		}
 ?>    </table>           
      </div>  </div>     
       <div class="col-xs-6">
      
      <h4>&nbsp;&nbsp;&nbsp;&nbsp;Payment Details</h4>
      
      
      <?php if(isset($_GET['payment'])){ 
	    if($_GET['payment']=='olpayment'){
	   
	   ?><br><br>
      
      <form action="" method="POST">
       <input type="hidden" value="olpayment" name="type">
                <input type="number" required name="debit" Placeholder="Credit / Debit Card number" class="form-control" autocomplete="off"><br>
                <input type="date" required name="valid" Placeholder="Valid till" class="form-control" autocomplete="off"><br>
                <input type="text" required  name="cvv" Placeholder="CVV Number" class="form-control" autocomplete="off">
                <br>
                <input type="text" required name="pin" Placeholder="Pin Number" class="form-control" autocomplete="off">
               
      
      
      </div>     
                <center>
               
                <input type="submit" name="send-enquire1" value="Place Order" class="btn btn-primary" style="height:80px; width:400px; font-size:23px;">
               </form><br><br>
                </center>
                
             <?php } else{ ?>
				 <br>
<center>
<table class="table table-bordered">
    <thead>
      <tr>
        <th> <form action="" method="POST"  enctype='multipart/form-data'>
       <input type="hidden" value="cod" name="type">
				 <h1>&nbsp;&nbsp; Cash on Delivery Mode</h1><br>
				   <input type="submit" name="send-enquire1" value="Place Order" class="btn btn-info" style="height:80px; width:400px; font-size:23px;">
               </form></th>
        <th>

<img src="../images/see-nothing-here-dummy-undecodable-260nw-789298414%20(1).webp">
        	<form action="" method="POST" enctype='multipart/form-data'>
       <input type="hidden" value="online" name="type">

				 <h1>&nbsp;&nbsp;Online Payment Mode</h1><br>
<label>Attached Payment Screenshot</label>
				 <input type="file" name="file"><br>
				   <input type="submit" name="send-enquire1" value="Place Order" class="btn btn-info" style="height:80px; width:400px; font-size:23px;">
               </form></th>
       
      </tr>
    </thead>
   </table></center>
				 



				 <br><br><br><br>
				<?php  }} ?>   
                
                
                
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