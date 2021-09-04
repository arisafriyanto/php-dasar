<?php

// perulangan bakal dilakukan diawal dan cek kondisi bakal dilakukan setelah perulangan dilakukan, sehingga walaupun kondisi false bakal dijalankan minimal satu kali beda dengan while jika kondisi false tidak akan melakukan perulangan karena cek kondisi da didepan


$counter = 100; // init

do {
    echo "Ini do while ke-$counter \n"; // statement
    $counter++;
} while ($counter <= 10); // kondisi


$counter2 = 20;

do {
    echo "Hello ini perulangan do while ke-$counter2" . PHP_EOL; // 2
    $counter2--; // 3
} while ($counter2 >= 1); // 4

echo "\n\n";

// // KANG PUKIS
