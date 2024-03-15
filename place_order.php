<?php
    // Start the session and check if 'id' is set in the session variable
    session_start();
    if (isset($_POST['place_order'])) 
    {
        include "confing.php";

        $cart_id = $_POST['cart_id'];
        $user_id = isset($_SESSION['id']) ? $_SESSION['id'] : '';

        $sql = "SELECT * FROM cart WHERE user_id = $user_id ";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        $sql1 = "INSERT INTO orders (cart_id, sub_total, order_status, user_id) VALUES ('{$cart_id}', '{$row['cart_total']}', 'approved', '{$user_id}')";
        $result1 = mysqli_query($conn, $sql1);
        
        $order_id = mysqli_insert_id($conn);

        $sql2 = "INSERT INTO payment (order_id, payment_amount, user_id) VALUES ('{$order_id}', '{$row['cart_total']}', '{$user_id}')";
        $result2 = mysqli_query($conn, $sql2);

        header("Location: index.php");

    } else {
        echo "Session variable 'id' is not set.";
    }
?>