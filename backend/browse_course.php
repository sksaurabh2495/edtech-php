<?php
// Include database connection
include 'db_connect.php';

// Retrieve courses from database
$sql = "SELECT * FROM courses";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $courses = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $courses[] = $row;
    }
    echo json_encode($courses);
} else {
    echo json_encode(array('message' => 'No courses found'));
}

// Close database connection
mysqli_close($conn);
?>
