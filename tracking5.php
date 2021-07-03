<?php
include('./backend/core.php');

if (!isset($_SESSION["userId"])) {
	header('Location:login.php');
}
?>
<?php 

require_once './includes/header.php' ?>



<div class="progress">
<ul5>

<li5>
<img src="assets/watch-image/pending.png" alt=""><br>
<p9>&#10004;</p9>
<p>Pending</p>
</li5>

<li5>
<img src="assets/watch-image/Dispatched.png" alt=""><br>
<p9>&#10004;</p9>
<p>Dispatched</p>
</li5>

<li5>
<img src="assets/watch-image/Processed.png" alt=""><br>
<p9>&#10004;</p9>
<p>Processed</p>
</li5>

<li5>
<img src="assets/watch-image/Shipped.png" alt=""><br>
<p9>&#10004;</p9>
<p>Shipped</p>
</li5>

<li5>
<img src="assets/watch-image/Delivered.png" alt=""><br>
<p9>&#10004;</p9>
<p>Delivered</p>
</li5>

</ul5>
</div>
