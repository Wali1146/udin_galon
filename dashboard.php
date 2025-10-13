<?php 
session_start();
if(!isset($_SESSION["role"])){
    header("Location: login.php");
    exit;
}
$role = $_SESSION["role"];
echo "Selamat datang, " . $_SESSION['user_login'] . "!";
?>
<br><a href="logout.php">Logout</a>