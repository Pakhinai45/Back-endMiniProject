<?php
require "connect.php";

$cid = $_POST['cid'];
$sql = "DELETE FROM `cart` WHERE cid = $cid";
$result = mysqli_query($con, $sql);

if ($result->num_rows > 0) {
    $data = array(); 
    while ($row = $result->fetch_assoc()) {
        $data[] = $row; 
    }
    echo json_encode($data);
} else {
    echo "ไม่พบข้อมูล";
}
?> 
