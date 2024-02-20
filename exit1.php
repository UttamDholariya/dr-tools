<?php
    $conn = mysqli_connect('localhost', 'root', '', 'drtools') or die("Connection Faild") . mysqli_connect_error();

    session_start();

    session_unset();

    session_destroy();

    header("Location: index.php");

?>

