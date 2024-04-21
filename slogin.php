<?php
session_start();

$host = "localhost";
$username = "root";
$password = "";
$database = "group11";

$connect = mysqli_connect($host, $username, $password, $database);

if (isset($_POST['matric-number'], $_POST['password'])) {
    $matricNumber = $_POST['matric-number'];
    $password = $_POST['password'];

    $query = "SELECT * FROM group11css418 WHERE STUDENT_ID = ?";
    $stmt = mysqli_prepare($connect, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $matricNumber);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && $row = mysqli_fetch_assoc($result)) {
            $dbPassword = $row['PASSWORD'];

            if ($password === $dbPassword) {
                $_SESSION['STUDENT_ID'] = $matricNumber;
                header('Location: dashboard.php'); // Redirect to dashboard page
                exit();
            } else {
                echo '<div class="alert alert-danger" role="alert">Invalid password.</div>';
            }
        } else {
            echo '<div class="alert alert-danger" role="alert">Invalid Student ID.</div>';
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">Database query error.</div>';
    }
}
?>
