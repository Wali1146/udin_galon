<?php
session_start();
if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
}
echo "Selamat datang, ".$_SESSION['name'].". Anda adalah ".$_SESSION['role'];
?>
<br><a href="logout.php">Log out</a>