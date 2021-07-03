<?php
include('../core.php');
$oid=$_GET['oid'];

$sql = $connect -> query ("DELETE FROM `orders` WHERE `orders`.`Orderid` = $oid ");
if($sql===true){

echo '<script>alert("Deleted")</script>';
}else{
    echo '<script>alert("Something Wrong. Please try again")</script>';
}

echo '<script>window.location="../../masterpage.php"</script>';
