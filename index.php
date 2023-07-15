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
        <a href="#"><?php echo "    Welcome," ;echo" ";

                    echo $_SESSION["useruid"]; ?></a>
                    <img class="navLogin" src="images/myphoto2.jpg" alt="my name" width="50px" height="50px" border-radius="50px" 6px;>
                    
        <button class="btnLogin-popup"><a href="includes/logout.inc.php">Logout</a></button>
        
      <?php
      } else {
      ?>
        <a href=" signup.php">Signup</a>
        <button class="btnLogin-popup" onclick="redirectToLoginpage()">Login</button>
      <script>
        function redirectToLoginpage() {
          window.location.href = "logpage.php";}
      <?php
      }
      ?>
      
        
      </script>
    </nav>
  </header>
  <section class="home">
  <div class="content"><h1>Sun City Hospital Healthcare</h1>
<p>Welcome to Sun City Hospital healthcare management system <br>
This is best place to access quality healthcare at the palm of your hands <br>
sign up now to find out</p>
<button class="btn_cta"> <a href="signup.php">Sign up</a></button>
 
</div>
</section>
<section class="about">
  <div class="content"><h1>About Us</h1>
<p>We are a healthcare provider system who put our users needs as our first <br>
priority. In our system we have put into consideration various stakeholders <br>
Instead of only focusing on doctors and administrators, <br>
we also focus on patients.They can now even book appointments.</p>
<button class="btn_cta"> <a href="services.php">Login</a></button>
</div>
</section>
<section class="services">
  <div class="content"><h1>Our Services</h1>
<p>We as a provider care for all that is why through our system <br>  the users can do a whole range of differnt things. <br>
book appointments, register new users,view details <br>
write prescriptions among others</p>
<button class="btn_cta"> <a href="signup.php">Sign up</a></button>
</div>
</section>
<section class="Contact">
  <div class="content"><h1>Contact Us</h1>
<p>You can contact us via the number:0200345786 <br>
or you can find us via the email: suncity@gmail.com</p>
<button class="btn_cta"> <a href="signup.php">Sign up</a></button>
</div>
</section>

<video width="400" height="400" autoplay>
  <source src="myvideo.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>
</body>

</html>