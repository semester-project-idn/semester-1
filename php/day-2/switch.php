<?php
$hari = "Senin";

switch ($hari) {        //switch ($hari) { ... } → Mengecek isi variabel $hari, lalu menyesuaikan dengan case yang ada.
    case "Senin":       //→ Kalau $hari sama dengan "Senin", maka akan mencetak:
        echo "Hari ini awal pekan, Semangat kerja!";
        break;      //lalu break; menghentikan proses supaya tidak lanjut ke case lain.
    case "Selasa":      //→ Kalau $hari sama dengan "Selasa", maka akan mencetak:
        echo "Hari kerja, tetap semangat!";
        break;
    default:            //→ Kalau $hari tidak sama dengan "Senin" atau "Selasa", maka akan mencetak:
        echo "Hari biasa..";
}

?>