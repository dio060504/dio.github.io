<?php

//Ini adalah function/printah untuk menambah data pada tabel data glosarium
include('koneksi.php');

$kode = $_POST ['kode'];
$nama_bahan = $_POST ['nama_bahan'];
$sumber = $_POST ['sumber'];
$air = $_POST ['air'];
$energi = $_POST ['energi'];
$protein = $_POST ['protein'];
$lemak = $_POST ['lemak'];
$kh = $_POST ['kh'];
$serat = $_POST ['serat'];
$abu = $_POST ['abu'];
$kalsium = $_POST ['kalsium'];
$fosfor = $_POST ['fosfor'];
$besi = $_POST ['besi'];
$natrium = $_POST ['natrium'];
$kalium = $_POST ['kalium'];
$tembaga = $_POST ['tembaga'];
$seng = $_POST ['seng'];
$retinol = $_POST ['retinol'];
$b_kar = $_POST ['b_kar'];
$kar_total = $_POST ['kar_total'];
$thiamin = $_POST ['thiamin'];
$riboflavin = $_POST ['riboflavin'];
$niasin = $_POST ['niasin'];
$vit_c = $_POST ['vit_c'];
$bdd = $_POST ['bdd'];


$sql = "INSERT INTO tabel_data_kpi (kode,nama_bahan,sumber,air,energi,protein,lemak,kh,serat,abu,kalsium,fosfor,besi,natrium,kalium,tembaga,seng,retinol,b_kar,kar_total,thiamin,riboflavin,niasin,vit_c,bdd)
        VALUES ('$kode','$nama_bahan','$sumber','$air','$energi','$protein','$lemak','$kh','$serat','$abu','$kalsium','$fosfor','$besi','$natrium','$kalium','$tembaga','$seng','$retinol','$b_kar','$kar_total','$thiamin','$riboflavin','$niasin','$vit_c','$bdd')";

if ($conn->query($sql)=== TRUE){
    header("Location: dashboard.php");
    exit();
} else {
    echo "Data Error". $sql. "<br>" . $conn->error;
}

$conn->close();

?>