<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db='db_grocery';
$conn = mysqli_connect($host,$user, $pass, $db);
if(! $conn)
{
    die('could not connect:'. mysqli_error());
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $Name=$_POST["Name"];
    $mob=$_POST["mob"];
    $address=$_POST["address"];
    $pinCode=$_POST["pinCode"];
    $username=$_POST["username"];
    $password = $_POST["password"];
}
$sql = "INSERT INTO cus_info ( `Name`,`mob`,`address`,`pinCode`,`username`,`password`
                ) VALUES ('$Name',  
                '$mob','$address', '$pinCode', '$username', '$password')"; 

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
