<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if(!$conn){
    die("Connection failed:" . $conn-> connect_error());
}
else{
    echo "Connected Successfully with mySQL Database<br>";
}
//Create database
$sql = "CREATE DATABASE HTDOTS";
$result = mysqli_query($conn, $sql);
if($result){
    echo "Database created successfully!";
}
else{
    echo "Failed to create database dueto " . mysqli_error($conn);
}
$conn->close();
?>