<?php

function hitung(int $nmr1, int $nmr2)
{
    $total = $nmr1 * $nmr2;
    return "$nmr1 + $nmr2 = $total";
}

$hasil = hitung(2, 10);
echo $hasil;
echo "\n\n";


function hitungNilai(int $nilai): string
{
    if ($nilai >= 90) {
        return "Anda lulus sangat baik!" . PHP_EOL;
    } else if ($nilai >= 80) {
        return "Anda lulus baik!" . PHP_EOL;
    } else if ($nilai >= 75) {
        return "Anda lulus!" . PHP_EOL;
    } else {
        return "Anda salah jurusan!" . PHP_EOL;
    }
}


$nilai = hitungNilai(78);
echo $nilai;
