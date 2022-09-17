<?php

    require_once 'conn-todo-list.php';

    if (isset($_GET['del_id'])) {
        $id = $_GET['del_id'];
        $delete = $conn->prepare('DELETE FROM tasks WHERE id_tasks = :id');
        $delete->execute([
            ':id'=> $id
        ]);

        header('Location: todo-list.php');
    }
