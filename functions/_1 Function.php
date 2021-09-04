<?php

// sayHello(); // jalan karena global scope

// function sayHello()
// {
//     echo "Hello Function \n";
// }



// Lokasi function

// $buat = true; // jika function dalam if tetapi kondisi nya false dan function tidak akan dijalankan maka akan error karena kita tidak mendefinisikan function (tidak ada function yang dibuat)

// sayHello(); jika didalam kondisi function ditaruh diatas bakal error undefined


$buat = false;

if ($buat) :

    function sayHello()
    {
        echo "Kondisi True nIch \n";
    }

endif;

sayHello();
