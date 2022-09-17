<?php

    require_once 'conn-todo-list.php';

    if (isset($_GET['upd_id'])) {
        $id = $_GET['upd_id'];
        $data = $conn->query("SELECT * FROM tasks WHERE id_tasks = '$id'");
        // print_r($data);
        $rows = $data->fetch(PDO::FETCH_ASSOC);

        if (isset($_POST['submit'])) {
            $task = $_POST['mytask'];
    
            $update = $conn->prepare("UPDATE tasks SET name = :name WHERE id_tasks = '$id'");
            $update->execute([
                ':name' => $task
            ]);
    
            header('Location: todo-list.php');
        } 
    }
?>

