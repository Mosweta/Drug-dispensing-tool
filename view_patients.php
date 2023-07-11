<?php
require_once("Connection.php");
$sql = "SELECT * FROM drug_dispensing";
$results = $conn->query($sql)
print_r($results);
?>
