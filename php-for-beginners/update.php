<?php

require_once 'conn.php';

$newTitle = 'hello from post one';
$id = 1;

$update = $conn->prepare('UPDATE posts SET title = :title WHERE id = :id');

$update->execute([
    ':title' => $newTitle,
    ':id' => $id
]);



