<?php
$SERVERNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "";

$conn = mysqli_connect($SERVERNAME, $USERNAME, $PASSWORD,);
if(!$conn->connect_error){
    echo "Connected successfully";
} else {
    die("Connection failed: " . $conn->connect_error);
} 