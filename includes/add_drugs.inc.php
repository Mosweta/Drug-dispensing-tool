<?php
if (isset($_POST["submit"])) {
    //Takes the data
    $tradeName = $_POST["tradename"];
    $compName = $_POST["comName"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];


    // instantiate prescriptionContr class
    include "../classes/Dbh.classes.php";
    include "../classes/drug.classes.php";
    include "../classes/drug-contr.classes.php";
    $addDrug = new Drugcontr($tradeName, $compName, $price, $quantity);

    // Running error handlers and user signup

    $addDrug->setDrug();
    // Going back to front page
    header("location: ../index.php?error=none");
}
