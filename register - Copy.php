<?php
include './Admin/Application/DB_Functions.php';  // Include Db_function file for asseccing the function
$obj= new Connections(); // Create object of class connection for calling the Personal_Details function

if(isset($_POST['bname']))
{
$bname = $_POST['bname'];
$btype = $_POST['btype'];
$oname = $_POST['oname'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$addr = $_POST['addr'];
$city = $_POST['city'];
$dist = $_POST['dist'];
$state = $_POST['state'];
$pin = $_POST['pin'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$username = $_POST['username'];
$pass = $_POST['password'];
$status = 0;
//echo $bname; 


if($obj->StoreUser($bname,$btype,$oname,$dob,$gender,$addr,$city,$dist,$state,$pin,$phone,$email,$username,$pass,$status)==1)
{
echo "<script>alert('User Account successfull');</script>";
}
else{

}
}

?>