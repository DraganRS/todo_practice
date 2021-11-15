<?php
    include_once 'header.php';
?>

    <main class="form-signin">
        <form action="includes/login.inc.php" method="post">
            <div class="container p-5">
                <h1 class="h3 mt-3 mb-3 fw-normal text-center">Please sign in</h1>

                <div class="form-floating">
                    <input type="text" name="uid" class="form-control" id="floatingInput" placeholder="Username/Email">
                    <label for="floatingPassword">Username/Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="pwd" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <?php  
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinput") {
                            echo '<p class="text-center text-danger mt-2"> Fill in all fields </p>';
                        }
                        else if ($_GET["error"] == "wronglogin") {
                            echo '<p class="text-center text-danger mt-2"> Incorect Login information! </p>';
                        }
                    }
                ?>
                <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Sign in</button>
            </div>
        </form>
        
    </main>



<?php
    include_once 'footer.php';
?>