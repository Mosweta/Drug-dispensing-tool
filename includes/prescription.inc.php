<?php
if (isset($_POST["submit"])) {
    //Takes the data
    $dosage = $_POST["dosage"];
    $presc_Date = $_POST["presc_Date"];
    $quantity = $_POST["quantity"];
    $ssn = $_POST["patient_SSN"];
    $comment = $_POST["comment"];
    $drug = $_POST["drug"];


    // instantiate prescriptionContr class
    include "../classes/Dbh.classes.php";
    include "../classes/prescription.classes.php";
    include "../classes/prescription-contr-classes.php";
    $prescribe = new Prescriptioncontr($dosage, $presc_Date, $quantity, $ssn, $comment, $drug);

    // Running error handlers and user signup

    $prescribe->prescribe();
    // Going back to front page
    header("location: ../index.php?error=none");
}
