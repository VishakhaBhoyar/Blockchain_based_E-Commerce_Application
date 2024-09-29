<?php
session_start();
unset($_SESSION['Retailer']);
unset($_SESSION['Retailer_id']);

session_destroy();
header("location:index.php");
?>