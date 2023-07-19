<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="HTML,CSS,JS" />
  <meta name="description" content="..." />
  <link rel="stylesheet" href="style.css" />
    <title>Prescribe</title>
   
<body>
<header>
    <h2 class="logo">
      <img src="images/SCH 2.jpg" alt="S.C.H logo" />
    </h2>
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
</head>
 <h2>Prescribe</h2>
            <form action="includes/prescription.inc.php" method="post" autocomplete="off">
                <div class="input-box">
                    <span>
                        <div class="icon"><ion-icon name="person-circle"></ion-icon></div>
                    </span>

                    <input type="text" name="dosage" id="dosage" required value="">
                    <label>Dosage</label>
                </div>
                <div class="input-box">
                    <span>
                        <div class="icon"><ion-icon name="mail"></ion-icon></div>
                    </span>

                    <input type="date" name="presc_Date" id="Presc_Date" required value="">
                    <label>Presc_Date</label>
                </div>
                <div class="input-box">
                    <span>
                        <div class="icon">
                            <ion-icon name="lock-closed"></ion-icon>
                        </div>
                    </span>
                    <input type="text" name="quantity" id="quantity" required value="">
                    <label>Quantity</label>
                </div>
                <div class="input-box">
                    <span>
                        <div class="icon">
                            <ion-icon name="lock-closed"></ion-icon>
                        </div>
                    </span>
                    <input type="text" name="patient_SSN" id="patient_SSN" required value="">
                    <label>patient_SSN</label>
                    
                </div>
                <div class="input-box">
                <textarea name="comment" rows="2" cols="20">comment</textarea>
                  
                </div>
                <div class="input-box">
                  <select name="drug" required>
                   <option value="Drug_1">Drug1</option>
                    <option value="Drug_2">Drug2</option>
                    <option value="Drug_3">Drug3</option>
                   </select>
                </div>
              
                <button class="btn" type="submit" name="submit">Submit</button>
            </form>
        </div>

    </div>   
</body>
</html>