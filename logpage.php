<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial scale=1.0" />
    <meta name="keywords" content="HTML,JS" />
    <meta name="description" content="..." />
    <title>SunCityHospital</title>
    <link rel="stylesheet" href="" />
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
            <button class="btnLogin-popup">Login</button>
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
