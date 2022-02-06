<?php include_once "connection.php";
Session_start();?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="home.php">Book Publishers</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link"   href="home.php">Home</a></li>
                        <?php
                         $pagename = basename($_SERVER['PHP_SELF']);
                         if($pagename == "home.php"){
                             ?>
                        <li class="nav-item"><a class="nav-link" onclick="show(event)">Events</a></li>
                            
                         <?php
                         }
                         ?>
                        <li class="nav-item"><a class="nav-link " href="category.php">Categories</a></li>
                        <li class="nav-item"><a class="nav-link" href="contactus.php">Contact Us</a></li>
                        <?php
                        if(isset($_SESSION["username"])){
                            echo ' <li class="nav-item"><a class="nav-link "  href="profile.php">Profile</a></li>';
                            echo '  <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Request</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="specimenform.php">Specimen Request</a></li>
                                <li><a class="dropdown-item" href="authorrqst.php">Author Request</a></li>
                            </ul>
                        </li>';

                        }
                         ?>
                         
                    </ul>
                    <?php 
                    if(isset($_POST['logout'])){
                        Session_destroy();
                      header("Location:http://localhost/Wtproject3/home.php");
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
