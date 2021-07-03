<?php
include('../core.php');
if($_POST){
    
    $id = $_POST['id'];
    $Type = $_POST['Type'];
    $Status=$_POST['Status'];
   


    $sql = $connect -> query ("UPDATE `user` SET `Type` = '$Type' , `active` = '$Status' WHERE `user`.`id` = $id; ");
    if($sql===true){
    
    echo '<script>alert("Updated")</script>';
    }else{
        echo '<script>alert("Something Wrong. Please try again")</script>';
    }

    echo '<script>window.location="../../masterpage.php"</script>';
    

}