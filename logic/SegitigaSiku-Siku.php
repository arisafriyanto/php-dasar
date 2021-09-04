<?php

/*
  Logic Matrix

for ($i = 1; $i <= 2; $i++) {
    for ($j = 1; $j <= 2; $j++) {
        echo $j;
    }
    echo PHP_EOL;
}

*/


/*
  Logic segitiga siku-siku
*/
echo PHP_EOL;
//      1        2      4
for ($i = 1; $i <= 5; $i++) {

    for ($j = 1; $j <= $i; $j++) {
        echo "*";   // 3
    }

    echo PHP_EOL;
}

echo PHP_EOL;








for ($i = 5; $i >= 1; $i--) {

    for ($j = 1; $j <= $i; $j++) {
        echo "*";   // 3
    }

    echo PHP_EOL;
}

echo PHP_EOL;





for ($i = 1; $i <= 5; $i++) {
    for ($j = 4; $j >= $i; $j--) {
        echo " ";
    }

    for ($k = 1; $k <= $i; $k++) {
        echo "*";
    }
    echo PHP_EOL;
}

echo PHP_EOL;






for ($i = 1; $i <= 5; $i++) {
    for ($j = 2; $j <= $i; $j++) {
        echo " ";
    }

    for ($k = 5; $k >= $i; $k--) {
        echo "*";
    }

    echo PHP_EOL;
}
