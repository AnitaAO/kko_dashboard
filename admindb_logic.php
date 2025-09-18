<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}
echo "<h1>Welcome Admin, " . $_SESSION['name'] . "!</h1>";
echo "<a href='logout.php'>Logout</a>";
