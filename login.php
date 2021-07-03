
<?php require_once './includes/header.php'?>

<div class="account-page">
    <div class="container">
        <div class="row">
            
            <div class="col-2">
                <div class="form-container">
                    <div>
                        <h1>Login</h1>
                    </div>
                    <form action="./backend/login/userlogin.php" method="POST" id="login_form">
                        <input type="text" name="Username" placeholder="Username">
                        
                        <input type="password" name="Password" placeholder="Password">
                        <button type="Submit"  class="btn2">Login</button>
                        <a href="./register.php"><button type="button" class="btn2" id="SubmitBtn2">Register</button></a>
                       
                    </form>

                </div>
            </div>
            <div class="col-2">
                <img src="./assets/watch-image/regwatch.png" width="80%">
            </div>
        </div>
    </div>
</div>


<?php require_once './includes/footer.php'?>