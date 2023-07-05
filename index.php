<?php
session_start();
?>
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
      <img src="images/SCH 2.jpg" alt="S.C.H logo" width="100px" height="100px" border-radius="50px" 6px; />
    </h2>
    <nav class="navigation">
      <a href="index.php">Home</a></li>
      <a href="about.php">About</a>
      <a href="services.php">Services</a>
      <a href="contact.php">Contact</a>
    </nav>
    <nav class="navigation">
      <?php
      if (isset($_SESSION["userid"])) {
      ?>
        <a href="#"><?php echo $_SESSION["useruid"]; ?></a>
        <a href="includes/logout.inc.php">Logout</a>
      <?php
      } else {
      ?>
        <a href=" signup.php">Signup</a>
        <button class="btnLogin-popup">Login</button>
      <?php
      }
      ?>
    </nav>
  </header>
</body>

</html>