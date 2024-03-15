<?php
    // Start the session and check if 'id' is set in the session variable
    session_start();
    if (isset($_SESSION['id'])) 
    {
        include "confing.php";

        $order_id = $_GET['id'];
        $user_id = isset($_SESSION['id']) ? $_SESSION['id'] : '';

        $sql = "DELETE FROM `order` WHERE order_id = $order_id ";
        $result = mysqli_query($conn, $sql);

        $sql1 = "DELETE FROM order_detail WHERE order_id = $order_id ";
        $result1 = mysqli_query($conn, $sql1);

        $sql2 = "DELETE FROM payment WHERE order_id = $order_id ";
        $result2 = mysqli_query($conn, $sql2);

        header("Location: my-account.php"); 
    } else {
        echo "Session variable 'id' is not set.";
    }
?>