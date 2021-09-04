<?php

// mengakses array

echo "Dengan For \n\n";

$friends = ["Aris", "Sinta", "Adinda", "Angelina"];

for ($i = 0; $i < count($friends); $i++) {
    echo "ke-$i adalah $friends[$i] \n";
}

echo "\n\nDengan Foreach \n\n";

$names = ["Aris", "Sinta", "Adinda", "Angelina"];

foreach ($names as $name) {
    echo "Haii $name" . PHP_EOL;
}

// foreach ($names as $index => $name) {
//     echo "Data ke-$index = $name" . PHP_EOL;
// }

echo "\n";

$details = [
    "nama" => "Aris",
    "usia" => 19,
];

foreach ($details as $key => $value) {
    echo "$key $value" . PHP_EOL;
}
