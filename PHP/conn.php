<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db='db_grocery';
$conn = mysqli_connect($host,$user, $pass);
if(!$conn)
{
    die('could not connect:'. mysqli_error());
}
echo'connected successfully';
mysqli_close($conn);
?>
