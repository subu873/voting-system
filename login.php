<?php require_once './layout/db.php'; ?>
<?php

if (isset($_POST['Login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['Lemail']);
    $password = mysqli_real_escape_string($conn, $_POST['Lpassword']);

    $sql = "select count(*)as total from users where email='$email' AND password ='$password'";
    $result = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($result);
    //ar_dump($result);
    if ($result['total'] == 1) {
        session_start();
        $_SESSION['login_user']=$email;
        //var_dump($_SESSION['login_user']);
        header('Location: index.php');
    }
    else{
        echo "Invalid UserId and Password";
    }
}
?>