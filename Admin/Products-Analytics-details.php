<?php
session_start();
?>
<!DOCTYPE html>
<html class=" ">
<head>

        <title>Ecommerce</title>


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
        
        
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/jquery.chart.js"></script>

	<script type="text/javascript">
		$(function(){
			if(!(/^\?noconvert/gi).test(location.search))
				$(".donutchart").donutChart().css("border","solid 1px black");
		});
		
	</script>
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
                                <h1 class="title">Product Complete Analytics </h1>                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-lg-12">
                        <section class="box ">
                            <header class="panel_header">
                                
                                <div class="col-md-12">
                                        
                              
                                    </div>
                                
                               
                                <div class="actions panel_actions pull-right">
                                    
                                </div>
                            </header>
                            <div class="content-body">    <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
<a href="Products-Analytics.php" class="btn btn-primary" style="float:right;"> Back</a><br><br>
    <div class="table-responsive" data-pattern="priority-columns" 
    style="padding:20px;">
                                            
                                           
<?php	
 
   include 'Application/DB_Functions.php';
  $obj= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
	$id=$_GET['id'];		
  $sql = $obj->db->prepare("select * from ep_product where PD_ID='$id'");
  $sql->execute();
   while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			
			?> 
<table class="table table-striped table-hover table-bordered" style="width:50%;">              <tr><td colspan="3" align="center" >   
                   <h3> <strong> <?php echo $row['PRODUCT_NAME']; ?></strong></h3></td></tr><tr><td>
                    <img src="../images/product/<?php echo $row['image1']; ?>" style="height:200px; width:100px;">&nbsp;&nbsp;
                    </td><td>
                    <img src="../images/product/<?php echo $row['image2']; ?>" style="height:200px; width:100px;">&nbsp;&nbsp;
                    </td><td>
                   
                       </td></tr></table>
                   
<table class="table table-striped table-hover table-bordered">
<tr><td>    
      <strong><h3>Price: </h3></td><td> <?php echo $row['PRICE']; ?></strong></td><tr><td>
     <strong><h3>Brand:</h3></td><td>  <?php echo $row['PRODUCT_TYPE']; ?></strong></td></tr><tr><td>
    <strong><h3>Description:</h3></td><td> <?php echo $row['DESCRIPTION']; ?></strong><br><br>
    </td></tr><tr><td>
     <strong><h3>Total Product Clicks:</h3></td><td> 
<?php  $sql1 = $obj->db->prepare("select * from clicks where product_id='$id'");
  $sql1->execute();
   while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) {
	   echo $row1['clicks']; 	echo "Clicks";

	   } ?></strong>
       
    </td></tr><tr><td>
    
    
     <strong><h3>Total Product Comments:</h3></td><td> 
  <?php  $sql1 = $obj->db->prepare("select * from comments where product_id='$id'");
  $sql1->execute();
   while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) { 
	   echo "Comment: ";echo wordwrap($row1['comment'],80,'<br>');echo "<br>"; 
	   
	
	   echo "User: ";echo $row1['username'];echo "<br>"; 
	  
		 echo "Date: ";echo $row1['Date'];
		 echo "Time: ";echo $row1['Time'];echo "<br>"; echo "<br>"; echo "<br>"; 
	   
	   }?></strong> </td></tr>
                  
                       
                          
                         	                 <?php } ?>          
                                               
                <tr><td colspan="2">                            
       <?php  
		
		
		$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$mysqldb='sentiment_analyzer';
if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass)||!mysql_select_db($mysqldb))
{
die(mysql_error());	
	}
$id=$_GET['id'];
$sql1=mysql_query("select AVG(positive) as a from sentiments where product_id='$id'");
$i='0';
	  while($row1=mysql_fetch_array($sql1))
	  {
	     $positive=$row1['a'];
	  }
	  $sql1=mysql_query("select AVG(negative) as a from sentiments where product_id='$id'");
