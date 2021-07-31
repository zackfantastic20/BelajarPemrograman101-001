<?php
$nama = "Jacky";
$usia = 18;
$beratBadan = 55.7;
$isVaksinate = true; //false
$daftarBelanja = [];

if ($usia <= 18) {
    $isVaksinate = false;
}
// var_dump($isVaksinate);
print_r ("<br>Variabel nama bertipe data: " . gettype($nama) . ", bervalue: $nama<br>");
print_r ("Variabel usia bertipe data: " . gettype($usia) . ", bervalue: $usia<br>");
print_r ("Variabel beratBadan bertipe data: " . gettype($beratBadan) . ", bervalue: $beratBadan<br>");
print_r ("Variabel isVaksinate bertipe data: " . gettype($isVaksinate) . ", bervalue: $isVaksinate<br>");
echo sprintf('%.3f', $beratBadan);
