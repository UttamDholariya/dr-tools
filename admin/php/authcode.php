<?php

    include('../confing.php');
    if(isset($_POST['signup']))
    {
        $name = mysqli_real_escape_string($conn,$_POST['f_name']); 
        $name = mysqli_real_escape_string($conn,$_POST['l_name']); 
        $name = mysqli_real_escape_string($conn,$_POST['username']); 
        $name = mysqli_real_escape_string($conn,$_POST['password']); 
        $name = mysqli_real_escape_string($conn,$_POST['cpassword']); 
        $name = mysqli_real_escape_string($conn,$_POST['mobile']); 
        $name = mysqli_real_escape_string($conn,$_POST['address']); 
        $name = mysqli_real_escape_string($conn,$_POST['city']); 

    }
?>