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
            $gender = mysqli_real_escape_string($conn,$_POST['gender']); 
            $dob = mysqli_real_escape_string($conn,$_POST['dob']); 
            $address = mysqli_real_escape_string($conn,$_POST['address']); 
            $postal_code = mysqli_real_escape_string($conn,md5($_POST['postal_code'])); 
            
            
            $sql = "INSERT INTO users (gender, dob, phone_no, address,postal_code) VALUES ('{$gender}','{$dob}','{$address}','{phone_no}','{$postal_code}') WHERE id = {$id};";
            $sql .= "UPDATE users SET first_name='{$_POST["first_name"]}',last_name='{$_POST["last_name"]}',email='{$_POST["email"]}',gender={$gender},dob='{$_POST["dob"]}',phone_no='{$_POST["phone_no"]}',address='{$_POST["address"]}',postal_code='{$_POST["postal_code"]}' WHERE id = {$id}";
            if(mysqli_multi_query($conn,$sql))
            {
                header("Location: my-account.php");   
            }else{
                echo "Query Failed.";
            }

        }
?>