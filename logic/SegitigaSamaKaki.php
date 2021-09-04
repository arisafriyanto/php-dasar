<?php

/*
    Logic Segitigas sama kaki
*/

for ($i = 1; $i <= 5; $i++) {

    for ($j = 5; $j >= $i; $j--) {

        echo " ";
    }

    for ($k = 1; $k <= $i * 2 - 1; $k++) {
        echo "*";
    }

    echo PHP_EOL;
}

echo PHP_EOL;




/*
    Logic Segitigas sama kaki terbalik
*/

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo " ";
    }

    for ($k = 5; $k >= 2 * $i - 5; $k--) {
        echo "*";
    }

    echo PHP_EOL;
}


echo PHP_EOL;


/*
    Logic Belah ketupat
*/

for ($i = 1; $i <= 5; $i++) {

    for ($j = 5; $j >= $i; $j--) {

        echo " ";
    }

    for ($k = 1; $k <= $i * 2 - 1; $k++) {
        echo "*";
    }

    echo PHP_EOL;
}

for ($i = 2; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo " ";
    }

    for ($k = 5; $k >= 2 * $i - 5; $k--) {
        echo "*";
    }

    echo PHP_EOL;
}
