<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial scale=1.0" />
    <meta name="keywords" content="HTML,JS,PHP,CSS" />
    <meta name="description" content="..." />
    <title>SunCityHospital</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <header>
        <h2 class="logo">
            <img src="images/SCH 2.jpg" alt="S.C.H logo" width="100px" height="80px" border-radius="50px" 6px; />
        </h2>
        <nav class="navigation">
            <a href="index.php">Home</a></li>
            <a href="about.php">About</a>
            <a href="services.php">Services</a>
            <a href="contact.php">Contact</a>
        </nav>
        <nav class="navigation">

            <a href="signup.php">Signup</a>
            <button class="btnLogin-popup">Login</button>
        </nav>
    </header>
    </div>
    <div class="container">


        <div class="form-box.login">


            <h2>Register</h2>
            <form action="includes/add_drugs.inc.php" method="post" autocomplete="off">
                <div class="input-box">
                    <span>
                        <div class="icon"><ion-icon name="person-circle"></ion-icon></div>
                    </span>

                    <input type="text" name="tradename" id="tradename" required value="">
                    <label>TradeName</label>
                </div>
                <div class="input-box">
                    <span>
                        <div class="icon"><ion-icon name="mail"></ion-icon></div>
                    </span>

                    <input type="text" name="comName" id="comname" required value="">
                    <label>PharmaceuticalCoName</label>
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
                    <input type="text" name="price" id="price" required value="">
                    <label>Price</label>

                </div>

                <button class="btn" type="submit" name="submit">Sign Up</button>
            </form>
        </div>

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