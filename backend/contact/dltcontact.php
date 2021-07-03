<?php
include('../core.php');

    
    
    $cid=$_GET['cid'];
   


    $sql = $connect -> query ("DELETE FROM `contact` WHERE `contact`.`id` = $cid");
    if($sql===true){
    
    echo '<script>alert("Deleted")</script>';
    }else{
        echo '<script>alert("Something Wrong. Please try again")</script>';
    }

    echo '<script>window.location="../../masterpage.php"</script>';
    

