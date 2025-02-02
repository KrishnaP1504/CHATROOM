<?php
require('includes/init.php');
if(check_login()==true){
	header('location: chat/chat.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatroom Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
            <h2>Welcome <span>CHATROOM</span></h2>
            <p class="subtitle">Login to your chatroom account</p>

            <form action="login.php" method="POST">
    <label for="email">UserName or Email</label>
    <input type="text" id="email" name="user" placeholder="User or Email" required>

    <div class="password-container">
        <label for="password">Password</label>
        <a href="#" class="forgot-password">Forgot your password?</a>
    </div>
    <input type="password" id="password" name="pass" required>

    <button type="submit" class="login-btn">Login</button>
</form>


            <div class="separator">
                <span>Or continue with</span>
            </div>

            <div class="social-login">
                <button class="social-btn"><img src="images/github.svg" alt="GitHub"></button>
                <button class="social-btn"><img src="images/google.png" alt="Google"></button>
                <button class="social-btn"><img src="images/meta.svg" alt="Meta"></button>
            </div>

            <p class="signup-text">Don't have an account? <a href="sign.php">Sign up</a></p>

            <p class="terms">
                By clicking continue, you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.
            </p>
        </div>
    </div>
</body>
</html>

