<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
    <?php
    // Simulasi data user
    $user = "admin";
    $user = "user";

    // Struktur Kontrol
    if ($user == "admin"){
        echo "pergi ke halaman <a href='admin.php'>admin</a>";
    } elseif ($user == "user"){
        echo "pergi ke halaman <a href='user.php'>user</a>";
    } else {
        echo "<h1>Anda bukan admin atau user</h1>";
    }
    ?>
</body>
</html>