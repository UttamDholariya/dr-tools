<?php
        if(isset($_POST['feed']))
        {
            include "confing.php";
            
            $full_name = mysqli_real_escape_string($conn,$_POST['full_name']); 
            $email = mysqli_real_escape_string($conn,$_POST['email']); 
            $phone = mysqli_real_escape_string($conn,md5($_POST['phone'])); 
            $message = mysqli_real_escape_string($conn,md5($_POST['message']));
            
            $sql = "INSERT INTO contactus (full_name,email, phone,message) VALUES ('{$full_name}','{$email}','{$phone}','{$message})";
            if(mysqli_query($conn,$sql))
            {
                header('Location: contact-us.php');   
            }
            else{
                echo "Query Failed";
            }
        }
    ?>

<?php
        // if(isset($_POST['feed']))
        // {
        //    // $conn = mysqli_connect('localhost', 'root', '', 'drtools') or die("Connection Faild") . mysqli_connect_error();
        //     include "confing.php";
            
        //     session_start(); 
        //     $id = $_SESSION['id']; 
        //     $message = mysqli_real_escape_string($conn,$_POST['message']);  
        
        //     $sql = "UPDATE feedback SET name='{$_POST["name"]}',email='{$_POST["email"]}',phone='{$_POST["phone"]}',message='{$_POST["message"]}' WHERE feedback_id = {$feedback_id}";
        //     if(mysqli_query($conn,$sql))
        //     {
        //         header("Location: contact-us.php");   
        //     }else{
        //         echo "Query Failed.";
        //     }

        // }
?>
