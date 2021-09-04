<?php

$nilai = 70;
$absen = 61;

if ($nilai >= 90 && $absen >= 80) {
    echo "Nilai A \n";
} else if ($nilai >= 80 && $absen >= 70) {
    echo "Nilai B \n";
} else if ($nilai >= 70 && $absen >= 60) {
    echo "Nilai C \n";
} else {
    echo "Tololl \n";
}
