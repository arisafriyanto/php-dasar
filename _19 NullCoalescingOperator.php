<?php

// $data = [
//     "action" => "create"
// ];

// if (isset($data['action'])) {
//     echo $data['action'] . PHP_EOL;
// } else {
//     echo "Nothing" . PHP_EOL;
// }

// simple

$data = ['name' => 'Aris Afriyanto'];
$action = $data['name'] ?? "Nothing";
echo $action . PHP_EOL;
