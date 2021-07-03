
<?php require_once './includes/header.php'?>
<body onload="document.form1.Email.focus()">
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="./assets/watch-image/regwatch.png" width="80%">
            </div>
            <div class="col-2">
                <div class="form-container">
                    <div>
                        <h1>Register</h1>
                    </div>
                    <form name="form1" action="./backend/register/adduser.php" method="POST" id="form1" enctype="multipart/form-data">
                        
                        <input type="text" name="Username" placeholder="Username">
                        <input type="Email" name="Email" placeholder="Email">
                        <input type="password" name="Password" placeholder="Password">
                        <button type="Submit" class="btn" id="SubmitBtn" onclick="ValidateEmail(document.form1.Email)">Register</button>
                        <a href="./login.php"><button type="button" class="btn2">Login</button></a>
                       
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</body>

<script src="./custom/js/register.js"></script>
<?php require_once './includes/footer.php'?>