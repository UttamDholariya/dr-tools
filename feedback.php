<?php
        if(isset($_POST['feed']))
        {
            $conn = mysqli_connect('localhost', 'root', '', 'drtools') or die("Connection Faild") . mysqli_connect_error();
            
            $name = mysqli_real_escape_string($conn,$_POST['name']);  
            $email = mysqli_real_escape_string($conn,$_POST['email']); 
            $number = mysqli_real_escape_string($conn,$_POST['number']);
            $message = mysqli_real_escape_string($conn,md5($_POST['message'])); 
            
            $sql = "INSERT INTO feedback (name, email, number, message) VALUES ('{$name}','{$email}','{$number}','{$message}')";
            $result = mysqli_query($conn,$sql) or die("Query Failed.");

            if(mysqli_num_rows($result) == 0)
            {
                $sql1 = 

                if(mysqli_query($conn,$sql1))
                {
                    header('Location: index.php');   
                }
            }
            else
            {
                echo "<p style='color:red;text-align:center;margin: 10px 0;'>Email Already Exists. </p>";
            }
        }
?>