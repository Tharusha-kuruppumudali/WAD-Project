
<?php  $head = "Contact-Us"; ?>
<?php require_once '../includes/solarheader.php' ?>
<section class="contact">
    
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
        <form action="../backend/solarcon/solarcont.php" method="POST" >
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
</section>
<?php require_once '../includes/solarfooter.php' ?>