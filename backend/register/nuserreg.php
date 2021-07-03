<?php
include('../core.php');
$sID= $_SESSION['userId'] ;
            
if($_POST){
    
    $Address = $_POST['Address'];
    $Contact = $_POST['Contact'];
    $PCode = $_POST['Postal'];


    $sql = $connect -> query ("UPDATE `user` SET `Address` = '$Address', `Contact` = '$Contact', `PCode` = '$PCode' WHERE `user`.`id` = $sID; ");
    if($sql===true){
    
    echo '<script>alert("Updated")</script>';
    }else{
        echo '<script>alert("Something Wrong. Please try again")</script>';
    }

    echo '<script>window.location="../../account.php"</script>';
    

}