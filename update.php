<?php
include_once "connection.php";
Session_start();
$db = new connection();
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uname = $_POST['uname'];
$password = $_POST['cpassword'];
if(isset($_POST['submit']))
{
    try{
    $conn = $db->getConnection();
    $query = $conn->query("UPDATE users_tbl SET First_Name = '{$fname}', Last_Name = '{$lname}', Username = '{$uname}', Password = '{$password}' WHERE Username = '" . $_SESSION['username'] . "'");

    $conn->close();
    $_SESSION["username"]= $uname;
    header("Location:http://localhost/Wtproject3/profile.php");
    }
    catch(Exception $error){
            echo $error;
    } 
}
?>