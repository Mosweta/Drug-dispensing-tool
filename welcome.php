<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["username"])) {
    header("Location: login.php"); // Redirect to the login page if not logged in
    exit();
}

// Retrieve the user credentials from the session
$username = $_SESSION["username"];

// Display the welcome message
echo "Welcome, $username!";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
</head>
<body>
    <h1>Welcome Page</h1>
    <p>This is the welcome page for the logged-in user.</p>
    <p>You can add your content here.</p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>

