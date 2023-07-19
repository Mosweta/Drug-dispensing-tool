<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "suncityhospital";

//create connection
$con = new mysqli($servername, $username, $password, $database);
//Check connection
if(!$con){
	die("Connection failed:".mysqli_connect_error());
}
echo "Connected successfully";
