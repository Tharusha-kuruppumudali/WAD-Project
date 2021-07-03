<?php
include('./backend/core.php');
require_once './includes/header.php' ?>
<div class="title">
        <h1>Featured Products</h1>
    </div>
    
    <div class="productss">
    
<?php

$query = "SELECT * FROM products";
$query_run = mysqli_query($connect, $query);
$check_data = mysqli_num_rows($query_run) > 0;
if ($check_data) {
    while ($row = mysqli_fetch_array($query_run)) {

?>
        
            <div class="gallery">
                <a target="_blank" href=" ./singleproduct.php?pid=<?php echo $row["pid"] ?>"  >  
                    <img src="<?php echo $row["product_image"]; ?>" alt="Cinque Terre" height="100%" width="50%" >
                </a>
                <div class="desc">
                    <p3>Product id: <?php echo $row["pid"]; ?></p3>
                    <hr>
                    <h3><?php echo $row["product_name"]; ?></h3>
                    <p>LKR <?php echo $row["product_price"]; ?>.00</p>
                </div>
            </div>

            
            

    <?php
        
    }
} else {
    echo "No data";
}

    ?>
    </div>
    

        <?php require_once './includes/footer.php' ?>