<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Book Details</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
    <?php 
        include "nav.php";
        $id= $_GET['Id'];
        $db = new connection();
        $conn = $db->getConnection();
        $query = $conn->query("SELECT * FROM booksinfo_tbl WHERE Id = $id");
        $conn->close();
        while($row = mysqli_fetch_assoc($query)){

        
        ?>
    <div class="card" style="border-color:white;">
    <div class="row ">
    <div class="col-md-4">
            <img src="<?php echo $row['Book_Image']; ?>" class="w-100" style="height:100%;">
          </div>
          <div class="col-md-8 px-3">
            <div class="card-block px-3">
              <h3 class="card-title"><b>Name:</b>&nbsp;&nbsp;<?php echo $row['Book_Name']; ?></h3>
              <br/>
              <h4><b>Author:</b>&nbsp;&nbsp;<?php echo $row['Author_Name']; ?></h4>
              <br/>
              
              <br/>
              <h4 class="card-text"><b>Description:</b>&nbsp;&nbsp;<?php echo $row['Book_Description']; ?></h4>
              <br/>
              
              <?php
              }
              ?>
            </div>
          </div>
    </div>
    
    </div>
    <footer style="background-color:black;" class="py-5">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy;2022 All Rights Reserved By Ternion(Web Trainees)</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>