<?php
$nilai = 75;

if ($nilai >= 80) {     //→ Kalau nilai ≥(lebih besar sama dengan) 80, maka tampil Nilai kamu A.
    echo "Nilai kamu A";
} else if ($nilai >= 70) {
    echo "Nilai kamu B";
} else if ($nilai >= 60) {
    echo "Nilai kamu C";
} else {
    echo "Nilai kamu D";
}