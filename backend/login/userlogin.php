<?php

include('../core.php');
if ($_POST) {
    $sID="";
    $out = "";
    $name = $_POST['Username'];
    $password = $_POST['Password'];
    $chkmail = $connect->query("SELECT * FROM `user` WHERE `Name` = '$name'");
    if ($chkmail->num_rows == 1) {

        $mainSql = $connect->query("SELECT * FROM user WHERE Name = '$name' AND password = '$password' AND type='normal'");
        $adminSql = $connect->query("SELECT * FROM user WHERE Name = '$name' AND password = '$password' AND type='Admin'");
        $masterSql = $connect->query("SELECT * FROM user WHERE Name = '$name' AND password = '$password' AND type='Master'");

        if ($masterSql->num_rows == 1) {
            $value = $masterSql->fetch_assoc();
            $_SESSION['userId'] = $value['id'];
            $_SESSION['Type'] = $value['type'];
            $_SESSION['Active'] = $value['active'];
            $_SESSION['username'] = $value['Name'];
            $sID= $_SESSION['userId'] ;
            
        } else {
            $out = "Password is incorrect";
        }

        if ($adminSql->num_rows == 1) {
            $value = $adminSql->fetch_assoc();
            $_SESSION['userId'] = $value['id'];
            $_SESSION['Type'] = $value['type'];
            $_SESSION['Active'] = $value['active'];
            $_SESSION['username'] = $value['Name'];
            $sID= $_SESSION['userId'] ;
            
        } else {
            $out = "Password is incorrect";
        }


        if ($mainSql->num_rows == 1) {
            $value = $mainSql->fetch_assoc();
            $_SESSION['userId'] = $value['id'];
            $_SESSION['Type'] = $value['type'];
            $_SESSION['Active'] = $value['active'];
            $_SESSION['username'] = $value['Name'];
            $sID= $_SESSION['userId'] ;
            
        } else {
            $out = "Password is incorrect";
        }
        
      
        
       header('location: ../../account.php');
        
    } else {
        $out = "Email is not in system";
    }
    echo ($out);
}
