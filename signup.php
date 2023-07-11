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
            <form action="includes/signup.inc.php" method="post" autocomplete="off">
                <div class="input-box">
                    <span>
                        <div class="icon"><ion-icon name="person-circle"></ion-icon></div>
                    </span>

                    <input type="username" name="uid" id="uid" required value="">
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span>
                        <div class="icon"><ion-icon name="mail"></ion-icon></div>
                    </span>

                    <input type="email" name="email" id="email" required value="">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span>
                        <div class="icon">
                            <ion-icon name="lock-closed"></ion-icon>
                        </div>
                    </span>
                    <input type="password" name="pwd" id="pwd" required value="">
                    <label>Password</label>
                </div>
                <div class="input-box">
                    <span>
                        <div class="icon">
                            <ion-icon name="lock-closed"></ion-icon>
                        </div>
                    </span>
                    <input type="password" name="pwdrepeat" id="pwdrepeat" required value="">
                    <label>Repeat Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">
                        Remember me</label>
                    <a href="passwordforgot.php">Forgot Password?</a>
                </div>
                <div class="login-register">
                    <p>Don't have an account?
                        <a href="signup.php" class="register-link">Signup</a>
                    </p>
                </div>
                <button type="submit" name="submit">Sign Up</button>
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