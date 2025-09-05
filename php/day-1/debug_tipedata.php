<?php
//debug_tipedata.php
//Tujuan: Menunjukkan tipe data & debugging dengan var_dump()

$nama = "Farid";
$umur = 19;
$tinggi = 1.70;
$menikah = false;
$hobi = ["ngoding", "ngaji", "baca buku"];

var_dump($nama);  //var_dump($nama); → fungsi bawaan PHP untuk menampilkan tipe data dan nilainya.
echo "<br>";      //Contoh output: string(5) "Farid" . Artinya: tipe data string, panjang 5 karakter, isi "Farid".
var_dump($umur);
echo "<br>";      //Contoh output: int(19) . Artinya: tipe data integer, nilai 19.
var_dump($tinggi);
echo "<br>";      //Contoh output: float(1.7) . Artinya: tipe data float, nilai 1.7.
var_dump($menikah);
echo "<br>";      //Contoh output: bool(false) . Artinya: tipe data boolean, nilai false.
var_dump($hobi);
echo "<br>";      //Contoh output: array(3) { [0] => string(6) "ngoding" [1] => string(4) "ngaji" [2] => string(10) "baca buku" } . Artinya: array dengan 3 elemen. Setiap elemen punya indeks [0], [1], [2].