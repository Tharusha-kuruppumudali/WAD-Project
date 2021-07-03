<?php session_start();

if (!isset($_SESSION["userId"])) {
    header('Location:login.php');
}
?>
<?php

if ($_POST) {
    if (isset($_SESSION['shopping_cart'])) {

        $arrid =  array_column($_SESSION['shopping_cart'], 'itm_id');

        if (!in_array($_GET['pid'], $arrid)) {
            $conut = count($_SESSION['shopping_cart']);
            $itm_arr  = array(
                'itm_id' => $_GET['pid'],
                'itm_image' => $_POST['product_image'],
                'imt_name' => $_POST['product_name'],
                'itm_price' => $_POST['product_price'],
                'itm_qty' => $_POST['product_qty']

            );
            $_SESSION['shopping_cart'][$conut] = $itm_arr;

            echo '<script>alert("next Add To cart")</script>';
            echo '<script>window.location="cart.php"</script>';
        } else {
            echo '<script>alert("All Ready In the Cart")</script>';
            echo '<script>window.location="cart.php"</script>';
        }
    } else {
        $itm_arr  = array(
            'itm_id' => $_GET['pid'],
            'itm_image' => $_POST['product_image'],
            'imt_name' => $_POST['product_name'],
            'itm_price' => $_POST['product_price'],
            'itm_qty' => $_POST['product_qty']

        );
        $_SESSION['shopping_cart'][0] = $itm_arr;

        echo '<script>alert("Add To cart")</script>';
        echo '<script>window.location="cart.php"</script>';
    }
}


?>
