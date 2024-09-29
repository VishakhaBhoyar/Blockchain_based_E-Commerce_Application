<?php
include 'Application/DB_Functions.php';  // Include Db_function file for asseccing the function
$obj= new Connections(); // Create object of class connection for calling the Personal_Details function

if(isset($_GET['Did']))
{
$id=$_GET['Did'];

if($obj->DeleteSubCategory($id)==1)
{
    ?>
<script type="text/javascript">
alert("Record Deleted Successfully.");
history.go(-1);

</script>
<?php

}
else
{
echo "Oops";
}
}
?>
