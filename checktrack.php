<?php 
echo ("hi");
header('Location:tracking1.php');

$stat=$_GET['status'];

if($stat==='Pending'){
    header('Location:tracking1.php');
}
else if($stat==='Dispatched'){
    header('Location:tracking2.php');
}
else if($stat==='Processed'){
    header('Location:tracking3.php');
}
else if($stat==='Shipped'){
    header('Location:tracking4.php');
}
else if($stat==='Delivered'){
    header('Location:tracking5.php');
}
else{
    echo ("false");
}
