<?php
session_start();
// For Live
// $servername = "localhost";
// $username = "ditstek";
// $password = "ditstekdb@9876";
// $dbname = "ditstekdb";

// For Local
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ditstekdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>