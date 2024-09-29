<?php
require "connection.php";


Class Connections {

    public $db;
    public function __Construct()
    {
        $this->db = new mPDO();
        //return $this->db;
    }
	function insert_miners_reg($f_name,$email,$password,$contact){
$sql =$this->db->prepare("INSERT INTO `miners` (`name`, `email`, `psw`, `contact`)
 VALUES (:f_name,:email,:password,:contact);");

$sql->bindParam(':f_name', $f_name);
$sql->bindParam(':email', $email);
$sql->bindParam(':password', $password);
$sql->bindParam(':contact', $contact);

$sql->execute();
if($sql->rowCount()) {
return 1;
}
else {
return 0;
}
}

	
    public function minCheckLogin($name,$password)
    {
        $sql = $this->db->prepare("select * from miners where email=:name and psw=:password");
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
	  
	    function update_final_order($delete_id)
    {
 
                $sql = $this->db->prepare("delete from final_order where ID=:id");
                $sql->bindParam(':id', $delete_id);
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
     function updates_final_order($id,$unt)  {
		  
$sql = $this->db->prepare("UPDATE final_order SET quantity=:unt WHERE ID='$id'");

        $sql->bindParam(':unt', $unt);
        

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
   
   function update_file($id,$file){
		  
$sql = $this->db->prepare("UPDATE final_order SET attchment=:file WHERE order_id='$id'");

$file=date("mdYHis")."-".$file;

        $sql->bindParam(':file', $file);
        
        $sql->execute();
		$tmp_name1=$_FILES['file']['tmp_name'];
		$location1='images/attachments/';
		move_uploaded_file($tmp_name1,$location1.$file);
		
		
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

   function Storecomment($comment,$Retailer,$Retailer_id,$p_id,$dates,$Time,$rate)
	 {
          //$status = 0;
	
//$db = new PDO('mysql:host=localhost;dbname=hostelakola;charset=utf8', 'root', '');
$sql = $this->db->prepare("INSERT INTO comments(`user_id`, `username`, `product_id`,`comment`,`Time`,`Date`,`rate`)
VALUES(:user_id,:username,:product_id,:comment,:Time,:Date,:rate)");

       
$sql->bindParam(':user_id', $Retailer_id);
$sql->bindParam(':username', $Retailer);
$sql->bindParam(':product_id', $p_id);
$sql->bindParam(':comment', $comment);
$sql->bindParam(':Time', $Time);
$sql->bindParam(':Date', $dates);
$sql->bindParam(':rate', $rate);
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
      
      
      /*
 * 
 * FUNCTION FOR INSERTING PRODUCT
 * 
 * AUTHOR: VIDUR SHARMA 
 * 
 */
	
    function StoreProduct($pname,$price,$desc,$mfd,$dis,$city,$qty,$main_cate,$sub_cate,$unit,$status)
    {
          //$status = 0;
	
//$db = new PDO('mysql:host=localhost;dbname=hostelakola;charset=utf8', 'root', '');
$sql = $this->db->prepare("INSERT INTO ep_product(`PRODUCT_NAME`,`PRICE`,`DESCRIPTION`,`QTY`,`PRODUCT_TYPE`,`PRODUCT_SUB_TYPE`,`PACKAGE_UNIT`,`MANUFACTRE`,`DISTRIBUTER`,`CITY`,`STATUS`)
VALUES(:pname,:price,:desc,:qty,:main_cate,:sub_cate,:unit,:mfd,:dis,:city,:status)");

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
$sql = $this->db->prepare("INSERT INTO ep_user(`NAME_BUSINESS`, `TYPE_BUSINESS`, `NAME_OWNER`, `DOB`, `SEX`, `ADDRESS`, `CITY`, `DISTRICT`, `PIN`, `STATE`, `PHONE`, `EMAIL`, `USERNAME`, `PASSWORD`, `STATUS`)
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
	
	
	
	
	
	
	
	function Storecart($user_id,$product_id,$DISTRIBUTER_ID)
    {
          //$status = 0;
	
//$db = new PDO('mysql:host=localhost;dbname=hostelakola;charset=utf8', 'root', '');
$sql = $this->db->prepare("INSERT INTO cart(`product_id`, `user_id` ,`dist_id`,`quantity`)
VALUES(:product_id,:user_id,:DISTRIBUTER_ID,'1')");

        $sql->bindParam(':user_id', $user_id);
        $sql->bindParam(':product_id', $product_id);
		$sql->bindParam(':DISTRIBUTER_ID', $DISTRIBUTER_ID);
		
       $sql->execute();
        if($sql->rowCount())
        {
        return 1;
        }
        else
        {
            
        }
 }
 
 
 function delete_prod($user_id,$product_id)
    {
 
                $sql = $this->db->prepare("delete from cart where user_id=:user_id AND product_id=:product_id");
                $sql->bindParam(':user_id', $user_id);
				 $sql->bindParam(':product_id', $product_id);
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
 
 
 function check($pid,$quantity,$retailer)
    
                {
	
//$db = new PDO('mysql:host=localhost;dbname=hostelakola;charset=utf8', 'root', '');
$sql = $this->db->prepare("UPDATE cart SET quantity=:quantity WHERE user_id='$retailer' AND product_id='$pid'");

        $sql->bindParam(':quantity', $quantity);
       
        

        $sql->execute();
        if($sql->rowCount())
        {
        return 1;
        }
        else
        {
            // echo $this->db->$sql;
             
         
        }
    }
 
 
 function final_order($user_id,$randnum,$product,$quantity,$PRICE,$DISTRIBUTER_ID,$DISTRIBUTER,$date,$previous_block_hash,$current_block_hash)
    {
          //$status = 0;
	
//$db = new PDO('mysql:host=localhost;dbname=hostelakola;charset=utf8', 'root', '');
$sql = $this->db->prepare("INSERT INTO final_order( `user_id`, `order_id`, `p_id`, `quantity`, `price`, `dist_id`, `dist_name`, `order_date`,`previous_block_hash`,`current_block_hash`)
VALUES(:user_id,:randnum,:product,:quantity,:PRICE,:DISTRIBUTER_ID,:DISTRIBUTER,:date,:previous_block_hash,:current_block_hash)");
$sql->bindParam(':user_id', $user_id);
        $sql->bindParam(':randnum', $randnum);
        $sql->bindParam(':product', $product);
        $sql->bindParam(':quantity', $quantity);
        $sql->bindParam(':PRICE', $PRICE);
        $sql->bindParam(':DISTRIBUTER_ID', $DISTRIBUTER_ID);
        $sql->bindParam(':DISTRIBUTER', $DISTRIBUTER);
        $sql->bindParam(':date', $date);
      $sql->bindParam(':previous_block_hash', $previous_block_hash);
       $sql->bindParam(':current_block_hash', $current_block_hash);

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
 
 
 
 
 
 
 
 
 
  function payment($image_1,$type,$randnum)
    {
$sql = $this->db->prepare("INSERT INTO payment_mode(`order_id`, `payment_mode`, `screenshot`)
VALUES(:randnum,:type,:image_1)");

        $sql->bindParam(':image_1', $image_1);
        $sql->bindParam(':type', $type);
        $sql->bindParam(':randnum', $randnum);
     
      

        $sql->execute();
        if($type=='online'){
        $tmp_name=$_FILES['file']['tmp_name'];
$location='images/payment/';
move_uploaded_file($tmp_name,$location.$image_1);}
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
 function payment1($type)
    {
$sql = $this->db->prepare("INSERT INTO payment_details(`type`)
VALUES(:type)");

        $sql->bindParam(':type', $type);
   
       
      

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
 
 
 
 
 
 
 
 


function delete_cart($user_id,$dist_id,$product)
    {
 
                $sql = $this->db->prepare("delete from cart where user_id=:user_id AND product_id=:product AND dist_id=:dist_id");
                $sql->bindParam(':user_id', $user_id);
				$sql->bindParam(':product', $product);
				$sql->bindParam(':dist_id', $dist_id);
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
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
?>