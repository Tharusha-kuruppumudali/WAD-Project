<?php

include('../core.php');
$pid=$_GET['pid'];



    
    
    
    $sql = $connect -> query ("DELETE FROM `products` WHERE `products`.`pid` = $pid ");
        if($sql===true){
            header('location: ../../adminpanel.php');
    }else{
        echo ('false');
    }





