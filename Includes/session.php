<?php
session_start();
if(!isset($_SESSION['Retailer']))
{
//header("location:../index.php");	
}
include 'Application/DB_Functions.php';
?>