<?php
$belanja = [        //Array Asosiatif (daftar belanja)
    "indomie" => 20000,     //Key = nama barang (indomie, susu, telur, gula). Value = harga barang (20000, 15000, dst).
    "susu" => 15000,
    "telur" => 25000,
    "gula" => 10000,
];

$total = 0;
foreach($belanja as $barang => $harga) {
    echo "$barang: Rp" . number_format($harga, 0, ',', '.') . "<br>";       //number_format($harga, 0, ',', '.') → format angka ke bentuk rupiah.Contoh: 20000 jadi 20.000.
    $total += $harga;       //$total += $harga; → menambahkan harga barang ke total.
}
echo "<hr>";
echo "Total: Rp" . number_format($total, 0, ',', '.') . "<br>";

//syarat diskon
if ($total >= 100000) {
    $diskon = $total * 0.10;
    $total -= $diskon;
    echo "Anda mendapatkan diskon 10%: Rp" . number_format($diskon, 0, ',', '.') . "<br>";
}
// Jika total belanja lebih dari atau sama dengan Rp100.000, maka:
// Hitung diskon 10%.
// Kurangi total dengan diskon.
// Tampilkan jumlah diskonnya.

echo "<strong>Total bayar: Rp" . number_format($total, 0, ',', '.') . "</strong><br>";
?>

<!-- ⚡ Singkatnya:
Array asosiatif → menyimpan daftar belanja.
foreach → menampilkan barang & harga.
if → cek syarat diskon.
number_format → biar angka jadi format uang rupiah. -->