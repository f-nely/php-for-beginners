<?php

require_once 'conn.php';

$title = 'Cinema Notebook';
$body = 'Carlos M. Reis começou o Cinema Notebook em 2004 e o blog tem continuado a crescer com o passar dos anos.';

$insert = $conn->prepare("INSERT INTO posts (title, body) VALUES (:title, :body)");

$insert->execute([
    ':title' => $title,
    ':body' => $body
]);

