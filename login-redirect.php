<?php
session_start();
if (isset($_SESSION["userid"])) {
    echo $_SESSION["usertype"];

    $userType = $_SESSION["usertype"];

    // Perform login validation based on the user type
    if ($userType === "Admin") {
        // Admin login logic

        // file1.php

        header("Location: admin-view.php");
        exit;
    } elseif ($userType === "Doctor") {
        // Doctor login logic
        // Implement your doctor login validation here

        header("Location: prescription.php");
        exit;
    } elseif ($userType === "Patient") {
        // Patient login logic
        // Implement your patient login validation here
        header("Location: patient.php");
        exit;
    } elseif ($userType === "Pharmacist") {
        // Patient login logic
        // Implement your patient login validation here

        header("Location: display.php");
        exit;
    } else {
        // Invalid pharmacist credentials
        header("Location: index.php");
        exit;
    }
}
