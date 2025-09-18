<?php
include "db_connect.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $role = "user";

    $sql = "INSERT INTO users(name, email, password, role) VALUES(?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $password, $role);

    if($stmt->execute()){
        $message = "Registration successful! You can now <a href = 'login.php'>login</a>" ;
    }else{
        $message = "Error: " . $stmt->error;   }
}
// store feedback
session_start();
$_SESSION["message"] = $message;
header("Location: register.php");
exit();
