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

        $sql1 = "INSERT INTO `order` (cart_id, sub_total, order_status, user_id) VALUES ('{$cart_id}', '{$row['cart_total']}', 'approved', '{$user_id}')";
        $result1 = mysqli_query($conn, $sql1);

        $order_id = mysqli_insert_id($conn);

        $sql2 = "SELECT * FROM cart_detail WHERE cart_id = '{$row['cart_id']}'";
        $result2 = mysqli_query($conn, $sql2);

        while($row1 = mysqli_fetch_assoc($result2))
        {
            $sql3 = "INSERT INTO order_detail (pro_id, order_id) VALUES ('{$row1['pro_id']}', '{$order_id}')";
            $result3 = mysqli_query($conn, $sql3);
        }

        $sql4 = "INSERT INTO payment (order_id, payment_amount, user_id) VALUES ('{$order_id}', '{$row['cart_total']}', '{$user_id}')";
        $result3 = mysqli_query($conn, $sql4);

        header("Location: index.php");

    } else {
        echo "Session variable 'id' is not set.";
    }
?>