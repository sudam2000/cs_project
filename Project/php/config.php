<?php
$hostname = "localhost"; 
$username = "root"; 
$password = "";
$database = "project1"; 

$con = new mysqli($hostname, $username, $password, $database);

if ($con->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>