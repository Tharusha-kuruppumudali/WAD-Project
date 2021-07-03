<?php 
include('./backend/core.php');
require_once './includes/header.php';
$id=$_GET['pid'];
if(filter_var($id, FILTER_VALIDATE_INT)=== false){
    die("No Valid ID");
}
$out ="";




$query = "SELECT * FROM products WHERE pid = '$id'";
$query_run = mysqli_query($connect, $query);

if (mysqli_num_rows($query_run) > 0) {
    while ($row = mysqli_fetch_array($query_run)) {
        $chkqty=$row["product_qty"];
        if ($chkqty <= 0) {
            $out = "Out Of Stoke";
            $out1 = "";
    } else {
            $out1 = "In Stoke";
            $out = "";
    }
        
?>




<div class="small-container single-product">
    <div class="row">
        <div class="col-2">
            <img  src="<?php echo $row["product_image"]; ?>" >
        </div>
        <div class="col-2">
            <p>Product Id=<?php echo $row["pid"]; ?></p>
            <h1><?php echo $row["product_name"]; ?></h1>
            
            <h3>LKR <?php echo $row["product_price"]; ?>.00</h3>
            <hr>
            <br>
            <h6><?php echo  $out ?></h6>
            <h5><?php echo $out1 ?></h5>
            <br>
            <p>Quantity</p>
            <form action="addtocart.php?pid=<?php echo $row["pid"]; ?>" method="POST">
            <input type="hidden" name="pid" value="<?php echo $row["pid"]; ?>">
            <input type="hidden" name="product_name" value="<?php echo $row["product_name"]; ?>">
            <input type="hidden" name="product_image" value="<?php echo $row["product_image"]; ?>">
            <input type="hidden" name="product_price" value="<?php echo $row["product_price"]; ?>">
            <input type="number" name="product_qty" value="1">
            <?php
            if($out1 === "In Stoke"){
            ?>
            <button type="submit" name="SubmitBtn" id="SubmitBtn">Add To Cart</button>
            <?php
            }
            ?>
            
            </form>
            <br>
            <br>
            <br>
            <br>
            <hr>
            <p><?php echo $row["product_des"]; ?></p>

        </div>
    </div>
</div>

<?php 

    }
}
require_once './includes/footer.php'?>
