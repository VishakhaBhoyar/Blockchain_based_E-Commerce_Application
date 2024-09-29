<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2> Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							
                            
                            
                             <?php	
  //require "includes/connection.php";
   // Here we just call the ADB_Fuctions file for provinding the connection
   
  $obj= new Connections();// Now we create the object of AdminConnection class and through that object we are going to call connection
			
  $sql = $obj->db->prepare("select * from  ep_category");
		
		$sql->execute();
		
			
		    while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
			
			?>  
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="Category-Search.php?id=<?php echo $row['CATEGORY_NAME']; ?>"><?php echo $row['CATEGORY_NAME']; ?></a></h4>
								</div>
							</div>
                            
                            
                            <?php } ?>
						
                            <br>
                            
                          <br />  
                       <a href="https://www.flipkart.com/" target="_blank"> <img src="images/BIO332ZQ4JFIXBYS6HNF4U.jpg" width="260" height="600" border="0" alt="" style=" _width:158px; _height:598px; _overflow:hidden; border:1px solid #000000;margin:-1px;">
                
                           </a> 
						</div><!--/category-products-->
					
						 
						
						 
						
						
					
					</div>
				</div>
				
          