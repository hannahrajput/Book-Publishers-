

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Profile</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <?php
        include "nav.php"?>
        <!-- Header-->
        <header style="background-color:black;" class=" py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Profile</h1>
                    <p class="lead fw-normal text-white-50 mb-0">You can edit your Profile here.</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <?php
                include_once "connection.php";
                 if(isset($_SESSION["username"])){
                    $db = new connection();
                    $conn = $db->getConnection();
                    $query = $conn->query("SELECT * FROM users_tbl WHERE Username='".$_SESSION['username']."'");
                    $conn->close();
                    if(mysqli_num_rows($query)>0){
                        while($row = mysqli_fetch_assoc($query)){
                      
                
                ?>
            <form method="POST" action="update.php">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                               First Name</label>
                               <input type="text" class="form-control" placeholder="First Name" name="fname" value="<?php echo $row['First_Name'] ?>" required />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Last Name</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="text" class="form-control" placeholder="Last Name" name="lname" value="<?php echo $row['Last_Name'] ?>" required /></div>
                        </div>
                        <div class="form-group">
                        <div class="form-group">
                     <label>User Name</label>
                     <input type="text" class="form-control" placeholder="User Name" name="uname" value="<?php echo $row['Username'] ?>" required /> 
                  </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                     <label>Password</label>
                     <input type="text" class="form-control" placeholder="Password" name="password" value="<?php echo $row['Password'] ?>" required />
                    </div>
                    <div class="form-group">
                     <label>Confirm Password</label>
                     <input type="text" class="form-control" placeholder="Confirm Password" name="cpassword" required /><br/>
                     <input type="submit" class="btn btn-outline-dark" value="Update" name="submit">
                  </div>
                    </div>
                    <div class="col-md-12">

                    </div>
                </div>
                </form>
                <?php
                      
                    }
                }
            }
            ?>
            </div>
        </section>
        <!-- Footer-->
        <footer style="background-color:black;" class="py-5">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy;2022 All Rights Reserved By Ternion(Web Trainees)</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
