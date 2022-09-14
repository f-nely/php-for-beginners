<?php

if (isset($_POST)) {
    $username = $_POST['username'];
    $email = $_POST['email'];

    echo "my username is: {$username} and my email is: {$email}";
}