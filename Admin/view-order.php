<!DOCTYPE html>
<html class=" ">
<head>

        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">	<!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114-precomposed.png">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->




        <!-- CORE CSS FRAMEWORK - START -->
        <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <link href="assets/plugins/responsive-tables/css/rwd-table.min.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->
 
    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=" "><!-- START TOPBAR -->
         <?php include 'Includes/top-bar.php'; ?>
        <!-- END TOPBAR -->
        <!-- START CONTAINER -->
        <div class="page-container row-fluid">

            <!-- SIDEBAR - START -->
            <?php include 'Includes/nav-sidebar.php'; ?>
            <!--  SIDEBAR - END -->
            <!-- START CONTENT -->
            <section id="main-content" class=" ">
                <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title">View Order List</h1>                            </div>


                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-lg-12">
                        <section class="box ">
                            <header class="panel_header">
                                
                                
                                
                                <h2 class="title pull-left">Details of Orders</h2>
                                <div class="actions panel_actions pull-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            <div class="content-body">    <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">

                                        <div class="table-responsive" data-pattern="priority-columns">
                                            

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
 include 'Application/DB_Functions.php';	
 
  $obj= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
	 
	 
	 $sql1 = $obj->db->prepare("select * from final_order group by order_id ORDER BY ID DESC");
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
                     <a href="My-Orders-View-Details.php?id=<?php echo $order_id; ?>" class="btn btn-primary">
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

            <a href="../images/payment/<?php echo $row12['screenshot']; ?>" download> Download Payment screenshot</a><?php
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
                                </div>
                            </div>
                        </section></div>






                </section>
            </section>
            <!-- END CONTENT -->
            


            <div class="chatapi-windows ">


            </div>    </div>
        <!-- END CONTAINER -->
        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


        <!-- CORE JS FRAMEWORK - START --> 
        <script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script> 
        <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
        <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
        <!-- CORE JS FRAMEWORK - END --> 


        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <script src="assets/plugins/responsive-tables/js/rwd-table.min.js" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE TEMPLATE JS - START --> 
        <script src="assets/js/scripts.js" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 

        <!-- Sidebar Graph - START --> 
        <script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="assets/js/chart-sparkline.js" type="text/javascript"></script>
        <!-- Sidebar Graph - END --> 













        <!-- General section box modal start -->
        <div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label" aria-hidden="true">
            <div class="modal-dialog animated bounceInDown">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Section Settings</h4>
                    </div>
                    <div class="modal-body">

                        Body goes here...

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-success" type="button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->
    </body>

<!-- Mirrored from jaybabani.com/ultra-admin/tables-responsive.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2015 10:40:57 GMT -->
</html>



