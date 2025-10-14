<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="user">User : </label>
        <input type="text" name="user" id="user"><br>
        <label for="password">Password : </label>
        <input type="password" name="password" id="password"><br>
        <label for="role">Role : </label>
        <select name="role" id="role">
            <option value="superadmin">Super Admin</option>
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select><br>
        <button type="submit" name="submit">Login</button>
    </form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $role = $_POST["role"];

    if($role == "superadmin"){
        header("Location: superadmin.php");
    } elseif($role == "user"){
        header("Location: user.php");
    } else {
        echo "Anda bukan super admin atau user";
    }
}