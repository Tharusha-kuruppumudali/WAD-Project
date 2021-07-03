<?php session_start();

if(!isset($_SESSION["userId"]))
{
    
	header('Location:login.php');
    
}
if(($_SESSION["Type"]==='Admin')){
    
    header('Location:adminpanel.php');

}
else if(($_SESSION["Type"]==='Master')){
    header('Location:masterpage.php');

}else{
    header('Location:nuserprofile.php');
}




?>