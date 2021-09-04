<?php

// TETAPI JIKA TERLALU BANYAK MENGGUNAKAN RECURSIVE FUNCTION AKAN ERROR KARENA TERLALU MENGGUNAKAN BANYAK MEMORI, CONTOHNYA KETIKA FUNCTION DIJANALKAN PHP AKAN MENYIMPAN DALAM STACK JIKA FUNCTION ITU MEMANGGIL FUNCTION LAIN MAKA STACK NUMPUK DAN AKAN MEMAKAN BANYAK MEMORI KEMUDIAN AKAN ERROR KARENA MEMORI SUDAH DITENTUKAN BATASNYA OLEH PHP


function rescursive(int $nilai)
{
    if ($nilai == 0) {
        echo "selesai \n";
    } else {
        echo "Rescursive $nilai \n";
        rescursive($nilai - 1);
    }
}

rescursive(3000000);

// TIDAK DIREKOMENDASIKAN

// jika memori kita tidak kuat akan error dan jangan terlalu dalam kaya yang diatas
// maka kode ini jika dijalankan akan error karena stack function numpuk melebihi batasan memori yang ditentukan php