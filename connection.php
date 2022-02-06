<?php


class connection{

    private $servername="localhost";
    private $username="root";
    private $password="";
    private $name="publishersdb";


    function getConnection(){
        $con = new mysqli($this->servername,$this->username,$this->password,$this->name);

        if($con->connect_error) {
            echo "Connection failed" .$con->connect_error . "<br>";

        }
        else {
            return $con;
        }
    }
}


?>