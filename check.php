<?php
include('backend/core.php');
require_once './includes/header.php';

$arnumb = 0;
$sID = $_SESSION['userId'];
echo ($sID);
?>
<br>
<?php


if (!empty($_SESSION['shopping_cart'])) {
    foreach ($_SESSION['shopping_cart'] as $keys => $values) {


        $Pid = $values['itm_id'];
        $name = $values['imt_name'];
        $image = $values['itm_image'];
        $price = $values['itm_price'];
        $qty = $values['itm_qty'];
        $finalprice = $qty * $price;


        $query = "SELECT * FROM user WHERE id='$sID'";
        $query_run = mysqli_query($connect, $query);
        $check_data = mysqli_num_rows($query_run) > 0;
        if ($check_data) {
            while ($row = mysqli_fetch_array($query_run)) {
                $Customerid =  $row["id"];
                $Address =  $row["Address"];
                $Contact =  $row["Contact"];
                $PCode =  $row["PCode"];



                $sql = $connect->query("INSERT INTO `orders` (`Orderid`, `Customerid`, `Contact`, `Address`, `PCode`, `Pid`, `Pname`, `Pqty`, `Status`) VALUES (NULL, '$Customerid', '$Contact', '$Address', '$PCode', '$Pid', '$name', '$qty', 'Pending'); ");
                $sql2 = $connect->query("INSERT INTO `confirmorders` (`Oid`, `Cid`, `Pid`, `PName`, `Pprice`, `Pqty`, `Fprice`, `Status`) VALUES (NULL, '$Customerid', '$Pid', '$name', '$price', '$qty', '$finalprice', 'Pending');");
                $_SESSION['pid'] = $values['itm_id'];
                
                if ($sql === true) {
                    echo ('true');
                    header('location: backend/master/conorder.php');
                    
                } else {
                    echo ('false');
                }
            }
        }
        
    }
}




?>