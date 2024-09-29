<?php
include_once 'Application/DB_Functions.php';  // Include Db_function file for asseccing the function
$obj= new Connections(); // Create object of class connection for calling the Personal_Details function

if(isset($_POST['pname']))
{
$pname = $_POST['pname'];
$price = $_POST['price'];
$desc = $_POST['desc'];
$mfd = $_POST['mfd'];
$dis = $_POST['dis'];
$city = $_POST['city'];
$qty =$_POST['qty'];
$main_cate =$_POST['main_cate'];
$sub_cate = $_POST['sub_cate'];
$unit = $_POST['unit'];
$status = $_POST['status'];
$id = $_POST['id'];


if($obj->UpdateProduct($id,$pname,$price,$desc,$mfd,$dis,$city,$qty,$main_cate,$sub_cate,$unit,$status)==1)
{
echo "<script>alert('Product Updated successfully');</script>";
}
else{
echo 'not done';
}
}

?>
<html class=" ">
<head>
      
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Sab Education</title>
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
        <link href="assets/plugins/icheck/skins/all.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->

    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=" ">
        <!-- START TOPBAR -->
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
                                <h1 class="title">Update Product</h1>                            </div>


                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <section class="box ">
                            <header class="panel_header">
                                <div class="col-md-12">
                                        
                                    <a href="view-product.php"><button type="button" class="btn btn-info">View Product</button></a>
 
                                    </div>
                                <h2 class="title pull-left">Product</h2>
                                <div class="actions panel_actions pull-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            <?php	
                             
  $obj1= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
			
  $id=$_GET['Eid']; /// Here we are geting the id from view-code-list.php file
  
  
			$stmt = $obj1->db->prepare("SELECT * FROM ep_product WHERE PD_ID = '".$id."'"); // $obj->db is refer to the connection db is the public variable define in ADB_Fuctions file
			$stmt->execute();
			
		    while($row1 = $stmt->fetch(PDO::FETCH_ASSOC)) {
                
                    ?>
                            <div class="content-body">
                                <div class="row">
        <!-- FORM START FROM HERE FOR INSERTING --->                            
       <form action="#" method="post" enctype=""> 
           <input type="hidden" value="<?php echo $row1['PD_ID']; ?>" name="id" readonly="readonly"/>
                                    <div class="col-md-8 col-sm-9 col-xs-10">

                                        

                                        <div class="form-group">
                                            <label class="form-label" for="field-2">Product Name</label>
                                          
                                            <div class="controls">
                                                <input type="text" value="<?php echo $row1['PRODUCT_NAME']; ?>" name="pname"  class="form-control" id="field-2" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="field-2">Product Price</label>
                                          
                                            <div class="controls">
                                                <input type="number" value="<?php echo $row1['PRICE']; ?>" name="price"  class="form-control" id="field-2" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="field-2">Description</label>
                                          
                                            <div class="controls">
                                                <input type="text" value="<?php echo $row1['DESCRIPTION']; ?>" name="desc"  class="form-control" id="field-2" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="field-2">Manufactured By</label>
                                          
                                            <div class="controls">
                                                <input type="text" value="<?php echo $row1['MANUFACTRE']; ?>" name="mfd"  class="form-control" id="field-2" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="field-2">Destributer</label>
                                          
                                            <div class="controls">
                                                <input type="text" value="<?php echo $row1['DISTRIBUTER']; ?>" name="dis"  class="form-control" id="field-2" >
                                            </div>
                                            <div class="form-group">
                                            <label class="form-label" for="field-2">City</label>
                                          
                                            <div class="controls">
                                                <input type="text" value="<?php echo $row1['CITY']; ?>" name="city"  class="form-control" id="field-2" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="field-2">Quantity</label>
                                          
                                            <div class="controls">
                                                <input type="text" value="<?php echo $row1['QTY']; ?>" name="qty"  class="form-control" id="field-2" >
                                            </div>
                                        </div>
                                        <?php	
                             
  $obj1= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
			$stmt = $obj1->db->prepare("SELECT * FROM ep_category"); // $obj->db is refer to the connection db is the public variable define in ADB_Fuctions file
			$stmt->execute();
			
		   
                
                    ?>     
                                        <div class="form-group">
                                            <label class="form-label" for="field-7">Product Category </label>
                                            <span class="desc">e.g. "Set the Product Category"</span>
                                            <div class="controls">
                                                <select name="main_cate" class="form-control" required="required" >
                                                    <option ></option>
                <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {?>
                                                   
                                                     <option value="<?php echo $row['CATEGORY_NAME']; ?>"><?php echo $row['CATEGORY_NAME']; ?></option>
                                                      <?php }?> 
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <?php	
                             
  $obj1= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
			$stmt = $obj1->db->prepare("SELECT * FROM ep_sub_category"); // $obj->db is refer to the connection db is the public variable define in ADB_Fuctions file
			$stmt->execute();
			
		   
                
                    ?>     
                                        <div class="form-group">
                                            <label class="form-label" for="field-7">Product Sub Category </label>
                                            <span class="desc">e.g. "Set the Sub Category of the product"</span>
                                            <div class="controls">
                                                <select name="sub_cate" class="form-control" required="required" >
                                                    <option ></option>
                <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {?>
                                                   
                                                     <option value="<?php echo $row['SUB_CATEGORY_NAME']; ?>"><?php echo $row['SUB_CATEGORY_NAME']; ?></option>
                                                      <?php }?> 
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="form-label" for="field-2">Product Unit</label>
                                          
                                            <div class="controls">
                                                <input type="text" value="<?php echo $row1['PACKAGE_UNIT']; ?>" name="unit"  class="form-control" id="field-2" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="field-7">Status</label>
                                            <span class="desc">e.g. "Set the status of the category"</span>
                                            <div class="controls">
                                                <select name="status" class="form-control" >
                                                    <option value="<?php echo $row1['STATUS']; ?>"><?php echo $row1['STATUS']; ?></option>
                                                    <option value="Follow">Activate </option>
                                                    <option value="UnFollow">Deactivate</option>
                                                </select>
                                            </div>
                                        </div>
                                         

                                         
                                        
                                         <div class="form-group">
                     <label class="form-label" for="field-1"></label>
                     <div class="controls">
                         <input type="submit" class="btn btn-primary" value="Update Product" id="txtPhone">
                     </div>
                 </div>
                                      
                  
                                    </div>
                    <?php }?>
           </form>
           <!-- FORM END FROM HERE FOR INSERTING --->  
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
        <script src="assets/plugins/autosize/autosize.min.js" type="text/javascript"></script><script src="assets/plugins/icheck/icheck.min.js" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


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

<!-- Mirrored from jaybabani.com/ultra-admin/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2015 10:37:13 GMT -->
</html>



