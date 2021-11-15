<?php
    include_once 'header.php';
?>

    <section class="signup-form">

        <form action="includes/signup.inc.php" method="post">
            <div class="container p-5">
                <h1 class="h3 mt-3 mb-3 fw-normal text-center">Sign up</h1>

                <div class="form-floating">
                    <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Full name">
                    <label for="floatingPassword">Full name</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="email" class="form-control" id="floatingInput" placeholder="Email...">
                    <label for="floatingPassword">Email</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="uid" class="form-control" id="floatingInput" placeholder="Username">
                    <label for="floatingPassword">Username</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="pwd" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="pwdrepeat" class="form-control" id="floatingPassword" placeholder="Repeat Password">
                    <label for="floatingPassword">Repeat Password</label>
                </div>
                <?php  
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinput") {
                            echo '<p class="text-center text-success mt-2"> Fill in all fields </p>';
                        }
                        else if ($_GET["error"] == "invaliduid") {
                            echo '<p class="text-center text-success mt-2"> Choose a proper Username! </p>';
                        }
                        else if ($_GET["error"] == "invalidemail") {
                            echo '<p class="text-center text-success mt-2"> Select proper email! </p>';
                        }
                        else if ($_GET["error"] == "passwordsdontmatch") {
                            echo '<p class="text-center text-success mt-2"> Passwords dont match! </p>';
                        }
                        else if ($_GET["error"] == "usernametaken") {
                            echo '<p class="text-center text-success mt-2"> Username already taken! </p>';
                        }
                        else if ($_GET["error"] == "stmtfailed") {
                            echo '<p class="text-center text-success mt-2"> Something went wrong, try again! </p>';
                        }
                        else if ($_GET["error"] == "none") {
                            echo '<p class="text-center text-success mt-2">You have signed up! </p>';
                        }
                    }
    
                ?>
                <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Sign Up</button>
            </div>
        </form>

        

    </section>

    

<?php
    include_once 'footer.php';
?>