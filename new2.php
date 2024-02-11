<?php
// $login = false;
// $email = $_POST['email'];
// $password = $_POST['password'];

// $mysqli = new mysqli('localhost', 'root', '', 'drtools');

// if ($mysqli->connect_error) {
//     die("Connection failed: " . $mysqli->connect_error);
// }

// // Prepare the SQL statement
// $stmt = $mysqli->prepare("SELECT id, password FROM users WHERE email = ?");

// // Bind the email to the prepared statement
// $stmt->bind_param("s", $email);

// // Execute the statement
// $stmt->execute();

// // Get the result
// $result = $stmt->get_result();

// // Check if the user exists
// if ($result->num_rows > 0) {
//     // Fetch the user data
//     $row = $result->fetch_assoc();
//     // echo $row['password'];
//     // Verify the password
//     if($row['password'] == $password)
//     {
//         $login = true;
//         session_start();
//         $_SESSION['user'] = true;
//         $_SESSION['email'] = $email;
//         $_SESSION['username'] = $row['username']
//         header("Location: ../index.php");
//     } else {
//         // Password is incorrect
//         echo $hashed_password;
//         echo "Invalid email or password";
//     }
// } else {
//     // User does not exist
//     echo "No Record Found";
// }

// // Close the statement and the connection
// $stmt->close();
// $mysqli->close();
?>
<?php
    if(isset($_POST['login'])){

        $conn = mysqli_connect('localhost', 'root', '', 'drtools') or die("Connection Faild") . mysqli_connect_error();

        $username = mysqli_real_escape_string($conn,$_POST['email']);
        $password = md5($_POST['password']);

        $sql = "SELECT id ,email FROM users WHERE email = '{$username}' AND password = '{$password}'";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){

                session_start();
                $_SESSION['email'] = $row['email'];
                $_SESSION['id'] = $row['id'];

                header("Location: index.php");
            }

        }
        else{

            echo '<div class="alert alert-danger">Username and Password are not Matched </div>';
        }
    }
?>