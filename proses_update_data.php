<?php

include "koneksi.php";

if($_SERVER["REQUEST_METHOD"]== "POST"){
   $id = $_POST['id'];
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

   $query = "UPDATE tabel_data_kpi SET kode='$kode', nama_bahan='$nama_bahan', sumber='$sumber', air='$air', energi='$energi', protein='$protein', lemak='$lemak', kh='$kh', serat='$serat', abu='$abu', kalsium='$kalsium', fosfor='$fosfor', besi='$besi', natrium='$natrium', kalium='$kalium', tembaga='$tembaga', seng='$seng', retinol='$retinol', b_kar='$b_kar', kar_total='$kar_total', thiamin='$thiamin', riboflavin='$riboflavin', niasin='$niasin', vit_c='$vit_c', bdd='$bdd' WHERE id_admin='$id'";
   $result = mysqli_query($conn, $query);

   if ($result){
      header("Location:dashboard.php");
      exit();
   } else {
      header("Location:dashboard.php");
      exit();
   }
}

?>