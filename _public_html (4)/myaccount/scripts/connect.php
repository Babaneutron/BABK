<?php
$servername = "localhost";
$username = "u482608841_bank0147";
$password = "Nsp0147@";
$dbname = "u482608841_bank01";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);

}

?>