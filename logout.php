<?php
session_start();

// Check if the user is logged in, otherwise redirect to the login page
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}