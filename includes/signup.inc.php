<?php
if (isset($_POST["submit"])) {
    //Takes the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];


    // instantiate SignupContr class
    include "../classes/Dbh.classes.php";
    include "../classes/Signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new Signupcontr($uid, $pwd, $pwdRepeat, $email);

    // Running error handlers and user signup

    $signup->signupUser();
    // Going back to front page
    header("location: ../index.php?error=none");
}
