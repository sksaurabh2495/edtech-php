<?php
session_start(); // Start session for storing user session data

// Include database connection
include 'db_connect.php';

// Get POST data
$username = $_POST['username'];
$password = $_POST['password'];

// Validate user credentials
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Authentication successful
    $_SESSION['username'] = $username;
    echo json_encode(array('message' => 'Login successful'));
} else {
    // Authentication failed
    echo json_encode(array('message' => 'Invalid credentials'));
}

// Close database connection
mysqli_close($conn);
?>
