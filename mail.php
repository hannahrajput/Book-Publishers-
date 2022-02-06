<?php
if(isset($_GET['accept'])){
    // echo "hiii ";
       
        echo "<script>alert('hiii battery');</script>";   
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
echo "<script>alert('hiii battery');<script>";
mail("hannahrajput1803@gmail.com","My subject",$msg);


   
}
?>