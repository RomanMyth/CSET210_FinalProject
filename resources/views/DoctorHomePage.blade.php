<?php
session_start();

// Initialize the $loginName variable with an empty string as a default value
$loginName = '';

// Check if the 'email' key exists in the $_SESSION array before using it
if (isset($_SESSION['email'])) {
    $loginName = $_SESSION['email']; // Fetch the login name from the session
} else {
    echo 'Email key does not exist in the session.';
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Doctor Home</title>
</head>

<body>
    <h2>Welcome, <?php echo $loginName; ?></h2>
    <p>Doctor Home Page Content</p>
    <button onclick="location.href='patient_page.php'">Go to Patient Page</button>
    <button onclick="location.href='roster_page.php'">Go to Roster Page</button>
</body>

</html>
