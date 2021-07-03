<?php

include('../core.php');
$pid=$_GET['pid'];



    
    
    
    $sql = $connect -> query ("DELETE FROM `products` WHERE `products`.`pid` = $pid ");
        if($sql===true){
            echo '<script>alert("Item Deleted")</script>';
            echo '<script>window.location="../../masterpage.php"</script>';
    }else{
        echo ('false');
    }



