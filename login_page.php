<?php
require_once("Connecting.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the username and password are provided
    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Perform the login logic here
        // ...
        // Example: Check the username and password against the database

        // Redirect the user to the welcome page if the login is successful
        header("Location: welcome.php");
        exit();
    } else {
        // Display an error message if the username or password is empty
        $errorMessage = "Please enter both username and password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
</head>
<body>
  <h1>SUN CITY HOSPITAL</h1>
  <h2>Hospital login page</h2>
  <?php if (isset($errorMessage)) : ?>
    <p style="color: red;"><?php echo $errorMessage; ?></p>
  <?php endif; ?>
  <form action="login.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" value="Login">
  </form>
</body>
</html>
