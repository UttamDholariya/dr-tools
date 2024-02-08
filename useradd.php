<?php
    if(isset($_POST['button name']))
    {
        $conn = mysqli_connect('localhost', 'root', '', 'drtools') or die("Connection Faild") . mysqli_connect_error(); 
    }
?>