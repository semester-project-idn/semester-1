<?php
$mahasiswa = [
    "nama" => "Farid",      // key "nama" menyimpan value "Farid".
    "umur" => 19,
    "jurusan" => "TRPL"
];

echo "Nama: " . $mahasiswa["nama"] . "<br>";        //→ Menampilkan isi key "nama" → hasilnya "Nama: Farid".
echo "Umur: " . $mahasiswa["umur"] . "<br>";
echo "Jurusan: " . $mahasiswa["jurusan"] . "<br>";

?>
// 📌 Bedanya dengan array numerik:
// Array numerik → pakai indeks angka (0,1,2,...).
// Array asosiatif → pakai key custom (misalnya "nama", "umur", "jurusan").