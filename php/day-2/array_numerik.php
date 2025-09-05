<?php
$buah = array("Mangga", "Jeruk", "Apel");       //Ini membuat array dengan indeks otomatis mulai dari 0.

echo $buah[0];
echo "<br>";
echo $buah[1];
echo "<br>";
echo $buah[2];
echo "<br>";

//loop
foreach ($buah as $b) {     //as → mengambil setiap elemen array dan menyimpan ke $b satu per satu.
    echo "Buah: $b <br>";
}