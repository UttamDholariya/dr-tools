<?php
    if(isset($_POST['pro_submit']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'drtools') or die("Connection Faild") . mysqli_connect_error();
        
        if(isset($_FILES['pro_img'])){
            $errors = array();

            $file_name = $_FILES['pro_img']['name'];
            $file_size = $_FILES['pro_img']['size'];
            $file_tmp = $_FILES['pro_img']['tmp_name'];
            $file_type = $_FILES['pro_img']['type'];
            $file_ext = end(explode('.',$file_name));
            $extention = array("jpeg","png","jpg","webp");

            if(in_array($file_ext,$extention) === false){
                $errors[] = "This Extention fail not allowed, Pleas choose a PNG and JPG";
            }
            
            if($file_size > 10485760){
                $errors[] = "File Size Must be 2mb or Lower.";
            }

            if(empty($errors) == true){
                move_uploaded_file($file_tmp,"Uplode/".$file_name);
            }
            else{
                print_r($errors);
                die();
            }
        }   
        
        $sql = "INSERT INTO product(pro_name,pro_price,pro_desc,category_name,quantity,pro_detail,pro_img) VALUES ('{$pro_name}','{$pro_price}','{$pro_desc}',{$category},'{$quantity}','{$pro_detail}','{$file_name}');";
        $sql .= "UPDATE category SET product_count = product_count + 1 WHERE id = {$category}";
   
        if(mysqli_multi_query($conn,$sql)){
             header("Location: add_product.php");
        }
        else{
            echo " <div class='alert alert-danger'>Query Failed </div>";
        }
        
    }
?>

