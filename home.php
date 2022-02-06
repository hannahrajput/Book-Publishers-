

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Home</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script>
            function show(event){
                document.getElementById('home').style.display="none";
                document.getElementById('event').style.display="block";

            }

            function eventload(event){
                
                document.getElementById('event').style.display="none";

            }
        </script>
        <style>
             .b{
                color: gray;
                background-color: black;
                border-color: #212529;
               }
               .b:hover{
                color: #fff;
               background-color: #212529;
              border-color: #212529;
               }
        </style>
    </head>
    <body>
        <!-- Navigation-->
        <?php include "nav.php";
        ?>
        <!-- Header-->
     <div id="home">
        <header style="background-color:black;" class=" py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Connect to the Readers</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Through Our Publishing</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php
                    $db = new connection();
                    $conn = $db->getConnection();
                    $query = $conn->query("SELECT * FROM booksinfo_tbl ");
                    $conn->close();
                    while($row = mysqli_fetch_assoc($query)){
                        //  echo $row['Book_Image'];
                    
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
                                <div class="text-center"><button type="button" class="btn btn-outline-dark mt-auto" onclick="document.location='bookdetails.php?Id='+<?php echo $row['Id'];?>">View</button></div>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>
     </div>
     <div id="event" style="display:none;">
     <header style="background-color:black;" class=" py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Events</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Discover something new.</p>
                </div>
            </div>
        </header>
        <?php
        $db = new connection();
        $conn = $db->getConnection();
        $query = $conn->query("SELECT * FROM events_tbl");
        while($row=mysqli_fetch_assoc($query)){
            ?>
        <div class="card text-center">
  <div class="card-header">
    <b><?php echo $row['Event_Name']; ?></b>
  </div>
  <div class="card-body">
    <!-- <h5 class="card-title">Special title treatment</h5> -->
    <p class="card-text"><?php echo $row['Event_description'];?></p>
  </div>
  <div class="card-footer text-muted">
    <?php echo $row['Event_Status'];?>
  </div>
</div>
<div style="background-color:dimgray;"><br/></div>
<?php
}?>
                </div>
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
