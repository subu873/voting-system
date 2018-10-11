<?php require_once './layout/db.php' ?>
<?php
$ImageId = $_GET['id'];

$sql = "UPDATE `images` SET `vote`=vote+1 WHERE id=$ImageId";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo $ImageId;
} else {
    echo "Not updated";
}

