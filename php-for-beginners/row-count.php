<?php

require_once 'conn.php';

$rows = $conn->query('SELECT * FROM posts LIMIT 0');

// echo $rows->rowCount();

if ($rows->rowCount() > 0) {
    while ($row = $rows->fetch(PDO::FETCH_ASSOC)) {
        echo $row['title'] . '<br>';
    }
} else {
    echo 'no results yet';
}