<?php

require_once 'conn.php';

/*
    Transactions, commits, rollbacks 
    what are they? why use them? how to use them?
*/

$title = 'Anteestreia';
$body = 'O blog Antestreia lançou-se em 2003 com a cobertura do Festival de Cinema Fantasporto e desde então não pára de crescer.';

try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->beginTransaction();
    $conn->query("INSERT INTO posts (title, body) VALUES ('$title', '$body')");
    $conn->commit();
  

} catch (Exception $e) {
    $conn->rollBack();
    echo $e->getMessage();
}

// closing the connection
$conn = null;