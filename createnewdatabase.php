<?php
$server_name = "127.0.0.1";
$user_name = "root";
$password = "hellothere";

$conn = new mysqli($server_name, $user_name, $password);

if($conn->connect_error){
    die("Connection failed : " .$conn->connect_error);
}

$sql_query = "CREATE DATABASE Subjects";
if ($conn->query($sql_query) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
