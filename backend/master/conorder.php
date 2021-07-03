<?php
include('../core.php');
$pid = $_SESSION['pid'];

$sID = $_SESSION['userId'];

$query = "SELECT * FROM orders";
        $query_run = mysqli_query($connect, $query);
        $check_data = mysqli_num_rows($query_run) > 0;
        if ($check_data) {
            while ($row = mysqli_fetch_array($query_run)) {
                $oid =  $row["Orderid"];
               

$sql = $connect -> query ("UPDATE `confirmorders` SET `Oid` = '$oid' WHERE `confirmorders`.`Pid` = $pid AND `confirmorders`.`Pid` = $sID;");
                            if($sql===true){
                            
                            echo '<script>alert("Updated")</script>';
                            }else{
                                echo '<script>alert("Something Wrong in conorder")</script>';
                            }
                        
                            echo '<script>window.location="../../cart.php"</script>';

                
                        }
                    }     
                        
                    

?>
                        