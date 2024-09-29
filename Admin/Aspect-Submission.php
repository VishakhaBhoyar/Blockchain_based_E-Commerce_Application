<?php
include 'Application/DB_Functions.php';  // Include Db_function file for asseccing the function
$obj= new Connections(); // Create object of class connection for calling the Personal_Details function

if(isset($_POST['aspect']))
{
$aspect = $_POST['aspect'];
$main_cate=$_POST['main_cate'];
if($obj->addaspect($aspect,$main_cate)==1)
{
echo "<script>alert('Aspect Added successfully');</script>";
}
else{

}
}

?><!DOCTYPE html>
<html class=" ">

<head>
        
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Sentiment Analyser</title>
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
                                <h1 class="title">Aspect Word Submission</h1>                            </div>


                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-lg-12">
                        <section class="box ">
                            <header class="panel_header">
                                
                                
                                
                                <h2 class="title pull-left">Aspect Word Submission</h2>
                                <div class="actions panel_actions pull-right">
                                   
                                </div>
                            </header>
                            <div class="content-body">    <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">

                                        <div class="table-responsive" data-pattern="priority-columns">
                                            <!-- FORM START FROM HERE FOR INSERTING --->                            
       <form action="" method="post" enctype=""> 
                                    <div class="col-md-8 col-sm-9 col-xs-10">

                                        

                                        <div class="form-group">
                                            <label class="form-label" for="field-2">Name of Aspect</label>
                                          
                                            <div class="controls">
                                                <input type="text" value="" name="aspect"  class="form-control" id="field-2" >
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
                                        
                                         
                                        
                                         <div class="form-group">
                     
                     <div class="controls">
                         <input type="submit" class="btn btn-primary" value="Add" id="txtPhone">
                     </div>
                 </div>
                                      
                  
                                    </div>
                  
           </form>  
                                            <table cellspacing="0" id="tech-companies-1" class="table table-small-font table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Aspect</th>
                                                       
                                                         <th data-priority="3">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php	
  //require "includes/connection.php";
 // include 'Application/DB_Functions.php'; // Here we just call the ADB_Fuctions file for provinding the connection
   
  $obj= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
			
  $sql = $obj->db->prepare("select * from aspect");
		
		$sql->execute();
		
			
		    while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			
			?> 
                                                    <tr>
<th><?php echo $row['aspects']; ?></th>
                                               <td>
                                                 
                                                 
   <a href="Aspect-Submission.php?id=<?php echo $row['ID']; ?>" class="btn btn-primary">Delete</a>
                                              
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

</html>


<?php
$sql=mysql_connect("localhost","root","");
mysql_select_db("sentiment_analyzer");
if($sql){ echo "connected"; }else{ echo mysql_error();}
if(isset($_GET['id'])){
$id=$_GET['id'];
$sql="delete from aspect where ID='$id'";
$execute_query=mysql_query($sql);
if($execute_query){
echo "<script>alert('Aspect Word Deleted Successfully!!');window.location='Aspect-Submission.php'</script>";	
}else{
echo mysql_error();	
}
}
?>

