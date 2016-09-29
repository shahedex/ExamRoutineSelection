<?php
$server_name = "127.0.0.1";
$user_name = "root";
$password = "hellothere";

$conn = new mysqli($server_name, $user_name, $password);

if($conn->connect_error){
    die("Connection failed : " .$conn->connect_error);
}

echo "Connected database successfully....";
?>
