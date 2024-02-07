<?php
    session_start();
    include '../admin/php/confing.php';

    if(isset($_POST['create']))
    {
        $fname = mysqli_real_escape_string($conn,$_POST['f_name']); 
        $lname = mysqli_real_escape_string($conn,$_POST['l_name']); 
        $email = mysqli_real_escape_string($conn,$_POST['username']); 
        $password = mysqli_real_escape_string($conn,$_POST['password']); 
        $cpassword = mysqli_real_escape_string($conn,$_POST['cpassword']); 
     
        if($password == $cpassword)
        {
            $insert_query = "INSERT INTO users(f_name,l_name,username,password) VALUES('$fname','$lname','$email','$password')";
            $insert_query_run = mysqli_query($conn,$insert_query);
            if($insert_query_run)
            {
                $_SESSION['massage'] = "Registration Successfully";
                header('Location: signin.php');
            }
            else
            {
                $_SESSION['massage'] = "Somthing Worng";
                header('Location: signup.php');
            }
        }
        else
        {
            $_SESSION['message'] = "Password do not match";
            header('Location: signup.php');
        }
    }

?>