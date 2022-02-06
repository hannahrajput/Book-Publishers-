
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        
        <title>Categories</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>
            .t {
  text-align: center;              
  padding-bottom: 20px;
  padding-left: 10px;
  padding-right: 40px;
            }
            .r{
                padding-top: 10px;
  
  padding-left: 10px;
  padding-right: 40px;
            }
            .b{
                color: #fff;
  background-color: #212529;
  border-color: #212529;
            }
            .b:hover {
                background-color:white;
  border: 1px solid transparent;
  color : black;
            }
        </style>
    </head>
    <body>
        <!-- Navigation-->
        <?php 
        include "nav.php";?>
        <!-- Header-->
        <header style="background-color:black;" class=" py-5">
            <div class="container px-4 px-lg-5 my-5" style="overflow-x:auto;">
                <!-- <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Connect to the Readers</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Through Our Publishing</p>
                </div> -->
                <!-- <div class="row ">
                  <div><input type="submit" class="btn btn-outline-dark" value="Login" name="login"></div>
                </div>
                <div class="row">
                    <input type="submit" class="btn btn-outline-dark" value="Login" name="login">
                </div> -->
               
                <form action="category.php">
                <table>
                    <tr>
                        <td class="t"><input type="submit" class="btn b"  value="Php" name="button"></td>
                        <td class="t"><input type="submit" class="btn b"  value="Javascript" name="button"></td>
                        <td class="t"><input type="submit" class="btn b"  value="Java" name="button"></td>
                        <td class="t"><input type="submit" class="btn b"  value="Python" name="button"></td>
                        <td class="t"><input type="submit" class="btn b"  value="Fortran" name="button"></td>
                        <td class="t"><input type="submit" class="btn b"  value="HTML" name="button"></td>
                        <td class="t"><input type="submit" class="btn b"  value="CSS" name="button"></td>
                        <td class="t"><input type="submit" class="btn b"  value="C++" name="button"></td>
                        
                    </tr>
                    <tr>
                    <td class="t"><input type="submit" class="btn b"  value=".Net" name="button"></td>
                        <td class="t"><input type="submit" class="btn b"  value="Networking" name="button"></td>
                        <td class="t"><input type="submit" class="btn b"  value="Shell Prog." name="button"></td>
                        <td class="t"><input type="submit" class="btn b"  value="DBMS" name="button"></td>
                        <td class="t"><input type="submit" class="btn b"  value="Data Mining" name="button"></td>
                        <td class="t"><input type="submit" class="btn b"  value="OS" name="button"></td>
                        <td class="t"><input type="submit" class="btn b"  value="AI" name="button"></td>
                        <td class="t"><input type="submit" class="btn b"  value="Data Sci." name="button"></td>
                    </tr>
                    </tr>
                </table>
              </form>
             
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                if(isset($_GET['button'])){
                $value = $_GET['button'];
                $db = new connection();
                $conn = $db->getConnection();
                $query = $conn->query("SELECT * FROM booksinfo_tbl WHERE Category='".$value."'");
                while($row=mysqli_fetch_assoc($query)){

               
                ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="<?php echo $row['Book_Image'];?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h6 class="fw-bolder"><?php echo $row['Book_Name'];?></h6>
                                    <!-- Product price-->
                                   
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                            </div>
                        </div>
                    </div>
                   <?php
                    }

                }
                else {
                    $db = new connection();
                    $conn = $db->getConnection();
                    $query = $conn->query("SELECT * FROM booksinfo_tbl WHERE Category='Php'");
                    while($row=mysqli_fetch_assoc($query)){
                
                ?>
                <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="<?php echo $row['Book_Image'];?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h6 class="fw-bolder"><?php echo $row['Book_Name'];?></h6>
                                    <!-- Product price-->
                                   
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                }
                    ?>
                </div>
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
