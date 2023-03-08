<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginy";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO osoby (imie, email, haslo) VALUES ('$_POST[username]',
  '$_POST[email]', '$_POST[password]')";
if ($conn->query($sql) === TRUE) {
  echo
    "Dodano pomyslnie";
  header("location: index.html");
} else {
  echo "Error: " .
    $sql . "<br/>" . $conn->error;
}
$conn->close(); ?>
