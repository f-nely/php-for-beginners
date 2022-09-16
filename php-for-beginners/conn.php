<?php

// host, dbname, user, password
$host = 'mysql';
$dbname = 'blog';
$user = 'root';
$password = '<root-password>';

try {
    $conn = new PDO("mysql:host={$host};dbname={$dbname}", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo $e->getMessage();
}

// echo 'the rest of the page';