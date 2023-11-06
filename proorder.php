<?php
require "connect.php";
if (!$con) {
    echo "connection error";
}

$pid = $_POST['pid'];
$total = $_POST['total'];
$sql = "SELECT * FROM proorder";

$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);

if ($count == 1) {
    echo json_encode('Error');
} else {
    $insert = "INSERT INTO `proorder`(`pid`, `total`) VALUES ('$pid','$total')";
    $query = mysqli_query($con, $insert);
    if ($query) {
        echo json_encode('Succeed');
    }
}
