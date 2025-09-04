<?php
//kalkulator_variabel.php
//Tujuan: kalkulator tambah/kurang menggunakan variabel

$angka1 = 25;
$angka2 = 7;
$operasi = "tambah"; //opsi: tambah/kurang

if ($operasi == "tambah") {
    $hasil = $angka1 + $angka2;
    echo "Hasil: $angka1 + $angka2 = $hasil";   //Contoh output: Hasil: 25 + 7 = 32
} elseif ($operasi == "kurang") {
    $hasil = $angka1 - $angka2;
    echo "Hasil: $angka1 - $angka2 = $hasil";   //Contoh output: Hasil: 25 - 7 = 18
}else {
    echo "Operasi tidak valid, Gunakan opsi: tambah/kurang";
}

//✨ Intinya:
//File ini adalah mini kalkulator dengan 2 angka.
//Kamu bisa atur operasi lewat variabel $operasi.
//Pakai percabangan if-elseif-else untuk memilih logika.

?>