$i='0';
	  while($row1=mysql_fetch_array($sql1))
	  {
	     $negative=$row1['a'];
	  }
	   $positive; echo "<br>";
	    $negative; 
	if($positive=='100'){
		echo "<h1 style='color:#0fad7b;'><strong>Excellent Product!!</strong></h1>";
		}
		if($positive>='50'){
		echo "<h1 style='color:#0fad7b;'><strong>Product is good, <br>But you may add some more features!!!!</strong></h1>";
		}
		
		if($positive<='50'){
		echo "<h1 style='color:#0fad7b;'><strong>Needs Improvment in Product!!!!</strong></h1>";
		}
	
	if($negative=='100'){
		echo "<h1 style='color:#0fad7b;'><strong>The Product will be removed<br> from website soon!!</strong></h1>";
		}
	
	   ?>        </td><tr></table><br><br>
                                       
                                       
                                       
                                       
                                       
                                       
                                       
                                       
                                       
                                       
     <!--                                  
                                       
  <h1>Aspect Level Sentiment</h1>                                     
                                       
    <div class="row">
        
        
           
    <?php
  $id=$_GET['id'];
  $obj= new Connections();
  $sql = $obj->db->prepare("select * from product_aspect where product_id='$id' GROUP BY main_aspect");
   $sql->execute();
 	while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			
		
 ?>
        
    <div class="col-sm-4">
    
    
    <span style="margin-left:70px;"><strong><?php echo $mainaspect=$row['main_aspect']; ?></strong>
                </span><br>
                
                
                
                
          
      <?php
	  $id=$_GET['id'];
  $obj= new Connections();
  $sql1 = $obj->db->prepare("select COUNT(*) as c from product_aspect where product_id='$id' AND main_aspect='$mainaspect' AND sentiment='Positive'");
   $sql1->execute();
 	while($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) {
		 $totalP=$row1['c'];	
	}?>  
    
           <?php
	  $id=$_GET['id'];
  $obj= new Connections();
  $sql2 = $obj->db->prepare("select COUNT(*) as c from product_aspect where product_id='$id' AND main_aspect='$mainaspect'");
   $sql2->execute();
 	while($row2 = $sql2->fetch(PDO::FETCH_ASSOC)) {
		 $total=$row2['c'];	
	}?>  
                
                
<?php 
 $positive=round(($totalP/$total*100),0);
 $negative=100-$positive;
?>   
                
				<svg width="80%" height="80%" viewBox="0 0 50 50" class="donut">
  <circle class="donut-hole" cx="21" cy="21" r="15.91549430918954" fill="#fff"></circle>
  <circle class="donut-ring" cx="21" cy="21" r="15.91549430918954" fill="transparent" stroke="#f73461" stroke-width="3"></circle>

  <circle class="donut-segment" cx="21" cy="21" r="15.91549430918954" fill="transparent" stroke="#8ce276" stroke-width="3" stroke-dasharray="<?php echo $positive; ?> <?php echo $negative; ?>" stroke-dashoffset="0"></circle>
</svg>
</div>

<?php
}
?>

    
  </div>
  
  
  
  
        
        
        
        		
				                                    
                                       
                                       
                                       
                                       
                                       
                                       
                                       
                                       
                                       
                                       
                                            
                                            <h1>Overall Sentiments Analysis Graph</h1>
	<table class="donutchart">
		<tr><th>sortOrder</th><th>value</th><th>color</th><th>description</th>
        </tr>
        <?php 
		
		$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$mysqldb='sentiment_analyzer';
if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass)||!mysql_select_db($mysqldb))
{
die(mysql_error());	
	}
		
		
		
		 $id=$_GET['id'];
$sql1=mysql_query("select AVG(positive) as a from sentiments where product_id='$id'");
$i='0';
	  while($row1=mysql_fetch_array($sql1))
	  {
	     $positive=$row1['a'];
	  }
	  $sql1=mysql_query("select AVG(negative) as a from sentiments where product_id='$id'");
$i='0';
	  while($row1=mysql_fetch_array($sql1))
	  {
	     $negative=$row1['a'];
	  }
	   ?>
		<tr><td>5</td><td><?php echo round($positive); ?></td><td>green</td><td>Positive <?php echo round($positive); ?> %</td></tr>
		<tr><td>2</td><td><?php echo round($negative); ?></td><td>red</td><td>Negative <?php echo round($negative); ?> %</td></tr>
		</table>
                                        </div>  
-->

                                    </div>
                                </div>
                            </div>
                        </section></div>



 

                </section>
            </section>
            <!-- END CONTENT -->
            <div class="page-chatapi hideit">

                <div class="search-bar">
                    <input type="text" placeholder="Search" class="form-control">
                </div>

                <div class="chat-wrapper">
                    <h4 class="group-head">Groups</h4>
                   


                    <h4 class="group-head">Favourites</h4>
                    
                </div>

            </div>


            <div class="chatapi-windows ">


            </div>    </div>
        <!-- END CONTAINER -->
        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


        <!-- CORE JS FRAMEWORK - START --> 
        
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


    </body>

</html>


