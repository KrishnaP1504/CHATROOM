<?php
$dsn = "mysql:host=localhost;dbname=chatroom;charset=utf8mb4";
$username = "root"; // Change if needed
$password = ""; // Change if needed

try {
    $con = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
