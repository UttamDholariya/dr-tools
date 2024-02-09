<?php
        if(isset($_POST['create']))
        {
            $conn = mysqli_connect('localhost', 'root', '', 'drtools') or die("Connection Faild") . mysqli_connect_error();
            
            $fname = mysqli_real_escape_string($conn,$_POST['first_name']); 
            $lname = mysqli_real_escape_string($conn,$_POST['last_name']); 
            $email = mysqli_real_escape_string($conn,$_POST['email']); 
            $password = mysqli_real_escape_string($conn,md5($_POST['password'])); 
            $cpassword = mysqli_real_escape_string($conn,md5($_POST['cpassword']));
            
            $sql = "SELECT * FROM users WHERE email = '{$email}'";
            $result = mysqli_query($conn,$sql) or die("Query Failed.");

            if(mysqli_num_rows($result) > 0)
            {
                echo "<p style='color:red;text-align:center;margin: 10px 0;'>Email Already Exists. </p>";
            }
            else
            {
                $sql1 = "INSERT INTO users (first_name, last_name, email, password) VALUES ('{$fname}','{$lname}','{$email}','{$password}')";

                if(mysqli_query($conn,$sql1))
                {
                    header('Location: signin.php');   
                }
            }
        }
?>