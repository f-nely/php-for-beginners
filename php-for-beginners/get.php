<?php

// var_dump($_GET);

    if (isset($_GET['lang'])) {
        $get = $_GET['lang'];
        echo "my favorite programming language is: $get";
    }
?>

<a href="get.php?lang=php">get link</a>