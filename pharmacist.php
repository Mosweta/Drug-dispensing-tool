<?php
session_start();

// Check if the user is logged in as a pharmacist
if ($_SESSION["user_type"] !== "pharmacist") {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pharmacist Page</title>
</head>
<body>
    <h1>Pharmacist Page</h1>

    <h2>Welcome, Pharmacist!</h2>

    <!-- Display prescription details here -->

</body>
</html>
