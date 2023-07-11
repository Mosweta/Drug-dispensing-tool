<?php
	require_once("connection.php");

	$patient_name = "Joel";
$patient_ssn =103;

 $sql = "INSERT INTO patient (patient_name,patient_ssn)
 VALUES ('$patient_name','$patient_ssn')";

 if ($conn->query($sql) === TRUE){
 	echo "New record created successfully";

 } else {
 	echo"Error: " .$sql ."<br>" .$conn->error;
 }

 $conn->close();
 ?>




