<?php

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 != 0) {
        continue; // skip
    }

    echo "ini bilangan genap-$i \n";
}


// KANG PUKIS

// for ($i = 1; $i <= 10; $i++) {
//     if ($i == 5) {
//         continue;
//     }
//     echo $i . PHP_EOL;
// }


// while pasti gagal karena program akan bingung
// Perulangan ini akan terus berulang di angka 5 karena jika nilai $i = 5 itu kondisi true harusnya berjalan dong perulangannya, tapi karena setelah kondisi if($i == 5) itu pake continue program dibawah tidak akan dijalankan jadi nilainya akan berputar terus jadi 5. echo dan $i++ diskip oleh continue

// $i = 1;
// while ($i <= 10) {
//     if ($i == 5) {
//         continue;
//     }
//     echo $i . PHP_EOL;
//     $i++;
// }

// cara mengatasi

// $i = 0;
// while ($i <= 10) {
//     $i++;
//     if ($i == 5) {
//         continue;
//     }
//     echo $i . PHP_EOL;
// }
