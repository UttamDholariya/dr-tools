<?php

$conn = mysqli_connect('localhost', 'root', '', 'drtools') or die("Connection Faild") . mysqli_connect_error();

$order_id = $_GET['order_id'];

$sql = "DELETE FROM orders WHERE order_id = {$order_id}";

if(mysqli_query($conn,$sql))
{
    header("Location: manage_order.php");
}
else
{
    echo "<p style='color:red;margin: 10px 0;'>Can Not Delete The Message Record.</p>";
}

?>