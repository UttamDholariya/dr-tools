<?php
  
  $fname = $_POST['first_name']; 
  $lname = $_POST['last_name']; 
  $email = $_POST['email']; 
  $password = $_POST['password']; 
  $//cpassword = $_POST['cpassword']; 

    $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "drtools";

      //Create Connection
      $conn = mysqli_connect($servername,$username,$password,$dbname);

      //Check Connection
      if(!$conn)
      {
          die("Connection Failed :") . mysqli_connect_error();
      }

      if($password == $cpassword)
      {
      $sql = "INSERT INTO users(first_name,last_name,email,password) VALUES('$fname','$lname','$email','$password')";
      $insert_query_run = mysqli_query($conn,$sql);
      if($insert_query_run)
            {
                $_SESSION['massage'] = "Registration Successfully";
                header('Location: index.php');
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

      if ($insert_query_run($conn,$sql))
      {
        echo "New Record inserted Successfully";
      }
      else
      {
        echo "Error" . $sql . "<br>" . mysqli_error($conn);
      }
      mysqli_close($conn);

?>