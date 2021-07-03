<?php
include('./backend/core.php');

if (!isset($_SESSION["userId"])) {
	header('Location:login.php');
}
?>
<?php

require_once './includes/header.php';
$sID = $_SESSION['userId']; ?>


<div class="title">
	<h1> User Profile</h1>
</div>
<br>
<a href="logout.php"><button2>log out</button2></a>


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




		<?php




		?>
		<div class="title">
			<h1>Purchase History</h1>
		</div>


		<div class="table-row table-head">

			<div class="table-cell1">
				<p>Order Id</p>
			</div>
			<div class="table-cell1">
				<p>Customer Id</p>
			</div>
			<div class="table-cell1">
				<p>Item Id</p>
			</div>
			<div class="table-cell">
				<p>Item Name</p>
			</div>
			<div class="table-cell1">
				<p>Price</p>
			</div>
			<div class="table-cell1">
				<p>Quantity</p>
			</div>
			<div class="table-cell1">
				<p>Total Price</p>
			</div>
			<div class="table-cell">
				<p>Status</p>
			</div>


		</div>
		<?php

		$query1 = "SELECT * FROM confirmorders WHERE Cid = $sID";
		$query_run1 = mysqli_query($connect, $query1);
		$check_data1 = mysqli_num_rows($query_run1) > 0;
		if ($check_data1) {
			while ($row = mysqli_fetch_array($query_run1)) {

		?>

				<div class="table-row">
					<div class="table-cell1 ">
						<p><?php echo $row["Oid"]; ?></p>
					</div>
					<div class="table-cell1 ">
						<p><?php echo $row["Cid"]; ?></p>
					</div>
					<div class="table-cell1 ">
						<p><?php echo $row["Pid"]; ?> </p>
					</div>
					<div class="table-cell align-cell">
						<p><?php echo $row["PName"]; ?></p>
					</div>
					<div class="table-cell1 ">
						<p><?php echo $row["Pprice"]; ?></p>
					</div>
					<div class="table-cell1 ">
						<p><?php echo $row["Pqty"]; ?></p>
					</div>
					<div class="table-cell1 ">
						<p><?php echo $row["Fprice"]; ?></p>
					</div>
					<div class="table-cell ">
						<p><?php echo $row["Status"]; ?></p>
						<a href="checktrack.php?status=<?php echo $row["Status"]; ?>">
                                        <p6>Order Tracking</p6>
                                </a>
					</div>


				</div>
		<?php
			}
		}
		?>







		<?php require_once './includes/footer.php' ?>