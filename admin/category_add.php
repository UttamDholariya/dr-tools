<?php
    if(isset($_POST['add']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'drtools') or die("Connection Faild") . mysqli_connect_error();
        
        if(isset($_FILES['cat_icon'])){
            $errors = array();

            $fail_name = $_FILES['cat_icon']['name'];
            $fail_size = $_FILES['cat_icon']['size'];
            $fail_tmp = $_FILES['cat_icon']['tmp_na'];
            $fail_type = $_FILES['cat_icon']['type'];
            $fail_ext = strtolower(end(explode('.',$fail_name)));
            $extention = array("jpeg","png","jpg","webp");

            if(in_array($fail_ext,$extention) === false){
                $errors[] = "This Extention fail not allowed, Pleas choose a PNG and JPG";
            }
            
            if($fail_size > 10485760){
                $errors[] = "File Size Must be 2mb or Lower.";
            }

            if(empty($errors) == true){
                move_uploaded_file($fail_tmp,"Uplode/" . $fail_name);
            }
            else{
                print_r($errors);
                die();
            }
        }   

        $cat_name = mysqli_real_escape_string($conn, $_POST['cat_name']); 
        $cat_icon = mysqli_real_escape_string($conn,$_POST['cat_icon']);

        
        $sql = "INSERT INTO category (cat_name,cat_icon) VALUES ('{$cat_name}','{$fail_name}')";

        if( mysqli_query($conn,$sql)){
             header("Location: add_product.php");
        }
        else{
            echo " <div class='alert alert-danger'>Query Failed </div>";
        }
        
    }
?>

