<?php
    require_once 'conn-todo-list.php';
    
    if (isset($_POST['submit'])) {
        $task = $_POST['mytask'];

        $insert = $conn->prepare('INSERT INTO tasks (name) VALUES (:name)');
        $insert->execute([
            ':name' => $task
        ]);

        header('Location: todo-list.php');
    } 

