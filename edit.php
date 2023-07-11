<?php
session_start();

// Check if the user is an administrator (replace with your own logic)
if (!isAdmin($_SESSION["username"])) {
    header("Location: welcome.php"); // Redirect to the welcome page if not an admin
    exit();
}

// Display the edit form or process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle the form submission and update the user account (replace with your own logic)
    $userSSN = $_POST["userId"];
    $newUsername = $_POST["newUsername"];
    $newPassword = $_POST["newPassword"];
    
    // Update the user account in the database or perform any other necessary actions
    updateUser($userSSN, $newUsername, $newPassword);
    
    header("Location: edit.php"); // Redirect to the edit page after successful update
    exit();
}

// Function to check if a user is an administrator (replace with your own logic)
function isAdmin($username) {
    // Add your logic to determine if the user is an administrator
    // For demonstration purposes, let's assume the user is not an admin if the username is "guest"
    // Replace this condition with your own logic based on your application's requirements
    
    if ($username === 'guest') {
        return false;
    } else {
        return true;
    }
}
?>



