<?php

require_once 'conn.php';

$title = 'Sessão da Meia Noite';
$body = 'A Sessão da Meia Noite é outro espaço onde pode encontrar reviews de filmes, com comentários pessoais assim como notícias sobre o mundo do cinema e também da televisão.';

$insert = $conn->prepare('INSERT INTO posts (title, body) VALUES (?, ?)');

$insert->execute([
    $title,
    $body
]);

echo $conn->lastInsertId();