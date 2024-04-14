<?php
// Include database connection
include 'db_connect.php';

// Get POST data
$userId = $_POST['userId'];
$courseId = $_POST['courseId'];

// Enroll user in course
$sql = "INSERT INTO enrollments (user_id, course_id) VALUES ('$userId', '$courseId')";
if (mysqli_query($conn, $sql)) {
    echo json_encode(array('message' => 'User enrolled in course successfully'));
} else {
    echo json_encode(array('message' => 'Error enrolling user in course: ' . mysqli_error($conn)));
}

// Close database connection
mysqli_close($conn);
?>
