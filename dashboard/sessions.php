<?php

session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User

//echo "session email" .$user_check;

    if(empty($user_check) && $user_check !='sharmeen@codoc.co.in') {
        header('Location: index.php');
    }

?>