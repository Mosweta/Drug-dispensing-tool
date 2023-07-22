<?php
session_start();
require 'connection.php';

if(isset($_POST['delete_drug']))
{
    $drugid = mysqli_real_escape_string($con, $_POST['delete_drug']);

    $query = "DELETE FROM drug WHERE Drug_id='$drugid' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Drug Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Drug Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_drug']))
{

    $tradename = mysqli_real_escape_string($con, $_POST['tradename']);
    $compName = mysqli_real_escape_string($con, $_POST['compName']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $quantity = mysqli_real_escape_string($con, $_POST['quantity']);

    $query = "UPDATE drug SET TradeName=$tradename, CompName='$compName', price='$price', quantity='$quantity' WHERE Drug_id='$drugid' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "DrugUpdated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Drug Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_drug']))
{
    $drugid = mysqli_real_escape_string($con, $_POST['drugid']);
    $tradename = mysqli_real_escape_string($con, $_POST['tradename']);
    $compName = mysqli_real_escape_string($con, $_POST['compName']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $quantity = mysqli_real_escape_string($con, $_POST['quantity']);
    

    $query = "INSERT INTO drug (TradeName,CompName,price,quantity) VALUES ('$tradename', '$compName','$price','$quantity')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Drug Created Successfully";
        header("Location: create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Drug Not Created";
        header("Location: create.php");
        exit(0);
    }
}
if (isset($_SESSION["submit"])) { // Search for patient SSN
$patient_ssn = $_POST['patient_search']; // Assuming you're retrieving the patient SSN from a form

// Prepare and execute the query
$stmt = $con->prepare("SELECT * FROM prescription WHERE presc_id=?");
$stmt->bind_param("i", $patient_ssn);
$stmt->execute();
$result = $stmt->get_result();

// Display the prescription(s)
if ($result->num_rows > 0) {
 while ($row = $result->fetch_assoc()) {
     echo "Prescription ID: " . $row["presc_id"] . "<br>";
     echo "Tradename: " . $row["TradeName"] . "<br>";
     echo "Patient ssn: " . $row["patient_SSN"] . "<br>";
     echo "Quantity: " . $row["Quantity"] . "<br>";
     echo "Date: " . $row["Presc_Date"] . "<br>";
     echo "Dosage: " . $row["Dosage"] . "<br>";
     echo "Comment: " . $row["comment"] . "<br>";
     // Display other prescription details as needed
     echo "<br>";
 }
} else {
 echo "No prescriptions found for the given patient SSN.";
}}

// Close the database connection
$con->close();
