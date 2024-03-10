<?php 

$servername = "localhost";
$username = "root";
$password = ""; 

$database_name = "db_hms";


$conn = new mysqli($servername, $username, $password, $database_name);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo"Connected";

?>