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
      <a href="index.php">Home</a>
      <a href="about.php">About</a>
      <a href="services.php">Services</a>
      <a href="contact.php">Contact</a>
      <a href="login.php">Login</a>

    </nav>
  </header>
  <h2>Login</h2>
  <form class="" action="includes/signup.inc.php" method="post" autocomplete="off">
    <label for="username">Username : </label>
    <input type="text" name="uid" id="uid" required value=""> <br>
    <label for="email">Email : </label>
    <input type="email" name="email" id="email" required value=""> <br>
    <label for="password">Password : </label>
    <input type="text" name="pwd" id="pwd" required value=""> <br>
    <label for="passwordrepeat">Password Repeat : </label>
    <input type="password" name="pwdrepeat" id="pwdrepeat" required value=""> <br>
    <button type="submit" name="submit">Login</button>
  </form>
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