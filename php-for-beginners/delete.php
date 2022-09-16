<?php

require_once 'conn.php';

$id = 5;

$delete = $conn->prepare('DELETE FROM posts WHERE id = :id');

$delete->execute([
    ':id' => $id
]);