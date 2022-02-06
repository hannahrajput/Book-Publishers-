<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Author Requests</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script>
          
        </script>
    </head>
    <body>
        <!-- Navigation-->
        <?php include "adminnav.php";?>
        <section class="py-5">
        <h2 style="text-align: center;">Requests to Upload Books</h2>

            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <table class="table table-dark table-hover">
                <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Book Name</th>
      <th scope="col">Author Name</th>
      <th scope="col">Email</th>
      <th scope="col">Category</th>
      <th scope="col"></th>
    
    </tr>
  </thead>
  <?php
  $db = new connection();
  $conn = $db->getConnection();
  $query = $conn->query("SELECT * FROM author_proposal_tbl");
  if(mysqli_num_rows($query) > 0){
      while($row=mysqli_fetch_assoc($query)){


  ?>
  <tbody>
      <form>
    <tr>
      <th scope="row"><?php echo $row['Id'];?></th>
      <td><?php echo $row['Book_Name'];?></td>
      <td><?php echo $row['Author_Name'];?></td>
      <td><?php echo $row['Email'];?></td>
      <td><?php echo $row['Category'];?></td>
      <td><button type="button" class="btn btn-secondary"  value="" name="accept">Approve</button>
</td>
    </tr>
      </form>
  </tbody>
 <?php
       }
    }

    if(isset($_GET['accept'])){
        // echo "<script>alert(`hiii battery`);</script>";   
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email

mail("laptop.mama007@gmail.com","My subject",$msg);
// echo "<script>alert('hiii battery');</script>";

    }
    ?>
                </table>


                </div>
            </div>

        </section>

        <footer style="background-color:black;" class="py-5">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy;2022 All Rights Reserved By Ternion(Web Trainees)</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>