<?php
//looping dengan for
for ($i = 1; $i <= 10; $i++) {      //inisialisasi; kondisi; increment
    echo "Perulangan ke - $i <br>";
}

echo "<hr>";

//looping dengan while
$j = 1;
while ($j <= 3) {
    echo "ini while ke - $j <br>";
    $j++;
}

echo "<hr>";

//looping dengan do while
$k = 1;
do {
    echo "ini do while ke - $k <br>";
    $k++;
} while ($k <= 3);

//Bedanya dengan while: kode dijalankan dulu, baru dicek kondisinya.
//Jadi, walaupun $k tidak memenuhi syarat, minimal 1x pasti jalan.

echo "<hr>";

//looping dengan foreach(khusus array)
$buah = array("Apel", "Jeruk", "Mangga");       //$buah = array dengan 3 item.
foreach ($buah as $value) {                     //foreach ($buah as $value) → setiap elemen array disimpan ke $value satu per satu.
    echo "Saya suka $value <br>";
}
?>

<!-- ✨ Kesimpulan
for → kalau tau jumlah pasti (misalnya 1 sampai 10).
while → kalau belum tau pasti, tapi ada kondisi berhenti.
do while → sama kayak while, tapi minimal sekali dijalankan.
foreach → paling cocok untuk array/list. -->