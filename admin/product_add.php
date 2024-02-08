<?php

    // $pro_name = $_POST['pro_name']; 
    // $pro_price = $_POST['pro_price']; 
    // $pro_desc = $_POST['pro_desc']; 
    // $quantity = $_POST['quantity']; 
    // $pro_details = $_POST['pro_details'];
    // $pro_img = $_POST['pro_img'];

    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $database = "drtools";

    // //create a connection
    // $conn = mysqli_connect($servername, $username, $password, $database);

    // //check database connection
    // if($conn)
    // {
    //     die("Connection failed: " . mysqli_connect_error());
    // }

    // $sql = "INSERT INTO product (pro_name,pro_price,pro_desc,quantity,pro_details,pro_img) VALUES
    //  ('$pro_name','$pro_price','$pro_desc','$quantity','$pro_details','$pro_img')";

    //  if(mysqli_query($conn,$sql))
    //  {
        
    //     echo "connected";
    //  }
    //  else
    //  {
    //     echo "not connected" . $sql . <br> . mysqli_error($conn);

    //  }
    //  mysqli_close($conn);
?>
<?php
    if(isset($_POST['pro_submit']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'drtools') or die("Connection Faild") . mysqli_connect_error();
        
        $pro_name = mysqli_real_escape_string($conn, $_POST['pro_name']); 
        $pro_price = mysqli_real_escape_string($conn,$_POST['pro_price']); 
        $pro_desc = mysqli_real_escape_string($conn,$_POST['pro_desc']); 
        $quantity = mysqli_real_escape_string($conn,$_POST['quantity']); 
        $pro_details = mysqli_real_escape_string($conn,$_POST['pro_details']);
        $pro_img = mysqli_real_escape_string($conn,$_POST['pro_img']);

        
        $sql = "INSERT INTO product (pro_name,pro_price,pro_desc,quantity,pro_details,pro_img) VALUES ('{$pro_name}','{$pro_price}','{$pro_desc}','{$quantity}','{$pro_details}','{$pro_img}')";
        $result = mysqli_query($conn,$sql);

            if($result)
            {
                  ?>
                  <script> alert("Data Inserted Successfully");</script>

                  <?php
            }
            else
            {
                ?>
                  <script> alert("Data Not Inserted ");</script>
                  <?php
            }
        
    }
?>