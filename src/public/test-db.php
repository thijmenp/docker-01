<?php
$servername = "mysql";
$username = "user";
$password = "secret";

try {
// Create connection
$conn = new PDO("mysql:host=$servername;dbname=MyDb", $username, $password);

echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>