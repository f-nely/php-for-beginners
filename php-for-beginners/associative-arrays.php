<?php

// associative arrays
$ages = [
    'ahmed' => 33,
    'jane' => 22,
    'mohamed' => 32,
];

var_dump($ages);

foreach ($ages as $key => $value) {
    // var_dump($age);
    // echo "{$key} => {$value} <br>";
    echo "my name is {$key}, age is {$value}. <br>";
}

