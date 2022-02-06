
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Author Resquest Form</title>
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
        include "nav.php";
        $db = new connection();
        if(isset($_POST['submit'])){
         $bname = $_POST['bname'];
         $aname = $_POST['aname'];
         $email = $_POST['email'];
         $category = $_POST['category'];
         

         $conn = $db->getConnection();
         $query = $conn->query("INSERT INTO author_proposal_tbl(Book_Name, Author_Name, Email, Category) VALUES ('$bname', '$aname', '$email', '$category')");
         $conn->close();
         if($query == true){
             echo "<script>alert('Your Request Has been sent');</script>";
         }
        }?>
        <!-- Header-->
        <header style="background-color:black;" class=" py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Request Form</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Send Us a Request If you want to Upload a Book.</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
            <form method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Book Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Book name" name="bname" required="required" />
                        </div>
                        <div class="form-group">
                        <label for="name">
                                Author Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Author name" name="aname" required="required" />
                        </div>
                        <div class="form-group">
                        <label for="email">
                                Email</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email"name="email" required="required" /></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="subject">
                                Category</label>
                                <select name="category" id="category" class="form-control"required>
                       <option value="Php">Php</option>
                       <option value="Javascript">Javascript</option>
                       <option value="Java">Java</option>
                       <option value="Python">Python</option>
                       <option value="Fortran">Fortran</option>
                       <option value="HTML">HTML</option>
                       <option value="CSS">CSS</option>
                       <option value="C++">C++</option>
                       <option value=".Net">.Net</option>
                       <option value="Networking">Networking</option>
                       <option value="Shell Prog.">Shell Programming</option>
                       <option value="DBMS">DBMS</option>
                       <option value="Data Mining">Data Mining</option>
                       <option value="OS">OS</option>
                       <option value="AI">AI</option>
                       <option value="Data Sci.">Data Science</option>
                     </select><br/>
                     <input type="submit" class="btn btn-outline-dark" value="Send" name="submit">

                        </div>
                    </div>
                    <div class="col-md-12">

                    </div>
                </div>
                </form>
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
