<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "smokebar";

// Create connection
$conn = new mysqli($hostname,$username,$password,$database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
