<?php
$server_name = "127.0.0.1";
$user_name = "root";
$password = "hellothere";
$dbname = "Subjects";

$conn = new mysqli($server_name, $user_name, $password,$dbname);

if($conn->connect_error){
    die("Connection failed : " .$conn->connect_error);
}


if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $selected_val1 = $_POST["sub1"];
    $selected_val2 = $_POST["sub2"];
    $selected_val3 = $_POST["sub3"];
    $selected_val4 = $_POST["sub4"];
    $selected_val5 = $_POST["sub5"];
    
    echo "Name : " . $name . "<br>";
    echo "Exam 1 : " . $selected_val1 . "<br>";
    echo "Exam 2 : " . $selected_val2 . "<br>";
    echo "Exam 3 : " . $selected_val3 . "<br>";
    echo "Exam 4 : " . $selected_val4 . "<br>";
    echo "Exam 5 : " . $selected_val5 . "<br>";
    
    $sql_query = "INSERT INTO subs(name,sub1,sub2,sub3,sub4,sub5)
    VALUES('$name','$selected_val1','$selected_val2','$selected_val3','$selected_val4','$selected_val5')";

        if($conn->query($sql_query) === TRUE){
            echo "data inserted successfully . ";
        }
        else 
        {
            echo "error : " . $conn->error;
        }
    }
      $conn->close();
?>