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
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'poppins', sans-serif;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px;
    }

    .logo img {
      width: 60px;
      height: 60px;
      border-radius: 30px;
    }

    .navigation a {
      position: relative;
      font-size: 1.1em;
      color: #020101;
      text-decoration: none;
      font-weight: 500;
      margin-left: 40px;
    }

    .navigation a::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: -6px;
      width: 100%;
      height: 3px;
      background: #fff;
      text-decoration: none;
      border-radius: 5px;
      transform: scaleX(0);
      transition: transform .5s;
    }

    .navigation a:hover::after {
      transform-origin: left;
      transform: scaleX(1);
    }

    .navigation .btnLogin-popup {
      width: 130px;
      height: 50px;
      background: transparent;
      border: 2px solid #fff;
      outline: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 1.1em;
      color: #0a0606;
      font-weight: 500;
      margin-left: 40px;
      transition: .5s;
    }

    .navigation .btnLogin-popup:hover {
      background: #fff;
      color: #162938;
    }
   
  </style>
</head>

<body>
  <header>
    <h2 class="logo">
      <img src="images/SCH 2.jpg" alt="S.C.H logo" />
    </h2>
    <nav class="navigation">
      <a href="index.php">Home</a>
      <a href="about.php">About</a>
      <a href="services.php">Services</a>
      <a href="contact.php">Contact</a>
    </nav>
    <nav class="navigation">
      <?php
      if (isset($_SESSION["userid"])) {
      ?>
        <a href="#">
          <?php echo "    Welcome   ";
          echo $_SESSION["useruid"]; ?>
        </a>
        <a href="includes/logout.inc.php">Logout</a>
      <?php
      } else {
      ?>
        <a href="signup.php">Signup</a>
      <?php
      }
      ?>
      <button onclick="redirectToLoginPage()">Login</button>
      <script>
        function redirectToLoginPage() {
          window.location.href = "logpage.php";
        }
      </script>
    </nav>
  </header>
</body>

</html>
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
  <style>
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      margin: 0;
      padding: 0;
      font-family: 'poppins', sans-serif;
    }
    section {
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 20px;
    }

    section h2 {
      font-size: 1.8em;
      margin-bottom: 20px;
    }

    section p {
      font-size: 1.2em;
      margin-bottom: 10px;
    }

    section ul {
      list-style: none;
      padding: 0;
      margin-bottom: 20px;
    }

    section li {
      background-color: #f5f5f5;
      border-radius: 5px;
      padding: 10px;
      margin-bottom: 10px;
    }

    section button {
      padding: 10px 20px;
      background-color: #162938;
      color: #fff;
      border: none;
      border-radius: 5px;
      font-size: 1em;
      margin-bottom: 20px;
      cursor: pointer;
    }

    footer {
      background-color: #162938;
      color: #fff;
      text-align: center;
      padding: 20px;
    }
  </style>
</head>

<body>
  <break>
  <section>
    
    <h1>WELCOME TO S.C.H WHERE THE PATIENTS HEALTHCARE IS PUT FIRST</h1>
    <p>WE BELIEVE WE ARE ONE OF THE BEST AND OUR PATIENTS SAY SO TOO:</p>
    <ul>
      <li>"The doctors and staff at SunCityHospital provided excellent care. I highly recommend their services." - Deo Moriasi </li>
      <li>"I had a great experience at SunCityHospital. The facilities are top-notch, and the staff is friendly and professional." - Owen Riri</li>
      <li>"The hospital offers high quality services, it is one of the best. " - Mark Ngeno</li>
      <li>"The hospital offers 24/7 healthcare services and is well equipped!." - Tom Ndemo</li>
    </ul>
    <button onclick="displayNewQuote()">Click for a New Quote</button>
    <p id="quote"></p>
    <script>
      function displayNewQuote() {
        document.getElementById("quote").innerHTML = "An apple a day keeps the doctor away.";
      }
    </script>
  </section>
    </break>
  <footer>
    <p>&copy; <?php echo date("12/7/2023"); ?> SUN CITY HOSPITAL. All rights reserved.</p>
  </footer>
</body>

</html>
