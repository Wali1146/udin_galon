<?php
session_start();
if(!isset($_SESSION['unique_id']) || $_SESSION['role'] != 'admin'){
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Anda admin</h1>
</body>
</html>