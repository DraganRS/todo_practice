<?php
    include_once 'header.php';
?>

<?php 
    if (isset($_SESSION["useruid"])) {
        echo '<p class="welcome mb-4 text-center">Hello ' . $_SESSION["useruid"] . ' ! </p>';   
    }
?>
    <div class="px-4 pt-4 my-5 text-center">
        <h1 class="display-4 fw-bold">Create your own Todo List on our website</h1>
        <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Quickly create and customize your own Todo List, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
            <?php 
                if (isset($_SESSION["useruid"])) {
                    echo '<a href="todo.php" class="btn btn-primary btn-lg px-4 me-sm-3">Get started with Todo List</a>';
                }
                else {
                    echo '<a href="signup.php" class="btn btn-primary btn-lg px-4 me-sm-3">Sign Up</a>';
                    echo '<a href="login.php" class="btn btn-outline-secondary btn-lg px-4">Sign In</a>';
                }
            ?>
        </div>
        </div>
    </div>



<?php
    include_once 'footer.php';
?>