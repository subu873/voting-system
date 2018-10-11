<?php require_once './layout/db.php'; ?>
<?php

if (isset($_POST['Register'])) {
    $fName = mysqli_real_escape_string($conn, $_POST['fname']);
    $lName = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "INSERT INTO `users`(`fname`, `lname`, `email`, `password`) VALUES ('$fName','$lName','$email','$password')";

    //var_dump($sql);
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Registered Successfully";

    } else {

        echo "Something went wrong!";
    }

}

?>

