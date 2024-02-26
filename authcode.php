<?php
    
    // $host = "localhost";
    // $username = "root";
    // $password = "";
    // $database = "drtools";

    // //create a connection
    // $conn = mysqli_connect($host, $username, $password, $database);

    // //check database connection
    // if(!$conn)
    // {
    //     die("Connection failed: " . mysqli_connect_error());
    // }
    // else
    // {
    //     echo "Connected Successfully";
    // }

    // session_start();
    // if(isset($_POST['create']))
    // {
    //     $fname = mysqli_real_escape_string($conn,$_POST['first_name']); 
    //     $lname = mysqli_real_escape_string($conn,$_POST['last_name']); 
    //     $email = mysqli_real_escape_string($conn,$_POST['email']); 
    //     $password = mysqli_real_escape_string($conn,$_POST['password']); 
    //     $cpassword = mysqli_real_escape_string($conn,$_POST['cpassword']); 
     
    //     if($password == $cpassword)
    //     {
    //         $insert_query = "INSERT INTO users(first_name,last_name,email,password) VALUES('$fname','$lname','$email','$password')";
    //         $insert_query_run = mysqli_query($conn,$insert_query);
    //         if($insert_query_run)
    //         {
    //             $_SESSION['massage'] = "Registration Successfully";
    //             header('Location: ./signin.php');
    //         }
    //         else
    //         {
    //             $_SESSION['massage'] = "Somthing Worng";
    //             header('Location: ./signup.php');
    //         }
    //     }
    //     else
    //     {
    //         $_SESSION['message'] = "Password do not match";
    //         header('Location: signup.php');
    //     }
    // }

?>
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
                $sql1 = "INSERT INTO users (first_name, last_name, email, password,user_type) VALUES ('{$fname}','{$lname}','{$email}','{$password}','1')";

                if(mysqli_query($conn,$sql1))
                {
                    header('Location: signin.php');   
                }
            }
        }
    ?>