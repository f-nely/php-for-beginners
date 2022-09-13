<?php

// multidimensional arrays

$multi = [
    ['php', 'java', 'javascript'],
    ['laravel', 'symfony', 'nodejs'],
    ['mysql', 'mongodb', 'couchdb'],
];

var_dump($multi);

foreach ($multi as $m) {
    var_dump($m);
}