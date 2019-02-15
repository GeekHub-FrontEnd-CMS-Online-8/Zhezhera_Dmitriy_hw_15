<?php
$servername = "localhost";
$database = "hw15-geekhub";
$username = "admin";
$password = "admin";

$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully <br>";
