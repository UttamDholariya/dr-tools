<?php
        if(isset($_POST['feed']))
        {
           // $conn = mysqli_connect('localhost', 'root', '', 'drtools') or die("Connection Faild") . mysqli_connect_error();
            include "confing.php";
            
            session_start(); 
            $id = $_SESSION['id']; 
            $message = mysqli_real_escape_string($conn,$_POST['message']);  
        
            $sql = "UPDATE feedback SET name='{$_POST["name"]}',email='{$_POST["email"]}',phone='{$_POST["phone"]}',message='{$_POST["message"]}' WHERE feedback_id = {$feedback_id}";
            if(mysqli_query($conn,$sql))
            {
                header("Location: contact-us.php");   
            }else{
                echo "Query Failed.";
            }

        }
?>