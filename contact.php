<?php 
include('./backend/core.php');
require_once './includes/header.php' ?>

<section class="contact">
    <div class="content">
        <h2>Contact Us</h2>
        <br>
        <p>Lets get in touch. Send us a message:</p>

    </div>
    <div class="container5">
        <div class="contactInfo">

            <div class="box">
                <div class="icon">&#9906;</div>
                <div class="text">
                    <h3>HEAD OFFICE</h3>
                    <p5>Greens (pvt)LTD, <br> Colombo 03, <br> Sri Lnaka. </p5>
                </div>
            </div>

            <div class="box">
                <div class="icon">&#9742;</div>
                <div class="text">
                    <h3>GENERAL CONTACT</h3>
                    <p5>0112456789 <br>0112589632</p5>
                </div>
            </div>

            <div class="box">
                <div class="icon">&#9742;</div>
                <div class="text">
                    <h3>HOTLINE</h3>
                    <p5>0758462159 <br> 0714589632</p5>
                </div>
            </div>

            <div class="box">
                <div class="icon">&#9993;</div>
                <div class="text">
                    <h3>Email</h3>
                    <p5>Greens@yahoo.com</p5>
                </div>
            </div>

        </div>
        <div class="contactform">
        <form action="backend/contact/contactus.php" method="POST" >
        <h2>Send Message</h2>
        <div class="inputBox">
        <input type="text" name="Name" required="required">
        <span>Full Name</span>
        </div>
        <div class="inputBox">
        <input type="text" name="Email" required="required">
        <span>Email</span>
        </div>
        <div class="inputBox">
        <textarea required="required" name="message" ></textarea>
        <span>Type your message</span>
        </div>
        <div class="inputBox">
        <input type="Submit"  name="submit" value="Send">
        </div>
        </form>
        </div>
    </div>
    <br>
 <br>
    <br>
    <div class="content">
        <h2>FAQ</h2>
        <br>
        

    </div>
    <?php

$query = "SELECT * FROM faq";
$query_run = mysqli_query($connect, $query);
$check_data = mysqli_num_rows($query_run) > 0;
if ($check_data) {
    while ($row = mysqli_fetch_array($query_run)) {

?>
    
    <div class="containerfaq">
        <div class="accordion">
            <div class="accordion-item" id="<?php echo $row["id"]; ?>" >
                <a href="#<?php echo $row["id"]; ?>" ><?php echo $row["id"]; ?>--<?php echo $row["Question"]; ?></a>
                <div class="answer"><p><?php echo $row["Answer"]; ?></p></div>
            </div>
        </div>
    </div>
    <?php
    }
}
    ?>
</section>


<?php require_once './includes/footer.php' ?>