<?php
    if(isset($_POST['pro_submit']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'drtools') or die("Connection Faild") . mysqli_connect_error();
        
        if(isset($_FILES['pro_img'])){
            $errors = array();

            $fail_name = $_FILES['pro_img']['name'];
            $fail_size = $_FILES['pro_img']['size'];
            $fail_tmp = $_FILES['pro_img']['tmp_name'];
            $fail_type = $_FILES['pro_img']['type'];
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

        $pro_name = mysqli_real_escape_string($conn, $_POST['pro_name']); 
        $pro_price = mysqli_real_escape_string($conn,$_POST['pro_price']); 
        $pro_desc = mysqli_real_escape_string($conn,$_POST['pro_desc']);
        $quantity = mysqli_real_escape_string($conn,$_POST['quantity']); 
        $pro_detail = mysqli_real_escape_string($conn,$_POST['pro_detail']);
        $pro_img = mysqli_real_escape_string($conn,$_POST['pro_img']);

        
        $sql = "INSERT INTO product (pro_name,pro_price,pro_desc,quantity,pro_detail,pro_img) VALUES ('{$pro_name}','{$pro_price}','{$pro_desc}','{$quantity}','{$pro_detail}','{$fail_name}');";
        $sql .= "UPDATE category SET product_count = product_count + 1 WHERE id = {$category}";
   
        if(mysqli_multi_query($conn,$sql)){
            // header("Location: add_product.php");
        }
        else{
            echo " <div class='alert alert-danger'>Query Failed </div>";
        }
        
    }
?>

