<?php
require('includes/config.php'); // Ensure this contains a valid DB connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = trim($_POST['user']);
    $enroll = trim($_POST['enroll']);
    $pass = $_POST['pass'];
    $re_pass = $_POST['re-pass'];

    if (empty($user) || empty($pass) || empty($re_pass) || empty($enroll)) {
        header('location: sign.php?err=0');
        exit();
    }

    if ($pass !== $re_pass) {
        header('location: sign.php?err=1');
        exit();
    }

    // Database connection
    $conn = new mysqli("localhost", "root", "", "chatroom");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if user or enrollment already exists
    $stmt = $conn->prepare("SELECT 1 FROM stud_data WHERE usr_name = ? OR usr_roll = ?");
    $stmt->bind_param("ss", $user, $enroll);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        header('location: sign.php?err=2');
        exit();
    }

    $stmt->close();

    // Secure password hashing
    $hashed_pass = password_hash($pass, PASSWORD_BCRYPT);

    // Insert new user
    $stmt = $conn->prepare("INSERT INTO stud_data (usr_name, usr_roll, usr_pass) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $user, $enroll, $hashed_pass);

    if ($stmt->execute()) {
        header('location: index.php'); // Redirect to login page
        exit();
    } else {
        echo "Error: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>