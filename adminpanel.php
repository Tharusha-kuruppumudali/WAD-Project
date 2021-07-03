<?php
include('./backend/core.php');

if (!isset($_SESSION["userId"])) {

	header('Location:login.php');
}
?>

<?php require_once './includes/header.php';
$sID = $_SESSION['userId']; ?>


<div class="title">
	<h1> Admin User Profile</h1>
</div>
<br>
<a href="logout.php">
	<button2>log out</button2>
</a>


<?php
$query3 = "SELECT * FROM user WHERE id = $sID";
$query_run3 = mysqli_query($connect, $query3);
$check_data3 = mysqli_num_rows($query_run3) > 0;
if ($check_data3) {
	while ($row = mysqli_fetch_array($query_run3)) {

?>

		<div class="container6">
			<div class="userInfo">

				<div class="box1">
					<div class="icon1">&#10140;</div>
					<div class="text1">
						<h3>User Name</h3>
						<p6><?php echo $row["Name"]; ?></p6>
					</div>
				</div>

				<div class="box1">
					<div class="icon1">&#10140;</div>
					<div class="text1">
						<h3>Email</h3>
						<p6><?php echo $row["Email"]; ?></p6>
					</div>
				</div>

				<div class="box1">
					<div class="icon1">&#10140;</div>
					<div class="text1">
						<h3>Type</h3>
						<p6><?php echo $row["type"]; ?></p6>
					</div>
				</div>

				<div class="box1">
					<div class="icon1">&#10140;</div>
					<div class="text1">
						<h3>Status</h3>
						<p6><?php echo $row["active"]; ?></p6>
					</div>
				</div>

			</div>

			<div class="userInfo">

				<div class="box1">
					<div class="icon1">&#10140;</div>
					<div class="text1">
						<h3>Address</h3>
						<p6><?php echo $row["Address"]; ?></p6>
					</div>
				</div>

				<div class="box1">
					<div class="icon1">&#10140;</div>
					<div class="text1">
						<h3>Contact</h3>
						<p6><?php echo $row["Contact"]; ?></p6>
					</div>
				</div>

				<div class="box1">
					<div class="icon1">&#10140;</div>
					<div class="text1">
						<h3>Postal Code</h3>
						<p6><?php echo $row["PCode"]; ?></p6>
					</div>
				</div>

				<div class="box1">
					<div class="icon1">&#10140;</div>
					<div class="text1">
						<h3>Register Date</h3>
						<p6><?php echo $row["regdate"]; ?></p6>
					</div>
				</div>

			</div>

	<?php
	}
}
	?>




	<div class="contactform">
		<form action="backend/register/nuserreg.php" method="POST">
			<h2>My Details</h2>
			<div class="inputBox">
				<input type="text" name="Address" required="required">
				<span>Address</span>
			</div>
			<div class="inputBox">
				<input type="text" name="Contact" required="required">
				<span>Contact Number</span>
			</div>
			<div class="inputBox">
				<input type="text" required="required" name="Postal"></input>
				<span>Postal Code</span>
			</div>
			<div class="inputBox">
				<input type="Submit" name="submit" value="Update">
			</div>
		</form>
	</div>
		</div>



		<div class="adminp">
			<br>
			>
			<br>
			<div class="title">
				<h1>Manage Products</h1>
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
							<a href="./backend/adminuser/adminuser1.php?pid=<?php echo $row["pid"]; ?>">
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






			</form>
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
					echo '<script>window.location="adminpanel.php"</script>';
				} else {

					echo '<script>alert("Can not Upload")</script>';
					echo '<script>window.location="adminpanel.php"</script>';
				}
			}
			?>

			<br>

		</div>
		<?php require_once './includes/footer.php' ?>