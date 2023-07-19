<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "suncityhospital";
//create connection
$conn = mysqli_connect($servername, $username, $password,$database);

//check connection
if(!$conn){
	die("Connection failed:".mysqli_connect_error());
}
echo "WELCOME TO SUN CITY HOSPITAL.";
echo"<pre>";
    echo"WHERE YOUR HEALTH MATTERS TO US.";
    echo"</pre>";
