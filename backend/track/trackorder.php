<?php
include('../core.php');
if($_POST){
    
    $id = $_POST['id'];
    $Status=$_POST['Status'];
   $cid=$_POST['cid'];


    $sql = $connect -> query ("UPDATE `confirmorders` SET `Status` = '$Status' WHERE `confirmorders`.`Oid` = $id AND `confirmorders`.`Cid` = $cid; ");
    $sql1 = $connect -> query ("UPDATE `orders` SET `Status` = '$Status' WHERE `orders`.`Orderid` = $id; ");
    if($sql===true){
    
    echo '<script>alert("Updated")</script>';
    }else{
        echo '<script>alert("Something Wrong. Please try again")</script>';
    }

    echo '<script>window.location="../../masterpage.php"</script>';
    

}