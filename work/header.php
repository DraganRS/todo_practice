<?php
    session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PHP VEZBA</title>
        <link rel="stylesheet" href="css/style.css">   
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    </head>
    <body>
        <header class="p-3 bg-dark text-white">
            <div class="container">
                <div class="navigation" id="navigId">

                    
                    <a href="index.php" class="nav-link px-2 text-light">Home</a>
                    <?php 
                            if (isset($_SESSION["useruid"])) {
                                echo '<a href="todo.php" class="nav-link px-2 text-light">Todo List</a>';
                                echo '<a href="includes/logout.inc.php" class="nav-link px-2 text-light">Log Out</a>';
                            }
                            else {
                                echo '<a href="signup.php" class="nav-link px-2 text-light">Sign up</a>';
                                echo '<a href="login.php" class="nav-link px-2 text-light">Log In</a>';
                            }
                    ?>
                    <a href="javascript:void(0);" class="nav-link px-2 text-light icon" onclick="navMenuClick()">
                        <i class="fa fa-bars"></i>
                    </a>
                    </ul>
                
                </div>
            </div>
        </header>
        
        </nav>

    




