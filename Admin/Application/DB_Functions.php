<?php
require "connection.php";


Class Connections {

    public $db;
    public function __Construct()
    {
        $this->db = new mPDO();
        //return $this->db;
    }
	
	
	
	public function CheckLogin($name,$password)
	{
		$sql = $this->db->prepare("select * from admin_login where username=:name and password=:password");
			/* execute statement */
		$sql->bindParam(':name', $name);
        $sql->bindParam(':password', $password);
		$sql->execute();
		
			/* bind result variables */
			$row=$sql->fetchColumn();  ///fetchColumn() is used to select rows from table like mysql_num_row used in normal php 
				if ($row > 0)
				{
					return true;
					
				}
				else 
				{
					return false;	
				}
	}
        
     	
/*
 * 
 * FUNCTION FOR INSERTING CATEGORY
 * 
 * AUTHOR: VIDUR SHARMA 
 * 
 */
	
    function StoreCategory($category_name,$status)
    {
          //$status = 0;
	
//$db = new PDO('mysql:host=localhost;dbname=hostelakola;charset=utf8', 'root', '');
$sql = $this->db->prepare("INSERT INTO ep_category(`CATEGORY_NAME`, `STATUS`)
VALUES(:category_name,:status)");

        $sql->bindParam(':category_name', $category_name);
        $sql->bindParam(':status', $status);
       
        

        $sql->execute();
        if($sql->rowCount())
        {
        return 1;
        }
        else
        {
             print_r($this->db->errorCode());
             print_r($this->db->errorInfo());
        }
 }

     function StoreProduct($pname,$price,$desc,$main_cate,$image_1,$image_2,$color,$brand)
    {
     
try{
$sql = $this->db->prepare("INSERT INTO `ep_product` (`PRODUCT_NAME`, `PRICE`, `DESCRIPTION`, `color`, `brand`, `PRODUCT_TYPE`, `image1`, `image2`, `STATUS`)
VALUES(:pname,:price,:desc,:color,:brand,:main_cate,:image_1,:image_2,'1')");
$image_1=date("mdYHis")."-".$image_1;
$image_2=date("mdYHis")."-".$image_2;

        $sql->bindParam(':pname', $pname);
        $sql->bindParam(':price', $price);
        $sql->bindParam(':desc', $desc);
    $sql->bindParam(':main_cate', $main_cate);
     $sql->bindParam(':image_1', $image_1);
        $sql->bindParam(':image_2', $image_2);
       
       $sql->bindParam(':color', $color);
$sql->bindParam(':brand', $brand);
        $sql->execute();
		
$tmp_name=$_FILES['file']['tmp_name'];
$location='../images/product/';
move_uploaded_file($tmp_name,$location.$image_1);

$tmp_name1=$_FILES['file1']['tmp_name'];
$location1='../images/product/';
move_uploaded_file($tmp_name1,$location1.$image_2);


} catch (PDOException $e) {
 echo $e;
}

        if($sql->rowCount())
        {
        return 1;
        }
        else
        {
             print_r($this->db->errorCode());
             print_r($this->db->errorInfo());
        }
 } 
   /* 
 * FUNCTION FOR UPDATING CATEGORY
 * 
 * AUTHOR: VIDUR SHARMA 
 * 
 */
     function UpdateCategory($id,$category_name,$status)
    
                {
	
//$db = new PDO('mysql:host=localhost;dbname=hostelakola;charset=utf8', 'root', '');
$sql = $this->db->prepare("UPDATE ep_category SET CATEGORY_NAME=:category_name,STATUS=:status WHERE CAT_ID='$id'");

        $sql->bindParam(':category_name', $category_name);
         $sql->bindParam(':status', $status);
        

        $sql->execute();
        if($sql->rowCount())
        {
        return 1;
        }
        else
        {
            // echo $this->db->$sql;
             
             print_r($this->db->errorCode());
             print_r($this->db->errorInfo());
        }
    }
    /* 
 * FUNCTION FOR DELETING CATEGORY
 * 
 * AUTHOR: VIDUR SHARMA 
 * 
 */
    function DeleteCategory($id)
    {
 
                $sql = $this->db->prepare("delete from ep_category where CAT_ID=:id");
                $sql->bindParam(':id', $id);
                $sql->execute();
                if($sql)
                {
                return 1;
                }
                else
                {
                return 0;
                }
      }
      
    /*
 * 
 * FUNCTION FOR INSERTING SUB-CATEGORY
 * 
 * AUTHOR: VIDUR SHARMA 
 * 
 */
	
    function StoreSubCategory($main_cate,$sub_cate,$status)
    {
          //$status = 0;
	
//$db = new PDO('mysql:host=localhost;dbname=hostelakola;charset=utf8', 'root', '');
$sql = $this->db->prepare("INSERT INTO ep_sub_category(`MAIN_CATEGORY`, `SUB_CATEGORY_NAME`, `STATUS`)
VALUES(:MAIN_CATEGORY,:SUB_CATEGORY_NAME,:STATUS)");

        $sql->bindParam(':MAIN_CATEGORY', $main_cate);
        $sql->bindParam(':SUB_CATEGORY_NAME', $sub_cate);
        $sql->bindParam(':STATUS', $status);
 
        $sql->execute();
        if($sql->rowCount())
        {
        return 1;
        }
        else
        {
             print_r($this->db->errorCode());
             print_r($this->db->errorInfo());
        }
 }
 
  /* 
 * FUNCTION FOR UPDATING Sub CATEGORY
 * 
 * AUTHOR: VIDUR SHARMA 
 * 
 */
     function UpdateSubCategory($id,$main_cate,$sub_cate,$status)
    
                {
	
//$db = new PDO('mysql:host=localhost;dbname=hostelakola;charset=utf8', 'root', '');
$sql = $this->db->prepare("UPDATE ep_sub_category SET MAIN_CATEGORY=:MAIN_CATEGORY, SUB_CATEGORY_NAME=:SUB_CATEGORY_NAME, STATUS=:STATUS WHERE SUB_ID='$id'");

        $sql->bindParam(':MAIN_CATEGORY', $main_cate);
        $sql->bindParam(':SUB_CATEGORY_NAME', $sub_cate);
        $sql->bindParam(':STATUS', $status);

        $sql->execute();
        if($sql->rowCount())
        {
        return 1;
        }
        else
        {
            // echo $this->db->$sql;
             
             print_r($this->db->errorCode());
             print_r($this->db->errorInfo());
        }
    }
    
        /* 
 * FUNCTION FOR DELETING CATEGORY
 * 
 * AUTHOR: VIDUR SHARMA 
 * 
 */
    function DeleteSubCategory($id)
    {
 
                $sql = $this->db->prepare("delete from ep_sub_category where SUB_ID=:id");
                $sql->bindParam(':id', $id);
                $sql->execute();
                if($sql)
                {
                return 1;
                }
                else
                {
                return 0;
                }
      }
      
     
     function UpdateProduct($id,$pname,$price,$desc,$mfd,$dis,$city,$qty,$main_cate,$sub_cate,$unit,$status)
    
                {
	
//$db = new PDO('mysql:host=localhost;dbname=hostelakola;charset=utf8', 'root', '');
$sql = $this->db->prepare("UPDATE ep_product SET PRODUCT_NAME=:pname, PRICE=:price, DESCRIPTION=:desc, QTY=:qty, PRODUCT_TYPE=:main_cate, PRODUCT_SUB_TYPE=:sub_cate, PACKAGE_UNIT=:unit, MANUFACTRE=:mfd, DISTRIBUTER=:dis, CITY=:city, STATUS=:status WHERE PD_ID='$id'");

        $sql->bindParam(':pname', $pname);
        $sql->bindParam(':price', $price);
        $sql->bindParam(':desc', $desc);
        $sql->bindParam(':qty', $qty);
        $sql->bindParam(':main_cate', $main_cate);
        $sql->bindParam(':sub_cate', $sub_cate);
        $sql->bindParam(':unit', $unit);
        $sql->bindParam(':mfd', $mfd);
        $sql->bindParam(':dis', $dis);
        $sql->bindParam(':city', $city);
        $sql->bindParam(':status', $status);
      
        $sql->execute();
        if($sql->rowCount())
        {
        return 1;
        }
        else
        {
            // echo $this->db->$sql;
             
             print_r($this->db->errorCode());
             print_r($this->db->errorInfo());
        }
    }
    /* 
 * FUNCTION FOR DELETING CATEGORY
 * 
 * AUTHOR: VIDUR SHARMA 
 * 
 */
    function DeleteProduct($id)
    {
 
                $sql = $this->db->prepare("delete from ep_product where PD_ID=:id");
                $sql->bindParam(':id', $id);
                $sql->execute();
                if($sql)
                {
                return 1;
                }
                else
                {
                return 0;
                }
      }
    
      
      /*
 * 
 * FUNCTION FOR INSERTING USER
 * 
 * AUTHOR: VIDUR SHARMA 
 * 
 */
	
    function StoreUser($bname,$btype,$oname,$dob,$gender,$addr,$city,$dist,$state,$pin,$phone,$email,$username,$pass,$status)
    {
          //$status = 0;
	
//$db = new PDO('mysql:host=localhost;dbname=hostelakola;charset=utf8', 'root', '');
$sql = $this->db->prepare("INSERT INTO ep_user(`F_NAME`, `TYPE_BUSINESS`, `L_NAME`, `DOB`, `SEX`, `ADDRESS`, `CITY`, `DISTRICT`, `PIN`, `STATE`, `PHONE`, `EMAIL`, `USERNAME`, `PASSWORD`, `STATUS`)
VALUES(:banme,:btype,:oname,:dob,:gender,:addr,:city,:dist,:pin,:state,:phone,:email,:username,:pass,:status)");

        $sql->bindParam(':banme', $bname);
        $sql->bindParam(':btype', $btype);
        $sql->bindParam(':oname', $oname);
        $sql->bindParam(':dob', $dob);
        $sql->bindParam(':gender', $gender);
        $sql->bindParam(':addr', $addr);
        $sql->bindParam(':city', $city);
        $sql->bindParam(':dist', $dist);
        $sql->bindParam(':pin', $pin);
        $sql->bindParam(':state', $state);
        $sql->bindParam(':phone', $phone);
        $sql->bindParam(':email', $email);
        $sql->bindParam(':username', $username);
        $sql->bindParam(':pass', $pass);
        $sql->bindParam(':status', $status);
      

        $sql->execute();
        if($sql->rowCount())
        {
        return 1;
        }
        else
        {
             print_r($this->db->errorCode());
             print_r($this->db->errorInfo());
        }
 }
 
  
 /*
  * FUNCTION FOR USER LOGIN
  */
 
 function UserLogin($name,$passwordlogin)
	{
		$sql = $this->db->prepare("select * from ep_user where USERNAME=:username and PASSWORD=:passwordlogin");
			/* execute statement */
		$sql->bindParam(':username', $name);
                $sql->bindParam(':passwordlogin', $passwordlogin);
		$sql->execute();
		
			/* bind result variables */
			$row=$sql->fetchColumn();  ///fetchColumn() is used to select rows from table like mysql_num_row used in normal php 
				if ($row > 0)
				{
					return true;
					
				}
				else 
				{
					return false;	
				}
	}
        
/*
 * FUNCTION FOR STORE SEARCH
 */
        function StoreSearch($cat,$name)
    {
          //$status = 0;
	
//$db = new PDO('mysql:host=localhost;dbname=hostelakola;charset=utf8', 'root', '');
$sql = $this->db->prepare("INSERT INTO ep_search(`category`,`name`)VALUES(:cat,:name)");

        $sql->bindParam(':cat', $cat);
        $sql->bindParam(':name', $name);
      
 
        $sql->execute();
        if($sql->rowCount())
        {
        return 1;
        }
        else
        {
             print_r($this->db->errorCode());
             print_r($this->db->errorInfo());
        }
 }
       
	   
	   
	   
	   function addaspect($aspect,$main_cate)
    {
          //$status = 0;
	
//$db = new PDO('mysql:host=localhost;dbname=hostelakola;charset=utf8', 'root', '');
$sql = $this->db->prepare("INSERT INTO aspect(`aspects`,`category`)VALUES(:aspect,:main_cate)");

        $sql->bindParam(':aspect', $aspect);
        $sql->bindParam(':main_cate', $main_cate);
        $sql->execute();
        if($sql->rowCount())
        {
        return 1;
        }
        else
        {
             print_r($this->db->errorCode());
             print_r($this->db->errorInfo());
        }
 }
 
 
	   function addsynonym($synonym,$aspect)
    {
          //$status = 0;
	
//$db = new PDO('mysql:host=localhost;dbname=hostelakola;charset=utf8', 'root', '');
$sql = $this->db->prepare("INSERT INTO aspect_synonym(`aspect_id`,`synonym_word`)VALUES(:aspect,:synonym)");

        $sql->bindParam(':synonym', $synonym);
		 $sql->bindParam(':aspect', $aspect);
        
        $sql->execute();
        if($sql->rowCount())
        {
        return 1;
        }
        else
        {
             print_r($this->db->errorCode());
             print_r($this->db->errorInfo());
        }
 }
 
 
 
 
	   
	   
	   
	    function delete($id,$table){
 
                $sql = $this->db->prepare("delete from $table where PD_ID=:id");
                $sql->bindParam(':id', $id);
                $sql->execute();
                if($sql)
                {
                return 1;
                }
                else
                {
                return 0;
                }
      }
	  
	  
	   
/*
 * UPLOAD CATEGORY VIA EXCEL FILE 
 * 
 */ 
        function StoreExcelCategory($category_name,$status)
    {
          //$status = 0;
	
//$db = new PDO('mysql:host=localhost;dbname=hostelakola;charset=utf8', 'root', '');
$sql = $this->db->prepare("INSERT INTO ep_category(`CATEGORY_NAME`, `STATUS`)
VALUES(:category_name[1],:status[2])");

        $sql->bindParam(':category_name', $category_name);
        $sql->bindParam(':status', $status);
       
        

        $sql->execute();
        if($sql->rowCount())
        {
        return 1;
        }
        else
        {
             print_r($this->db->errorCode());
             print_r($this->db->errorInfo());
        }
 }
        
}
?>