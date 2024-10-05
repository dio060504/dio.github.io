<?php
include('koneksi.php');

$username = $_POST ['username'];
$password = $_POST ['password'];

$sql = "INSERT INTO tabel_admin (username,password)
        VALUES ('$username','$password')";
    
    if ($conn->query($sql)=== TRUE){
        header("Location: index.html");
        exit();
    }
    else{
        echo"Data Error".$sql. "<br>" . $conn->error;
    }
    $conn->close();

    ?>