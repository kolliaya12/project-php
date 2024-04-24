<?php

$servername = "localhost";
$username = "root";
$password = " "; 
$db_name = "databasel";
$conn = new mysqli("localhost","root", "", "database1");
if($conn->connect_error){
    die("Connection failed" .$conn->connect_error);
}
echo" ";
?>
