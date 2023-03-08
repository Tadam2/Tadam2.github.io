<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginy";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT imie FROM osoby WHERE email='$_POST[email]' AND haslo='$_POST[password]'";

$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $_SESSION['login'] ;
    echo "zalogowano";

} else {
    echo "Nie prawidłowy email lub haslo";
}

$conn->close();
?>