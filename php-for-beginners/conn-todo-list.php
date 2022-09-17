<?php

$host = 'mysql';
$dbname = 'todo_list';
$user = 'root';
$pass = '<root-password>';

try {
    $conn = new PDO("mysql:host={$host};dbname={$dbname}; charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo 'error is: ' . $e->getMessage();
}