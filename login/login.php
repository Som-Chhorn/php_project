<?php
include_once("../partial/header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In/Up</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<!--
    Author: https://codewithkevan.com
-->

<body>
    <script src="https://kit.fontawesome.com/f05c8837f2.js" crossorigin="anonymous"></script>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-github"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" placeholder="Name" />
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Password" />
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">

            <form action="#">
                <h1>Sign in</h1>
                <input type="firstname" placeholder="Firstname" />
                <input type="lastname" placeholder="Lastname" />
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <button>Sign In</button>
                
            </form>

        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>Already with us? <br>Sign in to your account</p>
                    <button class="ghost" id="signIn"><a href="../pages/home.php"> Sign In</a></button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Welcome User!</h1>
                    <p>Create your account to start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button><br>
                    <span>or use your account</span>
                    <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-github"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                </div>
                
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>

<?php
// include_once("../partial/footer.php"); ?>