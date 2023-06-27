<?php
include('connection.php');
session_start();

$sql="CREATE TABLE users
    (username VARCHAR(190) NOT NULL PRIMARY KEY,
    email VARCHAR(50) DEFAULT NULL,
    password VARCHAR(100) NOT NULL)";
$result = mysqli_query($conn, $sql);
if ($result)
    echo "users table created successfully";
else
    echo "Error in creating users table: " . mysqli_error($onn);
mysqli_close($conn);
?>