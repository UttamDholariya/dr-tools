<?php
        if(isset($_POST['save']))
        {
           // $conn = mysqli_connect('localhost', 'root', '', 'drtools') or die("Connection Faild") . mysqli_connect_error();
            include "confing.php";
            // $fname = mysqli_real_escape_string($conn,$_POST['first_name']); 
            // $lname = mysqli_real_escape_string($conn,$_POST['last_name']); 
            // $email = mysqli_real_escape_string($conn,$_POST['email']); 
            // $password = mysqli_real_escape_string($conn,md5($_POST['password'])); 
            // $cpassword = mysqli_real_escape_string($conn,md5($_POST['cpassword']));
            
            // $sql = "SELECT * FROM users WHERE email = '{$email}'";
           

            // if(mysqli_num_rows($result) > 0)
            // {
            //     echo "<p style='color:red;text-align:center;margin: 10px 0;'>Email Already Exists. </p>";
            // }
            // else
            // {
              
            // }
            session_start(); 
            $id = $_SESSION['id'];
            $gender=$_POST["gender"];
            $sql = "UPDATE users SET first_name='{$_POST["first_name"]}',last_name='{$_POST["last_name"]}',email='{$_POST["email"]}',gender={$gender},dob='{$_POST["dob"]}',phone_no='{$_POST["phone_no"]}',address='{$_POST["address"]}',postal_code='{$_POST["postal_code"]}' WHERE id = {$id}";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                header("Location: my-account.php");   
            }else{
                echo "Query Failed.";
            }

        }
?>