<?php 
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $role = $_POST["role"];

    if($role == "superadmin"){
        header("Location: superadmin.php");
    } elseif($role == "user"){
        header("Location: user.php");
    } elseif($role == "admin"){
        header("Location: admin.php");
    } else {
        echo "Anda bukan super admin, admin, atau user";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container d-flex flex-column align-items-center mt-5 p-5 border border-3 rounded-3 shadow-lg w-50 mx-auto gap-3">
        <h1>Selamat datang</h1>
        <form action="" method="post">
            <label for="name">Nama : </label>
            <input type="text" name="name" id="name"><br>
            <label for="password">Kata sandi : </label>
            <input type="password" name="password" id="password"><br>
            <label for="role">Kedudukan</label>
            <select name="role" id="role">
                <option value="superadmin">Super admin</option>
                <option value="user">Admin</option>
                <option value="admin">User</option>
            </select><br>
            <button type="submit" name="submit">Masuk</button>
        </form>
    </div>
</body>
</html>