<?php
//variabel_dasar.php
//Tujuan: Menmperkenalkan varibel & operator

$nama = "Farid"; //string
$umur = 19; //integer
$tinggi = 1.70;  //float
$menikah = false; //boolean

echo "Nama: $nama <br>";
echo "Umur: $umur <br>";
echo "Tinggi: $tinggi <br>";
echo "Menikah: " . ($menikah ? "Ya" : "Tidak") . "<br>";


//operator aritmatika
$a = 10;
$b = 20;
echo "<hr>";
echo "a + b = " . ($a + $b) . "<br>";
echo "a - b = " . ($a - $b) . "<br>";
echo "a * b = " . ($a * $b) . "<br>";
echo "a / b = " . ($a / $b) . "<br>";
echo "a % b = " . ($a % $b) . "<br>";

//Live Server gak bisa jalanin PHP.
//Harus lewat http://localhost:8000/... atau bikin index.php sebagai pintu masuk supaya gak ketik manual terus.jadi kalau mau buka file ini tulis aja http://localhost:8000/variabel_dasar.php
?>