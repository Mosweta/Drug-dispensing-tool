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
      <button class="btnLogin-popup">Login</button>
    </nav>
  </header>

  </div>
  </form>
  </div>
  <div class="wrapper">
    <span class="icon-close"><ion-icon name="close"></ion-icon></span>
    <div class="form-box Login">
      <h2>Doctor Registration</h2>
      <form action="includes/register.inc.php">
        <div class="input-box">
          <span>
            <div class="icon"><ion-icon name="key-outline"></ion-icon></div>
          </span>
          <input type="text" required />
          <label>SSN</label>
        </div>
        <div class="input-box">
          <span>
            <div class="icon"><ion-icon name="person-circle"></ion-icon></div>
          </span>
          <input type="date" required />
          <label>Name</label>
        </div>
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
              <ion-icon name="lock-closed"><ion-icon name="calendar"></ion-icon>
          </span>
          <input type="date" required />
          <label>DOB</label>
        </div>
        <div class="input-box">
          <span>
            <div class="icon">
              <ion-icon name="lock-closed"><ion-icon name="accessibility"></ion-icon>
          </span>
          <input type="text" required />
          <label>Gender</label>
        </div>
        <div class="input-box">
          <span>
            <div class="icon">
              <ion-icon name="lock-closed"><ion-icon name="call"></ion-icon>
          </span>
          <input type="text" required />
          <label>Phone</label>
        </div>
        <div class="input-box">
          <span>
            <div class="icon">
              <ion-icon name="lock-closed"><ion-icon name="medkit"></ion-icon>
          </span>
          <input type="text" required />
          <label>Pri-Physician</label>
        </div>
        <button type="submit" name="submit">Register</button>

      </form>
    </div>
  </div>
  <script src="script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>