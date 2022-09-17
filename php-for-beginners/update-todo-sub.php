<?php

require_once 'update-todo.php';
require_once 'header.php';

?>

<div class="container">
    <form method="POST" action="update-todo-sub.php?upd_id=<?php echo $id; ?>"  class="form-inline" id="user_form">	 
        <div class="form-group mx-sm-3 mb-2">
		    <label for="inputPassword2" class="sr-only">create</label>
		    <input name="mytask" type="text" class="form-control" id="task" placeholder="enter task" value="<?php echo $rows['name']?>">
		</div>
            <input name="submit" type="submit" value="Update" class="btn btn-primary mb-2">
    </form>
</div>

<?php require_once 'footer.php'; ?>
