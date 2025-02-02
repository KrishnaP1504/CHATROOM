<?php
$err = isset($_GET['err']) ? $_GET['err'] : ''; // Check if 'err' is set in the URL
$err_msg = "";
if ($err != "") {
    switch($err) {
        case 0: $err_msg = "Incomplete form";
            break;
        case 1: $err_msg = "Passwords do not match";
            break;
        case 2: $err_msg = "Already registered or try a different username";
            break;
        default: $err_msg = "";
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Chatroom</title>
    <link rel="stylesheet" href="css/sign.css">
</head>
<body>
    <div class="container">
        <h2>Welcome to CHATROOM</h2>
        <p>Register to create an account</p>
        <form action="submit.php" method="POST">
            <input type="text" name="user" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="enroll" placeholder="Enrollment" required>
            <input type="password" name="pass" placeholder="Password" required>
            <input type="password" name="re-pass" placeholder="Re-enter Password" required>
            <button type="submit">Sign Up</button>
        </form>
        <?php if ($err_msg): ?>
            <p style="color: red;"><?php echo $err_msg; ?></p>
        <?php endif; ?>
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
</body>
</html>