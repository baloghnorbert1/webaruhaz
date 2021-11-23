<?php
$servername = "localhost";
$username = "baloghnorbert";
$password = "kecske1669";
$dbname = "baloghnorbert";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>