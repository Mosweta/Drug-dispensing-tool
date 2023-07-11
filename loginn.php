<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial scale=1.0" />
  <meta name="keywords" content="HTML,CSS,JS" />
  <meta name="description" content="..." />
  <title>SunCityHospital</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <header>
    <h2 class="logo">
      <img src="images/SCH 2.jpg" alt="S.C.H logo" width="100px" height="80px" border-radius="50px" 6px; />
    </h2>
    <nav class="navigation">
      <a href="index.html">Home</a>
      <a href="about.html">About</a>
      <a href="services.html">Services</a>
      <a href="contact.html">Contact</a>
      <a href="logpage.php">Login</a>

    </nav>
  </header>
  <div class="wrapper">
    <span class="icon-close"><ion-icon name="close"></ion-icon></span>
    <div class="form-box Login">
      <h2>Login</h2>
      <form action="#">
        <div class="input-box">
          <span>
            <div class="icon"><ion-icon name="mail"></ion-icon></ion-icon></div>
          </span>
          <input type="email" required />
          <label>Email</label>
        </div>
        <div class="input-box">
          <span>
            <div class="icon">
              <ion-icon name="lock-closed"></ion-icon>
            </div>
          </span>
          <input type="password" required />
          <label>Password</label>
        </div>
        <div class="remember-forgot">
          <label><input type="checkbox">
            Remember me</label>
          <a href="#">Forgot Password?</a>
        </div>
        <div class="login-register">
          <p>Don't have an account?
            <a href="register.html" class="register-link">Register</a>
          </p>
        </div>
        <button type="submit" class="btn">Login</button>

    </div>
    </form>
  </div>
  </div>
  </form>
  </div>
  </div>
  <script src="script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!-- login.html -->
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
