<?php
    $key=$_GET['key'];
    $array = array();
    $con=mysql_connect("localhost","root","");
    $db=mysql_select_db("epharmc",$con);
    $query=mysql_query("select * from  ep_product where PRODUCT_NAME like '%{$key}%' OR DISTRIBUTER like '%{$key}%' OR CITY like '%{$key}%'");
    while($row=mysql_fetch_assoc($query))
    {
      $array[] = substr($row['PRODUCT_NAME'],0,53);
    }
    echo json_encode($array);
?>
