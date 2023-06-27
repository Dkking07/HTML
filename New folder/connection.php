<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn){
    die("Connection failed:" . $conn-> connect_error());
}
else{
    echo "Connected Successfully with mySQL Database<br>";
}
?>