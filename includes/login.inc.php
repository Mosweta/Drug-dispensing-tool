<?php
if (isset($_POST["submit"])) {
    //Takes the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];





    // instantiate SignupContr class
    include "../classes/Dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr-classes.php";
    $login = new Logincontr($uid, $pwd);

    // Running error handlers and user signup

    $login->loginUser();
    header("location: ../login-redirect.php?error=none");
}
