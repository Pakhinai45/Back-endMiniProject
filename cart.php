<?php
require "connect.php";
if (!$con) {
    echo "connection error";
}

$pid = $_POST['pid'];
$tid = $_POST['tid'];
$amount = $_POST['amount'];
$sql = "SELECT * FROM cart";

$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);

if ($count == 1) {
    echo json_encode('Error');
} else {
    $insert = "INSERT INTO  `cart`(`pid`, `tid`, `amount`)VALUES('$pid','$tid','$amount')";
    $query = mysqli_query($con, $insert);
    if ($query) {
        echo json_encode('Succeed');
    }
}
