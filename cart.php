<?php session_start();

if (!isset($_SESSION["userId"])) {

    header('Location:login.php');
}
?>

    
<?php
$arrsize = 0;
if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        foreach ($_SESSION["shopping_cart"] as $keys => $values) {
            if ($values["itm_id"] == $_GET["pid"]) {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("Item Removed")</script>';
                echo '<script>window.location="cart.php"</script>';
            }
        }
    }
}
require_once './includes/header.php'; ?>
<div class="crt">

<?php


if (!empty($_SESSION['shopping_cart'])) {
    foreach ($_SESSION['shopping_cart'] as $keys => $values) {


        $id = $values['itm_id'];
        $name = $values['imt_name'];
        $image = $values['itm_image'];
        $price = $values['itm_price'];
        $qty = $values['itm_qty'];
        $finalprice = $qty * $price;


?>


        <div class="small-container cart-page">
            <table>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="<?php echo $image ?>">
                            <div>
                                <h2> <?php echo $name ?></h2>
                                <h3>Price :LKR <?php echo $price ?>.00</h3>
                                <br>
                                <a href="cart.php?action=delete&pid=<?php echo $values["itm_id"]; ?>">Remove</a>

                            </div>

                        </div>

                    </td>
                    <td><input type="text" name="QtyTxt" id="QtyTxt" value="<?php echo $qty ?>"> </td>
                    <td>LKR <?php echo $finalprice ?>.00</td>
                </tr>
            </table>
          
        

        </div>
        




<?php
    }
} else {
    echo 'cart is empty';
}

?>
<a href="check.php"><button3>Checkout</button3></a>


</div>




<?php require_once './Includes/footer.php'; ?>