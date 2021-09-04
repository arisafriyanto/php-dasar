<?php


// TIDAK DIREKOMENDASIKAN DIGUNAKAN


goto a; // untuk meloncat atau skip program yang tidak ada goto a nya
echo "Hello A \n";

a:  // kode untuk akses kode goto a
echo "Hello B \n";


$counter = 1;

while (true) {
    echo "Ini adalah while ke-$counter \n";
    if ($counter >= 10) {
        goto end; // membuat label
    }
    $counter++;
}

end: // gunakan goto diakhiri colon :
echo "Berhenti Woy!!";
