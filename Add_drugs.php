<?php
require_once("Connection.php");

$drug_name = "Hedex";
$drug_price = 50;
$drug_manufacturer ="Strath";

$sql = "INSERT INTO drugs (drug_name, drug_price, drug_manufacturer)
VALUES ('$drug_name', '$drug_price' , '$drug_manufacturer')";
if ($conn->query($sql) === TRUE){
 	echo "New record created successfully";

 } else {
 	echo"Error: " .$sql ."<br>" .$conn->error;
 }

 $conn->close();
 ?>
