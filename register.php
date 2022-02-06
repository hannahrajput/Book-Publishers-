<?php 
include_once "connection.php";
$db = new connection();
if(isset($_POST['register'])){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $uname = $_POST['uname']; 
  $password = $_POST['cpassword'];
  try{
      $conn = $db->getConnection();
      $query = $conn->query("INSERT INTO users_tbl(First_Name, Last_Name, Username, Password) VALUES('$fname', '$lname', '$uname', '$password')");
      $conn->close();
      header("Location:http://localhost/Wtproject3/login.php");
}
catch(Exception $error){
    echo $error;
}

  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Register</title>
    <style>
        body {
    font-family: "Lato", sans-serif;
}



.main-head{
    height: 150px;
    background: #FFF;
   
}

.sidenav {
    height: 100%;
    background-color: #000;
    overflow-x: hidden;
    padding-top: 20px;
}


.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 40%; 
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 80%;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #fff;
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #000 !important;
    color: #fff;
}
        </style>
</head>
<body>
<div class="sidenav">
         <div class="login-main-text">
            <h2>Book Publishers<br> Register Page</h2>
            <p>Login or register from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form method="POST">
                  <div class="form-group">
                      <label>First Name</label>
                      <input type="text" class="form-control" placeholder="First Name" name="fname" required />
                  </div>
                  <div class="form-group">
                      <label>Last Name</label>
                      <input type="text" class="form-control" placeholder="Last Name" name="lname" required />
                  </div>
                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" class="form-control" placeholder="User Name" name="uname" required />
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password" name="password" required />
                  </div>
                  <div class="form-group">
                     <label>Confirm Password</label>
                     <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword" required />
                  </div>
                  <input type="submit" class="btn btn-secondary" value="Register" name="register">
               </form>
            </div>
         </div>
      </div> 
</body>
</html>