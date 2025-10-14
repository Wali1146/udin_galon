<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $file_name = $_FILES['upload_file']['name'];
    $file_type = $_FILES['upload_file']['type'];
    $file_size = $_FILES['upload_file']['size'];
    $file_tmp_name = $_FILES['upload_file']['tmp_name'];
    $file_error = $_FILES['upload_file']['error'];
    //$destination_path = getcwd().DIRECTORY_SEPARATOR;
    $file_move = __DIR__ . "/file/" . basename($file_name);
    move_uploaded_file($file_tmp_name, $file_move);
    if($file_move){
        echo "File berhasil diupload";
    } else {
        echo "File gagal diupload";
    }
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
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){?>
    <h1>Upload file</h1>
    <table>
        <tr>
            <td>File name</td>
            <td> : <?= $file_name; ?></td>
        </tr>
        <tr>
            <td>File type</td>
            <td> : <?= $file_type; ?></td>
        </tr>
        <tr>
            <td>File size</td>
            <td> : <?= $file_size; ?></td>
        </tr>
        <tr>
            <td>File tmp name</td>
            <td> : <?= $file_tmp_name; ?></td>
        </tr>
        <tr>
            <td>File error</td>
            <td> : <?= $file_error; ?></td>
        </tr>
        <tr>
            <td>File move</td>
            <td> : <?= $file_move; ?></td>
        </tr>
        <tr>
            <td>Gambar</td>
            <img src='file/<?= $file_name ?>' alt="gambar">
        </tr>
    </table>
    <?php } ?>
    <h1>Form Upload</h1>
    <form action="1.php" method="POST" enctype="multipart/form-data">
        <label for="">File : 
            <input type="file" name="upload_file" id="">
        </label>
        <input type="submit" value="Upload">
    </form>
</html>