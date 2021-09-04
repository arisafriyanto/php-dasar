<?php

// Rescursive function adalah memanggil dirinya sendiri contohnya kasus factorial perkalian atau pertambahan
// Factorial dengan loop

echo "Factorial For\n";

function factorialLoop(int $nilai)
{
    $total = 1;
    for ($i = 1; $i <= $nilai; $i++) {
        $total *= $i;   //  1*1= 1   1*2=2   2*3=6   6*4=24  24*5=120
    }                   //  1 * 2 * 3 * 4 * 5

    return $total;
}

$hasil = factorialLoop(5);
var_dump(1 * 2 * 3 * 4 * 5);
var_dump($hasil);
var_dump(24 * 5);





echo "\n\nFactorial Rescursive\n";


// Factorial Recursive

function factorialRecursive(int $value): int
{
    if ($value == 1) {
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
    }
}

$recursice = factorialRecursive(5);
var_dump($recursice);
var_dump(5 * 4 * 3 * 2 * 1);



// TETAPI JIKA TERLALU BANYAK MENGGUNAKAN RECURSIVE FUNCTION AKAN ERROR KARENA TERLALU MENGGUNAKAN BANYAK MEMORI, CONTOHNYA KETIKA FUNCTION DIJANALKAN PHP AKAN MENYIMPAN DALAM STACK JIKA FUNCTION ITU MEMANGGIL FUNCTION LAIN MAKA STACK NUMPUK DAN AKAN MEMAKAN BANYAK MEMORI KEMUDIAN AKAN ERROR KARENA MEMORI SUDAH DITENTUKAN BATASNYA OLEH PHP

//  contoh diatas     
//  factorialRecursive(5) * factorialRecursive(4) * factorialRecursive(3) * factorialRecursive(2) *     factorialRecursive(1)  
// ini lah yang akan terjadi, jika banyak akan numpuk stack pemanggilan akan error dan aplikasi sangat lambat sekali dan error.