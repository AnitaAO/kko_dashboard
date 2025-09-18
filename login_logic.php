<?php
session_start();
include "db_connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        // verify password
        if (password_verify($password, $row["password"])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['name'] = $row['name'];

            // redirect based on role
            if ($row['role'] === 'admin') {
                header("Location: admindb_logic.php");
            } else {
                header("Location: userdb_logic.php");
            }
            exit();
        } else {
            $_SESSION['message'] = "Invalid password.";
            header("Location: login.php");
            exit();
        }
    } else {
        $_SESSION['message'] = "No user found with that email.";
        header("Location: login.php");
        exit();
    }
}

