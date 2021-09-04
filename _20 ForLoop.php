<?php

// for (;;) {
//     echo "Hello for loop tak terbatas. \n";
// }




// jika counter kurangdari atau sama dengan 10 perulangan bakal dilakukan

// cek init statement $counter = 1, kemudian cek kondisi jika $counter lebih kecil dari atau sama dengan 10 perulangan bakal dilakukan dan akan nambah 1 dicounter ++; dan cek lagi berarti kondisi dari 1 ditambah 1 sama dengan 2 jika terpenuhi akan dilakukan lagi sampe kondisi false; 

// 1
// $counter = 1;

// for (; $counter <= 10;) { // 2
//     echo "Hello ini perulangan ke-$counter" . PHP_EOL; // 3
//     $counter++; // 4
// }



// for ($counter = 1; $counter <= 10;) { // init statement hanya dieksekusi 1 kali
//     echo "Hello ini perulangan ke-$counter" . PHP_EOL;
//     $counter++;
// }

/*       1             2               4 */
// for ($counter = 1; $counter <= 10; $counter++) {
//     echo "Hello ini perulangan ke-$counter" . PHP_EOL; // 3
// }

// for ($counter = 10; $counter >= 1; --$counter) {
//     echo "Hello ini perulangan ke-$counter" . PHP_EOL; // 3
// }


// hasilnya sama karena nilai dari keduanya sama dan postincremen/preincrement bakal dieksekusi setelah kondisi true dan for nya dijalankan



/* KANG PUKIS */
// echo "Loop 1 \n";
// for ($i = 1; $i <= 10; $i++) {
//     echo $i . PHP_EOL;
// }

// echo "Loop 2 \n";
// for ($i = 1; $i <= 10; $i += 2) {
//     echo $i . PHP_EOL;
// }

// echo "Loop 3 \n";
// for ($i = 1; $i >= -10; $i--) {
//     echo $i . PHP_EOL;
// }

// echo "Loop 4 \n";

// $total = 0;
// for ($i = 1; $i <= 10; $i++) {
//     $total += $i;
//     echo $i . " || " . $total .  PHP_EOL;
// }

// INCREMENT/DECREMENT DIEKSEKUSI TERAKHIR






























/*
    for(init statement; kondisi; increment) {
        statement;
    }

    init dieksekusi 1 kali, kemudian cek kondisi kalo true dia jalanin statement dan diakhir dia nambah nilai $i nambah 1 dan kondisi akan dicek lagi sampe false .
*/

// for ($i = 10; $i >= 1; $i--) {
//     echo $i . PHP_EOL;
// }
