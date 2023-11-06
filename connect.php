<?php
$db_name = "reserve_table_app";
$db_user = "root";
$db_pass = "";
$db_host = "localhost:3309";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

