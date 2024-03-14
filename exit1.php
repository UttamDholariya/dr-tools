<?php
    $conn = mysqli_connect('localhost', 'root', '', 'drtools') or die("Connection Faild") . mysqli_connect_error();

    session_start();

    unset($_SESSION['loggedin']);

    // session_destroy();

    header("Location: index.php");

?>

