<?php
require_once("Welcome.php");
require_once("Connecting.php"); // Include your database connection file

// Handle login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if username and password are valid
    if (isValidUser($username, $password, $pdo)) {
        session_start();
        $_SESSION["username"] = $username;
        header("Location: welcome.php"); // Redirect to the welcome page after successful login
        exit();
    } else {
        // Invalid credentials, show an error message
        echo "Invalid username or password.";
    }
}

// Function to validate the user's credentials (replace with your actual database query and validation logic)
function isValidUser($username, $password, $pdo) {
    // Replace this with your actual database query and validation logic
    $sql = "SELECT * FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // User found, compare the provided password with the stored password hash
        $storedPasswordHash = $user['password']; // Assuming the password is stored as a hash in the database
        if (password_verify($password, $storedPasswordHash)) {
            return true; // Credentials are valid
        }
    }

    return false; // Credentials are invalid
}
?>
