<?php
session_start();

// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$database = "group11";

// Establish database connection
$connect = mysqli_connect($host, $username, $password, $database);

// Check if the request contains JSON data
$postData = file_get_contents("php://input");
$selectedCourses = json_decode($postData, true);

if ($selectedCourses && is_array($selectedCourses)) {
    foreach ($selectedCourses as $course) {
        $code = mysqli_real_escape_string($connect, $course['code']);
        $title = mysqli_real_escape_string($connect, $course['title']);
        $unit = (int)$course['unit'];

        // Insert selected course into the database
        $query = "INSERT INTO selected_courses (course_code, course_title, credit_unit) VALUES ('$code', '$title', $unit)";
        $result = mysqli_query($connect, $query);

        if (!$result) {
            echo "Error inserting course: " . mysqli_error($connect);
            exit;
        }
    }

    // Respond with success status (HTTP 200)
    http_response_code(200);
    echo "Selected courses submitted successfully.";
} else {
    // Respond with error status (HTTP 400)
    http_response_code(400);
    echo "Invalid request data.";
}
?>
