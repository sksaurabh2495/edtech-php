<?php
// Include database connection
include 'db_connect.php';

// Get POST data
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// Insert user into database
$sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
if (mysqli_query($conn, $sql)) {
    echo json_encode(array('message' => 'User registered successfully'));
} else {
    echo json_encode(array('message' => 'Error registering user: ' . mysqli_error($conn)));
}

// Close database connection
mysqli_close($conn);
?>
