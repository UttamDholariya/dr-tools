<?php
        if(isset($_POST['feed']))
        {
            $conn = mysqli_connect('localhost', 'root', '', 'drtools') or die("Connection Faild") . mysqli_connect_error();
            $name = mysqli_real_escape_string($conn,$_POST['name']); 
            $email = mysqli_real_escape_string($conn,$_POST['email']); 
            $phone = mysqli_real_escape_string($conn,md5($_POST['phone'])); 
            $message = mysqli_real_escape_string($conn,md5($_POST['message']));
            
            $sql = "INSERT INTO contactus (name,email, phone,message) VALUES ('{$name}','{$email}','{$phone}','{$message})";
            $result = mysqli_query($conn,$sql) or die("Query Failed.");

            if(mysqli_num_rows($result) > 0)
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
