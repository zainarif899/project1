<?php

class database
{
    function connect()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "project1";

        $conn = new mysqli($servername, $username,$password,$database);

        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // echo "Connected successfully";
    }
}



?>