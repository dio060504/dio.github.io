<?php

// Konfigurasi Koneksi Database
$host = "localhost";
$username = "root";
$password = ""; 
$database = "db_contoh";

// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

$base_url = "http://localhost/ipc/"; 

?>
