<?php

$nilai = "F";

// digunakan untuk perbandingan == karena lebih sederhana dari if

switch ($nilai) {   // :
    case "A":
        echo "Nilai A \n";
        break;
    case "B":
    case "C":
        echo "Nilai B dan C \n";
        break;
    case "D":
        echo "Anda Lumayan \n";
        break;
    default:
        echo "Dia Tololl \n";
}   // endswitch;


// if ($nilai == "A") {
//     echo "Nilai A \n";
// } else if ($nilai == "B" && $nilai == "C") {
//     echo "Nilai B dan C \n";
// } else if ($nilai == "D") {
//     echo "Lumayan lah \n";
// } else {
//     echo "Tooolollll \n";
// }
