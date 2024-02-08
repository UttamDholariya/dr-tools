<?php
$fname = $_POST['first_name']; 
$lname = $_POST['last_name']; 
$email = $_POST['email']; 
$password = $_POST['password']; 

$mysqli = new mysqli('localhost', 'root', '', 'drtools'); 

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Prepare the SQL statement
$stmt = $mysqli->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES ('$fname','$lname','$email', ?)");

// Bind the form data to the statement
$stmt->bind_param("s", $password);

// Hash the password for security
// $password = password_hash($password, PASSWORD_DEFAULT);

// Execute the statement
$stmt->execute();
header('Location: signin.php');

// Close the statement and the connection
$stmt->close();
$mysqli->close();
?>