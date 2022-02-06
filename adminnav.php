<?php include_once "connection.php";
Session_start();?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="admindash.php">Book Publishers</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link"   href="admindash.php">Dash Board</a></li>
                        <li class="nav-item"><a class="nav-link " href="books.php">Add Books</a></li>
                        <li class="nav-item"><a class="nav-link" href="events.php">Add Events</a></li>
                        <li class="nav-item"><a class="nav-link" href="notify.php">Notifcations</a></li>
                        
                         
                    </ul>
                    <?php 
                    if(isset($_POST['logout'])){
                        Session_destroy();
                      header("Location:http://localhost/Wtproject3/login.php");
                    }
                    if(isset($_SESSION["username"])){
                        echo ' Hello!   '. $_SESSION["username"] .
                        '<form class="d-flex" method="POST">                    
                           <input type="submit" class="btn btn-outline-dark" value="Logout" name="logout">

                    </form>';

                    }
                    else {
                        echo '<form class="d-flex">                    
                        <button type="button" class="btn btn-outline-dark" onclick="document.location=`login.php`" value="Login" name="login">Login</button>

                    </form>';
                    }
                    ?>
                    
                </div>
            </div>
        </nav>
