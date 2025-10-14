<?php
session_start();
if(!isset($_SESSION['unique_id']) || $_SESSION['role'] != 'superadmin'){
    header("location: login.php");
}
echo "Selamat datang, ".$_SESSION['name'].". Anda adalah ".$_SESSION['role'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Anda super admin</h1>
    <a href="logout.php">Log out</a>
</body>
</html>