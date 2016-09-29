<?php
$server_name = "127.0.0.1";
$user_name = "root";
$password = "hellothere";
$dbname = "Subjects";

$conn = new mysqli($server_name, $user_name, $password,$dbname);

if($conn->connect_error){
    die("Connection failed : " .$conn->connect_error);
}

    $sql_query = "CREATE TABLE subs(
        id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(60) NOT NULL,
        sub1 VARCHAR(60) NOT NULL,
        sub2 VARCHAR(60) NOT NULL,
        sub3 VARCHAR(60) NOT NULL,
        sub4 VARCHAR(60) NOT NULL,
        sub5 VARCHAR(60) NOT NULL)";
        
    if ($conn->query($sql_query) === TRUE) {
        echo "Table subs created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
}

$conn->close();
?>