<?php
include('../core.php');
if($_POST){
    
    $id = $_POST['id'];
    
   


    $sql = $connect -> query ("DELETE FROM `faq` WHERE `faq`.`id` = $id ");
    if($sql===true){
    
    echo '<script>alert("Deleted")</script>';
    }else{
        echo '<script>alert("Something Wrong. Please try again")</script>';
    }

    echo '<script>window.location="../../masterpage.php"</script>';
    

}