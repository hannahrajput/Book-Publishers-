
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Add Events</title>
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
        include "adminnav.php";
        $db = new connection();
        if(isset($_POST['upload'])){
         $ename = $_POST['ename'];
         $estatus = $_POST['estatus'];
         $edesc = $_POST['edesc'];
         

         $conn = $db->getConnection();
         $query = $conn->query("INSERT INTO events_tbl(Event_Name, Event_Status, Event_description) VALUES ('$ename', '$estatus', '$edesc')");
         $conn->close();
         if($query == true){
             echo "<script>alert('Event Added Successfully');</script>";
         }
        }?>
        <!-- Header-->
        <header style="background-color:black;" class=" py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Add Events</h1>
                    <!-- <p class="lead fw-normal text-white-50 mb-0">For all enquiries, please Email Us using the Form below.</p> -->
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
                            <label for="ename">
                               Event Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Event name" name="ename" required="required" />
                        </div>
                        
                        <div class="form-group">
                            <label for="estatus">
                                Event Status</label>
                            <select id="subject" name="estatus" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="Ongoing Event">Ongoing Event</option>
                                <option value="Upcoming Event">Upcoming Event</option>
                                <option value="Past Event">Past Event</option>
                            </select>
                        </div><br />
                        <div class="col-md-12">
                    <input type="submit" class="btn btn-outline-dark" value="Upload" name="upload">

                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="edesc">
                                Event Description</label>
                            <textarea name="edesc" id="edesc" class="form-control" rows="7" cols="25" required="required"
                                placeholder="Desciption"></textarea>
                        </div>
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
