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
    $username=$_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM cus_info WHERE username = '$username' AND password ='$password'";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        echo "Login successful!";

    }
    else{
        echo "Invalid username or password";
    }
}

?>
