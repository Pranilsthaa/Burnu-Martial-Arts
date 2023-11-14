<?php
session_start(); // Start the session

include 'db.php';

// User input from the login form
$enteredEmail = $_GET['email'];
$enteredPassword = $_GET['password'];

$sql = "SELECT * FROM userDetail WHERE email = '$enteredEmail' AND password = '$enteredPassword'";
$result = mysqli_query($con, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    // Login successful
    $row = mysqli_fetch_assoc($result);
    $_SESSION['user_id'] = $row['ID']; // Set the user's ID in the session
    header('Location: dashboard.php'); // Redirect to the dashboard
    exit();
} else {
    // Login unsuccessful
    echo '<script>alert("Login unsuccessful Enter Again");</script>';
    echo '<script>window.location.href = "login.html";</script>';// Redirect back to the login page
    exit();
}
?>
