<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Add Books</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
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

<?php include "adminnav.php";
  $db = new connection();
  
  if(isset($_POST['add'])){
    $bname = $_POST['bname'];
    $aname = $_POST['aname'];
    $category = $_POST['category'];
    $image = $_POST['image'];
    $desc = $_POST['desc'];
    $conn = $db->getConnection();
    $query = $conn->query("INSERT INTO booksinfo_tbl(Book_Name, Author_Name, Category, Book_Image, Book_Description) VALUES ('$bname', '$aname', '$category', '$image', '$desc')  ");
    $conn->close();
    
    echo "<script>alert(`Book Added Successfully`);</script>";
  }
?>
<br/>
<div class="container contact">
	<div class="row">
		<div class="col-md-3" >
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
				<h2>Add Books</h2>
				<h6>Sharing education, sharing a book... that's what changes the world</h6>
			</div>
		</div>
		<div class="col-md-9">
			<div class="contact-form">
             <form method = "POST">
				<div class="form-group">
				  <label class="control-label col-sm-2" for="bname">Book Name:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="bname" placeholder="Enter Book Name" name="bname" required/>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="aname">Author Name:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="aname" placeholder="Enter Author Name" name="aname" required/>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" >Category:</label>
				  <div class="col-sm-10">
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
                     </select>				  
                  </div>
				</div>
                <div class="form-group">
				  <label class="control-label col-sm-2" for="image">Image:</label>
				  <div class="col-sm-10">
					<input type="file" class="form-control" id="image" placeholder="" name="image" required/> 
				  </div>
				</div>
                
				
				<div class="form-group">
				  <label class="control-label col-sm-2" for="desc">Book Description:</label>
				  <div class="col-sm-10">
					<textarea class="form-control" rows="7" id="desc" name="desc" required></textarea>
				  </div>
				</div>
                <br/>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn b"  value="Add" name="add">
				  </div>
				</div>
             </form>
			</div>
		</div>
	</div>
</div><br/>
<div>
<footer style="background-color:black;" class="py-5">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy;2022 All Rights Reserved By Ternion(Web Trainees)</p></div>
        </footer>
            </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>