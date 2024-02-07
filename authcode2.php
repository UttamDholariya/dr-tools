<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "drtools";

    //create a connection
    $conn = mysqli_connect($host, $username, $password, $database);

    //check database connection
    if(!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    else
    {
        echo "Connected Successfully";
    }  
         
    if(isset($_POST['login'])){    
    $email = mysqli_real_escape_string($conn,$_POST['email']); 
    $password = mysqli_real_escape_string($conn,$_POST['password']); 

    $sql = "SELECT * FROM users where email='$email'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_fetch_assoc($result);

    if($num == 1)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            if(password_verify($password,$row['password']))
            {
                session_start();
                $_SESSION['login'] = true;
                $_SESSION['email'] = $email;

                header("Location: index.php");
            }
        }
    }
}
?>