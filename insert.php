<?php
$servername="localhost";
$username="root";
$password="root";
$database="project";

$conn=new mysqli($servername, $username, $password, $database);
// create connection
$conn= mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successfull
if ($conn->connect_error    ){
    die("Connection failed ".mysqli_connect_error());
    }
else{
    echo "Connected Successfully";
}

  $CarID = $_POST['CarID'];
  $BrandName = $_POST['BrandName'];
  $OwnersName = $_POST['OwnersName'];
  $RegistrationNumber = $_POST['RegistrationNumber'];

  $sql = "INSERT INTO parkinglot1 (CarID,BrandName,OwnersName, RegistrationNumber)
     VALUES ('$CarID','$BrandName','$OwnersName', '$RegistrationNumber')";
     mysqli_query($con, $sql);

     header("Location: restaurant.html"); // Return to where our form is stored
?>