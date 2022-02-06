<?php 
 Session_start();
include_once "connection.php";
$db = new connection();
if(isset($_POST['login'])){
  $uname = $_POST['uname']; 
  $password = $_POST['password'];
  $admin = "Admin";
  $adminpass = "admin123";
  $conn = $db->getConnection();
  $query = $conn->query("SELECT * FROM users_tbl WHERE Username = '$uname' AND Password = '$password'");
    $result=mysqli_num_rows($query);
    $row=$query->fetch_array();
 try{
  if($uname == $admin && $password==$adminpass){
    $query = $conn->query("SELECT * FROM admin_tbl WHERE Username = '$uname' AND Password = '$password'");
    $result=mysqli_num_rows($query);
    $row=$query->fetch_array();
    $_SESSION["username"]=$row['Username'];
    header("Location:http://localhost/Wtproject3/admindash.php");
    
  }
  elseif($row['Username']==$uname && $row['Password']==$password){
    
    $_SESSION["username"]=$row['Username'];
    header("Location:http://localhost/Wtproject3/home.php");

  }
  else{
    echo '<script>alert("Incorrect Credentials");</script>';

  }
}
catch(Exception $error){
    
}
  $conn->close();
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
    <title>Login</title>
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
            <h2>Book Publishers<br> Login Page</h2>
            <p>Login or register from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form method="POST">
                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" class="form-control" placeholder="User Name" name="uname" required />
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password" name="password" required />
                  </div>
                  <input type="submit" class="btn btn-secondary" value="Login" name="login">
                  <button type="button" class="btn btn-secondary" onclick="document.location='register.php'" value="Register" name="register">Register</button>
               </form>
            </div>
         </div>
      </div> 
</body>
</html>