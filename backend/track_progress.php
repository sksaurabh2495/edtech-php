<?php
// Include database connection
include 'db_connect.php';

// Get POST data
$userId = $_POST['userId'];
$courseId = $_POST['courseId'];

// Retrieve user's progress in the course
$sql = "SELECT * FROM progress WHERE user_id='$userId' AND course_id='$courseId'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $progress = mysqli_fetch_assoc($result);
    echo json_encode($progress);
} else {
    echo json_encode(array('message' => 'No progress found for the user in this course'));
}

// Close database connection
mysqli_close($conn);
?>
