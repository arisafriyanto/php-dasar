<?php

// mendeklarasikan tipe data function yang dikembalikan

function hitungNilai(int $nilai): string
{
    if ($nilai >= 85) {
        return "Nilai A";
    } else if ($nilai >= 70) {
        return "Nilai B";
    } else if ($nilai >= 69) {
        return "Nilai C";
    } else if ($nilai >= 60) {
        return "Nilai D";
    } else {
        return "Anda Goblog!";
    }
}

$status = hitungNilai(10);
var_dump($status);



function tambah(int $number1, int $number2): int
{
    $total = $number1 + $number2;
    return $total;
}

$total = tambah(100, 80);
var_dump($total);
