<?php
include 'Application/DB_Functions.php';  // Include Db_function file for asseccing the function
?>
<html class=" ">
<head>
      

        <!-- CORE CSS FRAMEWORK - START -->
        <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <link href="assets/plugins/jquery-ui/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/datepicker/css/datepicker.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/daterangepicker/css/daterangepicker-bs3.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/timepicker/css/timepicker.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/datetimepicker/css/datetimepicker.min.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/ios-switch/css/switch.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/select2/select2.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/typeahead/css/typeahead.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/multi-select/css/multi-select.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


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
                                <h1 class="title">Product Sub Category</h1>                            </div>


                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <section class="box ">
                            <header class="panel_header">
                                <div class="col-md-12">
                                        
                                  
 
                                    </div>
                                <h2 class="title pull-left">Sub Category List</h2>
                                <div class="actions panel_actions pull-right">
                                    <i class="box_toggle fa fa-chevron-down"></i>
                                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                                    <i class="box_close fa fa-times"></i>
                                </div>
                            </header>
                            
                            <div class="content-body">
                                <div class="row">
        <!-- FORM START FROM HERE FOR INSERTING --->                                                
       <form action="#" method="post" enctype="multipart/form-data"> 
                                    <div class="col-md-8 col-sm-9 col-xs-10">

                                        

                                        <div class="form-group">
                                            <label class="form-label" for="field-2">Product Name</label>
                                          
                                            <div class="controls">
                                                <input type="text" value="" required name="pname"  class="form-control" id="field-2" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="field-2">Product Price</label>
                                          
                                            <div class="controls">
                                                <input type="text" value="" name="price" required class="form-control" id="field-2" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="field-2">Description</label>
                                          
                                           
                                        <div class="form-group">
                                           
                                            <div class="controls">
                                                <textarea  class="form-control" name="desc" required rows="7"></textarea><!--<div class="bootstrap-tagsinput"> </div>-->
                                            </div>
                                        </div>
  <div class="form-group">
                                            <label class="form-label" for="field-2">Product Color</label>
                                          
                                            <div class="controls">
                                                <input type="text" value="" name="color" required  class="form-control" id="field-2" >
                                            </div>
                                        </div>
                                        
                                         <div class="form-group">
                                            <label class="form-label" for="field-2">Product Brand</label>
                                          
                                            <div class="controls">
                                                <input type="text" value="" name="brand" required  class="form-control" id="field-2" >
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
       <option value="">Select Category</option>
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
                                            <label class="form-label" for="field-2">Product Unit</label>
                                          
                                            <div class="controls">
                                                <input type="text" value="<?php //echo $row['stud_name']; ?>" name="unit"  class="form-control" id="field-2" required>
                                            </div>
                                        </div>
                                           



<div class="form-group">
                                            <label class="form-label" for="field-2">Product Image</label>
                                          
                                            <div class="controls">
       <input type="file" required  name="file"  class="form-control" id="field-2" >
                                            </div>
                                        </div>
                                        
                                        
                                        
     <div class="form-group">
                                            <label class="form-label" for="field-2">Product Image</label>
                                          
                                            <div class="controls">
      <input type="file" required  name="file1"  class="form-control" id="field-2" >
                                            </div>
                                        </div>
                                        
                                        
                                       
                                        
                                         
                                        
                                         <div class="form-group">
                     <label class="form-label" for="field-1"></label>
                     <div class="controls">
                         <input type="submit" class="btn btn-primary" value="Add Product" id="txtPhone">
                     </div>
                 </div>
                                      
                  
                                    </div>
                  
           </form>
	    			  </div>
                  
          
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
        <script src="assets/plugins/jquery-ui/smoothness/jquery-ui.min.js" type="text/javascript"></script> <script src="assets/plugins/datepicker/js/datepicker.js" type="text/javascript"></script> <script src="assets/plugins/daterangepicker/js/moment.min.js" type="text/javascript"></script> <script src="assets/plugins/daterangepicker/js/daterangepicker.js" type="text/javascript"></script> <script src="assets/plugins/timepicker/js/timepicker.min.js" type="text/javascript"></script> <script src="assets/plugins/datetimepicker/js/datetimepicker.min.js" type="text/javascript"></script> <script src="assets/plugins/datetimepicker/js/locales/bootstrap-datetimepicker.fr.js" type="text/javascript"></script> <script src="assets/plugins/colorpicker/js/bootstrap-colorpicker.min.js" type="text/javascript"></script> <script src="assets/plugins/tagsinput/js/bootstrap-tagsinput.min.js" type="text/javascript"></script> <script src="assets/plugins/select2/select2.min.js" type="text/javascript"></script> <script src="assets/plugins/typeahead/typeahead.bundle.js" type="text/javascript"></script> <script src="assets/plugins/typeahead/handlebars.min.js" type="text/javascript"></script> <script src="assets/plugins/multi-select/js/jquery.multi-select.js" type="text/javascript"></script> <script src="assets/plugins/multi-select/js/jquery.quicksearch.js" type="text/javascript"></script> <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE TEMPLATE JS - START --> 
        <script src="assets/js/scripts.js" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 

        <!-- Sidebar Graph - START --> 
        <script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="assets/js/chart-sparkline.js" type="text/javascript"></script>
        <!-- Sidebar Graph - END --> 



<?php
//include 'Application/DB_Functions.php';  // Include Db_function file for asseccing the function
$obj= new Connections(); // Create object of class connection for calling the Personal_Details function

if(isset($_POST['pname']))
{
$pname = $_POST['pname'];
$price = $_POST['price'];
$desc = $_POST['desc'];
$color = $_POST['color'];
$brand = $_POST['brand'];

$main_cate =$_POST['main_cate'];	
      
$image_1=$_FILES['file']['name'];
$image_2=$_FILES['file1']['name'];

if($obj->StoreProduct($pname,$price,$desc,$main_cate,$image_1,$image_2,$color,$brand)==1)
{
	  
echo "<script>alert('Product Uploaded successfully');</script>";
}
else{

}
}

?>