<?php
    include_once 'header.php';
?>

<?php

$errors = "";

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "todo";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (isset($_POST['submit'])) {
    $task = $_POST['task'];

    if (empty($task)) {
        $errors = "You must fill in the task";
    } else {
        
        mysqli_query($conn, "INSERT INTO tasks (task) VALUES ('$task')");
        header('location: todo.php');
    }
}

if (isset($_GET['delete_task'])) {
    $id = $_GET['delete_task'];
    mysqli_query($conn, "DELETE FROM tasks WHERE id=$id");
    header('location: todo.php');
}

$tasks = mysqli_query($conn, "SELECT * FROM tasks");

?>

<div class="heading">
    <h2>Your Todo list</h2>
</div>

<form method="POST" action="todo.php" class="todo_form">
    <?php if (isset($errors)) { ?>
        <p> <?php echo $errors; ?> </p>
    <?php } ?>
    <input type="text" name="task" class="todo_input">
    <button type="submit" class="todo_btn" name="submit">Add Task</button>
    
</form>

<table>
    <thead>
        <tr>
            <th>N</th>
            <th>Task</th>
            
        </tr>
    </thead>

    <tbody>

        <?php 
            $i = 1; while ( $row = mysqli_fetch_array($tasks)) { ?>

                <tr>
                    <td><?php echo $i; ?></td>
                    <td class="task"><?php echo $row['task']; ?></td>
                    <td class="delete">
                        <a href="todo.php?delete_task=<?php echo $row['id']; ?>">X</a>
                    </td>
                    <td class="edit">
                        <a href="todo.php?update_task=<?php echo $row['id']; ?>">Update</a>
                    </td>
                </tr>

          <?php $i++;  } ?>

        
    </tbody>
</table>






<?php
    include_once 'footer.php';
?>