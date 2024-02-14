<?php
    include "confing.php";

    $cat_id = $_GET['id'];

    $sql = "DELETE FROM product WHERE id = {$cat_id}";

    if(mysqli_query($conn,$sql))
    {
        header("Location: manage_product.php");
    }
    else
    {
        echo "<p style='color:red;margin: 10px 0;'>Can Not Delete The User Record.</p>";
    }

?>