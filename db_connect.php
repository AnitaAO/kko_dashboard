<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "kko_dashboard";

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error){
    die("Connection failed: " . $connect_error);
}
// echo "connected successfully"
