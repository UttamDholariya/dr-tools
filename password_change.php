<?php
    session_start();
    include "confing.php";
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    //Load Composer's autoloader
    require 'vendor/autoload.php';
    send_password_reset($get_name,$get_email)
    {
        $mail = new PHPMailer(true);                   //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'uttamdholariya1@gmail.com';                     //SMTP username
        $mail->Password   = 'secret';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('uttamdholariya1@gmail.com', $get_name);
        $mail->addAddress($get_mail);     //Add a recipient
        
        $mail->IsHTML(true);
        $mail->Subject = "Reset Password Notification";

        $email_templet = "
            <h2> Hello </h2>
            <h3> You are  receving this email because we received a password reset for your account.</h3>
            <br/><br/>
            <a href="http:/localhost:3000/reset-password.php/?email=$get_email">Click me</a>
        ";
    }
    if(isset($_POST['forgot']))
    {
        $email = mysqli_escape_string($conn,$_POST['email']);
        //$token = md5(rand());

        $check_email = "SELECT email FROM users WHERE email = '{$email}' LIMIT 1";
        $check_email_run = mysqli_query($conn,$check_email);

        if(mysqli_num_rows($check_email_run) > 0)
        {
            $row = mysqli_fetch_array($check_email_run);
            $get_name = $row['first_name'] . " " . $row['last_name'];
            $get_email = $row['email'];

            // $update_token = "UPDATE users SET verify_token = '$token' WHERE email = '{$get_email}' LIMIT 1";
            // $update_token_run = mysqli_query($conn,$update_token);

            // if($update_token_run)
            // {
            //     send_password_reset($get_name,$get_email,$token);
            //     $_SESSION['status'] = "We e-mailed you a password reset link";
            //     header("Location: forgot-passwoed.php");
            //     exit(0);
            // }
            // else
            // {
            //     $_SESSION['status'] = "Something went Wrong. #1";
            //     header("Location: forgot-passwoed.php");
            //     exit(0);
            // }
        }
        else
        {
            $_SESSION['status'] = "No Eamil Found";
            header("Location: forgot-passwoed.php");
            exit(0);
        }
    }
?>