<?php
//adduser.php
include('../core.php');
if($_POST){
    $out ="";
    $name = $_POST['Username'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $today = date('Y-m-d');
    $activecode = rand(1000,10000);

    $chkmail = $connect-> query("SELECT * FROM `user` WHERE `Email` = '$email'");
    if($chkmail->num_rows ==0){
        $sql = $connect -> query ("INSERT INTO `user` (`id`, `Name`, `Email`, `password`, `type`, `active`, `activecode`, `regdate`, `Address`, `Contact`, `PCode`) VALUES (NULL, '$name', '$email', '$password', 'normal', 'non', '$activecode', '$today','','','');");
        if($sql===true){
            echo ('success');
            $mainSql = $connect->query("SELECT * FROM user WHERE Email = '$email' AND password = '$password'");
            if($mainSql->num_rows == 1){
                $value = $mainSql -> fetch_assoc();
                $_SESSION['userId']=$value['id'];
                $_SESSION['Type']=$value['type'];
                $_SESSION['Active']=$value['active'];
                
                

    header('location: ../../nuserprofile.php');


            }
        }else{
            echo ('false');
        }
    }else{
        $out = "this mail already taken";
    }
    echo ($out);
   


}
