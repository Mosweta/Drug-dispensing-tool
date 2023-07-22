<?php
if (isset($_POST["submit"])) {
    //Takes the data
    $ssn = $_POST["ssn"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $specialty = $_POST["specialty"];
    $experience = $_POST["experience"];
    $phone = $_POST["phone"];
    $physician = $_POST["physician"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    // instantiate SignupContr class
    include "../classes/Dbh.classes.php";
    include "../classes/Signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new Signupcontr($ssn, $name, $email, $dob, $gender, $phone, $physician, $pwd, $pwdRepeat);

    // Running error handlers and user signup

    $signup->signupUser();
    // Going back to front page
    header("location: ../index.php?error=none");
}
