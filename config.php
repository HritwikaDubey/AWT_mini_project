<?php
$servername="localhost:3307";
$username="root";
$password="";
$database="phplogin";

$conn=new mysqli($servername, $username, $password, $database);
// create connection
$conn= mysqli_connect($servername, $username, $password, $database) or die("Database connection failed");
?>