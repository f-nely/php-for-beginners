<?php
    require_once 'conn-todo-list.php';
    require_once 'header.php';

    $data = $conn->query('SELECT * FROM tasks');
?>

<div class="container">
    <form method="POST" action="insert-todo.php"  class="form-inline" id="user_form">	 
        <div class="form-group mx-sm-3 mb-2">
		    <label for="inputPassword2" class="sr-only">create</label>
		    <input name="mytask" type="text" class="form-control" id="task" placeholder="enter task">
		</div>
            <button name="submit" type="submit" class="btn btn-primary mb-2">Create</button>
    </form>

    <table class="table">
	    <thead>
		    <tr>
		        <th>#</th>
		        <th>Task Name</th>
		        <th>Action</th>
		    </tr>
		</thead>
        <?php while($rows = $data->fetch(PDO::FETCH_ASSOC)): ?>
		<tbody>
            <tr>
                <td><?php echo $rows['id_tasks'] ?></td>
                <td><?php echo $rows['name'] ?></td>
                <td>
                    <a href="delete-todo.php?del_id=<?php echo $rows['id_tasks']; ?>" class="btn btn-danger d-flex justify-content-between">delete</a>
                    <a href="update-todo-sub.php?upd_id=<?php echo $rows['id_tasks']; ?>" class="btn btn-warning d-flex justify-content-between">update</a>
                </td>
            </tr>
		</tbody>
        <?php endwhile; ?>
    </table>
	</div>

<?php require_once 'footer.php'; ?>