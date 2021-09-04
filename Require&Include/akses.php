<?php

// include "Functxdsfgfions.php";

/* 
    include "Functionssdgfdsfg.php"  jika function yang dipanggil lokasinya salah hanya akan muncul warning bahwa lokasi include tidak ada tetapi program tetap dijalankandan muncul error karena function yang dijalankan tidak ditemukan 
*/

require "Functions.php";

/* 
    require "Functionssdgfdsfg.php"  jika function yang dipanggil lokasinya salah akan muncul error bahwa lokasi require tidak ada dan program akan terhenti tidak dijalankan sama sekali.
*/

echo sayHello("Aris", "Afriyanto");


/* 
    include atau require harus berada diatas supaya bisa dipanggil
*/