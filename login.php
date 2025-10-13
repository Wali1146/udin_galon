<?php
session_start();
if(isset($_SESSION['unique_id'])){
    if($_SESSION['role'] == 'superadmin'){
        header("location: superadmin.php");
    } elseif($_SESSION['role'] == 'admin'){
        header("location: admin.php");
    } elseif($_SESSION['role'] == 'user'){
        header("location: user.php");
    }
}
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Dummy user data for demonstration purposes
    $users = [
        ['unique_id' => 1, 'name' => 'superadmin', 'password' => 'superpass', 'role' => 'superadmin'],
        ['unique_id' => 2, 'name' => 'admin', 'password' => 'adminpass', 'role' => 'admin'],
        ['unique_id' => 3, 'name' => 'user', 'password' => 'userpass', 'role' => 'user'],
    ];

    foreach($users as $user){
        if($user['name'] === $name && $user['password'] === $password && $user['role'] === $role){
            $_SESSION['unique_id'] = $user['unique_id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['role'] = $user['role'];

            if($role == 'superadmin'){
                header("location: superadmin.php");
            } elseif($role == 'admin'){
                header("location: admin.php");
            } elseif($role == 'user'){
                header("location: user.php");
            }
            exit;
        }
    }
    echo "<script>alert('Nama, kata sandi, atau kedudukan salah!');</script>";
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
        <form action="" class="d-flex flex-column gap-3 w-50" method="POST">
            <label for="name">Nama : </label>
            <input type="text" name="name" id="name"><br>
            <label for="password">Kata sandi : </label>
            <input type="password" name="password" id="password"><br>
            <label for="role">Kedudukan</label>
            <select name="role" id="role">
                <option value="superadmin">Super admin</option>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select><br>
            <button type="submit" name="submit">Masuk</button>
        </form>
    </div>
</body>
</html>