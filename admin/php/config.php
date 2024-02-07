<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "dr-tools";

    //create a connection
    $conn = mysqli_connect($host,$username,$password,$database);

    //check database connection
    if(!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    else
    {
        echo "Connected Successfully";
    }

?>