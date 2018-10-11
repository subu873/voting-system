
<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Please Enter Both fields";
    }
    else
    {

        // Define $username and $password
        $username=$_POST['username'];
        $password=$_POST['password'];



        if ($username =='signtech' && $password=='signtech@123') {
            $_SESSION['login_user']=$username; // Initializing Session
            header("location: dashboard.php"); // Redirecting To Other Page

        } else {
            $error = "Username or Password is invalid";
        }
        // mysqli_close($connection); // Closing Connection
    }
}
?>