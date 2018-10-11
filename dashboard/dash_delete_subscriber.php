<?php require '../layout/db.php'; ?>
<?php
$id=$_GET['id'];
$sql="DELETE FROM `subscribers` WHERE id=$id";
$result = mysqli_query($conn, $sql);
header('location:dash_subscribers.php');
?>

