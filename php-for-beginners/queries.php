<?php

require_once 'conn.php';

$rows = $conn->query('SELECT title FROM posts');

while ($row = $rows->fetch(PDO::FETCH_OBJ)) {
    // echo $row['title'] . '<br>';
    // var_dump($row);
    echo $row->title . '<br>';
}

// foreach ($rows as $row) {
//     echo $row['title'] . '<br>';
// }