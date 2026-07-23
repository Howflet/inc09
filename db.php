<?php
$host = "localhost";
$user = "hfletcher8";
$pass = "hfletcher8";
$db = "hfletcher8";
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("DB Error: " . $conn->connect_error);
}
?>