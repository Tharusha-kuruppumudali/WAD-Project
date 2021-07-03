<?php
include('./backend/core.php');

if (!isset($_SESSION["userId"])) {

        header('Location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="custom/css/barstyle.css">
        
</head>
<body>
        
</body>
</html>


<nav>
  <ul>
    <li><a href="#section-1">Manage Users</a></li>
    <li><a href="#section-2">Manage FAQ</a></li>
    <li><a href="#section-3">Manage Orders</a></li>
    <li><a href="#section-4">Manage Products</a></li>
    <li><a href="#section-5">Manage Contact</a></li>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
   
  
   
    <br>
    <br>

    <li><a href="logout.php">Logout</a></li>
 
  </ul>
</nav>


<main>

<div class="title" id="section-1">
        <h1> Manage Users</h1>
</div>





<div class="table-box" >
        <div class="table-row table-head">
                <div class="table-cell1">
                        <p>Id</p>
                </div>
                <div class="table-cell">
                        <p>Name</p>
                </div>
                <div class="table-cell">
                        <p>Email</p>
                </div>
                <div class="table-cell">
                        <p>Type</p>
                </div>
                <div class="table-cell">
                        <p>Status</p>
                </div>

        </div>
        <?php

        $query = "SELECT * FROM user";
        $query_run = mysqli_query($connect, $query);
        $check_data = mysqli_num_rows($query_run) > 0;
        if ($check_data) {
                while ($row = mysqli_fetch_array($query_run)) {

        ?>

                        <div class="table-row">
                                <div class="table-cell1 ">
                                        <p><?php echo $row["id"]; ?></p>
                                </div>
                                <div class="table-cell align-cell">
                                        <p><?php echo $row["Name"]; ?></p>
                                </div>
                                <div class="table-cell align-cell">
                                        <p><?php echo $row["Email"]; ?></p>
                                </div>
                                <div class="table-cell ">
                                        <p><?php echo $row["type"]; ?></p>
                                </div>
                                <div class="table-cell ">
                                        <p><?php echo $row["active"]; ?></p>
                                </div>

                        </div>
        <?php
                }
        }
        ?>

</div>

<br>
<div class="contactform">
        <form action="backend/usermanage/userman.php" method="POST">
                <h2>Update User</h2>
                <div class="inputBox">
                        <input type="text" name="id" required="required">
                        <span>User ID</span>
                </div>
                <span>Select the Type</span>

                <select name="Type" id="select" >
                        <option value="Normal">Normal</option>
                        <option value="Admin">Admin</option>
                        <option value="Master">Master</option>
                </select>
                <span>Select the Status</span>

                <select name="Status" id="select1">
                        <option value="non">non</option>
                        <option value="Active">Active</option>

                </select>

                <div class="inputBox">
                        <input type="Submit" name="submit" value="Update">
                </div>
        </form>
</div>
<hr>
<br>
<div class="title" id="section-2">
        <h1> Manage FAQ </h1>
</div>

<div class="container6">
        <div class="contactform">

                <form action="backend/faqadd/addfaq.php" method="POST">
                        <h2>Add FAQ</h2>

                        <div class="inputBox">
                                <textarea type="text" name="question" required="required"></textarea>
                                <span>Question</span>
                        </div>
                        <div class="inputBox">
                                <textarea type="text" required="required" name="answer"></textarea>
                                <span>Answer</span>
                        </div>
                        <div class="inputBox">
                                <input type="Submit" name="submit" value="Add">
                        </div>
                </form>
        </div>

        <div class="contactform">
                <form action="backend/faqadd/delfaq.php" method="POST">
                        <h2>Delete FAQ</h2>
                        <br><br>
                        <div class="inputBox">
                                <input type="text" name="id" required="required">
                                <span>FAQ Id</span>
                        </div>

                        <div class="inputBox">
                                <input type="Submit" name="submit" value="Delete">
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>

                </form>
        </div>

</div>


<div class="title" id="section-3">
        <h1> Manage Orders</h1>
</div>
<div class="table-box">
        <div class="table-row table-head">
                <div class="table-cell2">
                        <p>Order ID</p>
                </div>
                <div class="table-cell2">
                        <p>Customer ID</p>
                </div>
                <div class="table-cell4">
                        <p>Contact</p>
                </div>
                <div class="table-cell4">
                        <p>Address</p>
                </div>
                <div class="table-cell1">
                        <p>Postal Code</p>
                </div>
                <div class="table-cell2">
                        <p>Item ID</p>
                </div>
                <div class="table-cell5">
                        <p>Item Name</p>
                </div>
                <div class="table-cell2">
                        <p>Item Quantity</p>
                </div>
                <div class="table-cell2">
                        <p>Status</p>
                </div>

        </div>
        <?php

        $query1 = "SELECT * FROM orders";
        $query_run1 = mysqli_query($connect, $query1);
        $check_data1 = mysqli_num_rows($query_run1) > 0;
        if ($check_data1) {
                while ($row = mysqli_fetch_array($query_run1)) {

        ?>

                        <div class="table-row ">
                                <div class="table-cell2">

                                        <p><?php echo $row["Orderid"]; ?></p>
                                        <a href="backend/master/dltord.php?oid=<?php echo $row["Orderid"]; ?>">
                                                <p6>remove</p6>
                                        </a>
                                </div>
                                <div class="table-cell2">
                                        <p><?php echo $row["Customerid"]; ?></p>
                                </div>
                                <div class="table-cell4">
                                        <p><?php echo $row["Contact"]; ?></p>
                                </div>
                                <div class="table-cell4">
                                        <p><?php echo $row["Address"]; ?></p>
                                </div>
                                <div class="table-cell1">
                                        <p><?php echo $row["PCode"]; ?></p>
                                </div>
                                <div class="table-cell2">
                                        <p><?php echo $row["Pid"]; ?></p>
                                </div>
                                <div class="table-cell5">
                                        <p><?php echo $row["Pname"]; ?></p>
                                </div>
                                <div class="table-cell2">
                                        <p><?php echo $row["Pqty"]; ?></p>
                                </div>
                               
                                <div class="table-cell2">
                                        <p><?php echo $row["Status"]; ?></p>
                                </div>
                                

                        </div>
        <?php
                }
        }
        ?>

</div>

<div class="contactform">
        <form action="backend/track/trackorder.php" method="POST">
                <h2>Change Order Status</h2>
                <div class="inputBox">
                        <input type="text" name="id" required="required">
                        <span>Order ID</span>
                </div>
                <div class="inputBox">
                        <input type="text" name="cid" required="required">
                        <span>Customer ID</span>
                </div>
                <span>Select the Type</span>

                <select name="Status" id="select" >
                        <option value="Pending">Pending</option>
                        <option value="Dispatched">Dispatched</option>
                        <option value="Processed">Processed</option>
                        <option value="Shipped">Shipped</option>
                        <option value="Delivered">Delivered</option>
                </select>
                

                <div class="inputBox">
                        <input type="Submit" name="submit" value="Update">
                </div>
        </form>
</div>


<div class="title" id="section-4">
        <h1> Manage Products</h1>
</div>

<div class="contactform">
        <form action="" name="form1" method="POST" enctype="multipart/form-data">
                <h2>Add Products</h2>
                <div class="inputBox">
                        <input type="text" name="pnm" required="required">
                        <span>Product Name</span>
                </div>
                <div class="inputBox">
                        <input type="text" name="pprice" required="required">
                        <span>Product price</span>
                </div>
                <div class="inputBox">
                        <input type="text" required="required" name="pqty"></input>
                        <span>Product Quentity</span>
                </div>
                <div class="inputBox">
                        <input type="file" name="pimage"></input>
                        <span>Product image</span>
                </div>
                <div class="inputBox">
                        <textarea type="text" required="required" name="pdes"></textarea>
                        <span>Product descrption<< /span>
                </div>

                <div class="inputBox">
                        <input type="Submit" name="submit1" value="Update">
                </div>
        </form>
</div>



<div class="table-row table-head">

        <div class="table-cell2">
                <p>Item Id</p>
        </div>
        <div class="table-cell4">
                <p>Name</p>
        </div>
        <div class="table-cell1">
                <p>Price</p>
        </div>
        <div class="table-cell1">
                <p>Quantity</p>
        </div>
        <div class="table-cell">
                <p>Image</p>
        </div>
        <div class="table-cell">
                <p>Description</p>
        </div>



</div>
<?php
$out = "";
$out1 = "";

$query1 = "SELECT * FROM products";
$query_run1 = mysqli_query($connect, $query1);
$check_data1 = mysqli_num_rows($query_run1) > 0;
if ($check_data1) {
        while ($row = mysqli_fetch_array($query_run1)) {
                $chkqty = $row["product_qty"];
                if ($chkqty <= 0) {
                        $out = "Out Of Stoke";
                        $out1 = "";
                } else {
                        $out1 = "In Stoke";
                        $out = "";
                }
?>

                <div class="table-row">
                        <div class="table-cell2 ">
                                <p><?php echo $row["pid"]; ?></p>
                                <a href="./backend/master/dltproduct.php?pid=<?php echo $row["pid"]; ?>">
                                        <p6>remove</p6>
                                </a>
                        </div>
                        <div class="table-cell4 align-cell">
                                <p><?php echo $row["product_name"]; ?></p>

                        </div>
                        <div class="table-cell1 ">
                                <p>LKR <?php echo $row["product_price"]; ?> </p>
                        </div>
                        <div class="table-cell1 ">
                                <p><?php echo $row["product_qty"]; ?></p>
                                <p8><?php echo $out ?></p8>
                                <p9><?php echo $out1 ?></p9>

                        </div>
                        <div class="table-cell ">
                                <img src="<?php echo $row["product_image"]; ?>" alt="">
                        </div>
                        <div class="table-cell align-cell">
                                <p><?php echo $row["product_des"]; ?></p>
                        </div>



                </div>
<?php
        }
}
?>



<?php
if (isset($_POST["submit1"])) {

        $v1 = rand(1111, 9999);
        $v2 = rand(1111, 9999);
        $v3 = $v1 . $v2;
        $v3 = md5($v3);
        $fnm = $_FILES["pimage"]["name"];
        $dst = "./assets/wstoreimg/" . $v3 . $fnm;


        move_uploaded_file($_FILES["pimage"]["tmp_name"], $dst);
}




if ($_POST) {

        $name = $_POST['pnm'];
        $price = $_POST['pprice'];
        $qty = $_POST['pqty'];

        $des =  $_POST['pdes'];
        $sql = $connect->query("INSERT INTO `products` (`pid`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_des`) VALUES (NULL, '$name', '$price', '$qty', '$dst', '$des');");
        if ($sql === true) {

                echo '<script>alert("Addred to Store")</script>';
                echo '<script>window.location="masterpage.php"</script>';
        } else {

                echo '<script>alert("Can not Upload")</script>';
                echo '<script>window.location="masterpage.php"</script>';
        }
}
?>

<div class="title" id="section-5">
        <h1> Manage Contact</h1>
</div>

<div class="table-box">
        <div class="table-row table-head">
                <div class="table-cell2">
                        <p>Contact Id</p>
                </div>
                <div class="table-cell4">
                        <p>Name</p>
                </div>
                <div class="table-cell4">
                        <p>Email</p>
                </div>
                <div class="table-cell4">
                        <p>Message</p>
                </div>
                

        </div>
        <?php

        $query2 = "SELECT * FROM contact";
        $query_run2 = mysqli_query($connect, $query2);
        $check_data2 = mysqli_num_rows($query_run2) > 0;
        if ($check_data2) {
                while ($row = mysqli_fetch_array($query_run2)) {

        ?>

                        <div class="table-row ">
                                <div class="table-cell2">

                                        <p><?php echo $row["id"]; ?></p>
                                        <a href="backend/contact/dltcontact.php?cid=<?php echo $row["id"]; ?>">
                                                <p6>remove</p6>
                                        </a>
                                </div>
                                <div class="table-cell4 align-cell">
                                        <p><?php echo $row["name"]; ?></p>
                                </div>
                                <div class="table-cell4">
                                        <p><?php echo $row["email"]; ?></p>
                                </div>
                                <div class="table-cell4 align-cell">
                                        <p><?php echo $row["message"]; ?></p>
                                </div>
                              
                                

                        </div>
        <?php
                }
        }
        ?>

</div>

<br>


</main>

