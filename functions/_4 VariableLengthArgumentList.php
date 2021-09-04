<?php

// membuat argument menerima banyak value, tetapi data yang dikirim tidak harus array dan diterima otomatis array
// syaratnya argument harus berada di paling belakang dari argument" lain
// bedanya dengan array kita tidak perlu mengirim data array tetappi sudah jadi array 

function sumAll(int $number1, int ...$numbers) // ARGUMENT LIST HANYA BISA DITARUH DIPARAMETER TERAKHIR
{
    $total = 0;
    foreach ($numbers as $number) {
        $total = $number1 * $number;
        echo "$number1 x $number = $total" . PHP_EOL;
    }
}

sumAll(10, 20, 30);
// parameter pertama untuk parameter $number1 dan setelahnya akan dikonversi menjadi array banyak

echo PHP_EOL;

sumAll(...[1, 20, 30, 40]);

// bedanya semua parameter akan dijadikan array
// sumAll([70, 20, 30, 40]);
// Untuk mengirim data array kita menambah ... tiga kali diawal
