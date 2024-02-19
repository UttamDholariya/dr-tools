<?php
    include "confing.php";

    if(empty($_FILES['pro_img']['name'])){
        $file_name = $_POST['old_image'];
    }else{
            $errors = array();

            $file_name = $_FILES['pro_img']['name'];
            $file_size = $_FILES['pro_img']['size'];
            $file_tmp = $_FILES['pro_img']['tmp_name'];
            $file_type = $_FILES['pro_img']['type'];
            $file_ext = strtolower(end(explode('.', $file_name)));
            $extention = array("jpeg","png","jpg","webp","svg");

            if(in_array($file_ext,$extention) === false){
                $errors[] = "This Extention fail not allowed, Pleas choose a PNG and JPG";
            }
            
            if($file_size > 10485760){
                $errors[] = "File Size Must be 10mb or Lower.";
            }

            if(empty($errors) == true){
                move_uploaded_file($file_tmp,"Uplode/" . $file_name);
            }
            else{
                print_r($errors);
                die();
            }
    }
    
    // $pro_name = mysqli_real_escape_string($conn, $_POST['pro_name']); 
    // $pro_price = mysqli_real_escape_string($conn,$_POST['pro_price']); 
    // $pro_desc = mysqli_real_escape_string($conn,$_POST['pro_desc']);
    // $category = mysqli_real_escape_string($conn,$_POST['cat_id']);
    // $quantity = mysqli_real_escape_string($conn,$_POST['quantity']); 
    // $pro_detail = mysqli_real_escape_string($conn,$_POST['pro_detail']);
    // $pro_img = mysqli_real_escape_string($conn,$_POST['pro_img']);

    $sql = "UPDATE product SET pro_name='{$_POST["pro_name"]}',pro_price='{$_POST["pro_price"]}',pro_desc='{$_POST["pro_desc"]}',category_name={$_POST["category_name"]},quantity='{$_POST["quantity"]}',pro_detail='{$_POST["pro_detail"]}',pro_img='{$file_name}' WHERE id = {$_POST["id"]} ";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("Location: edi_product.php");
    }else{
        echo "Query Failed.";
    }
?>