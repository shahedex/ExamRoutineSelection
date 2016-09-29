
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
     border: 1px solid black;
}
</style>
</head>
<body>

<?php
$server_name = "127.0.0.1";
$user_name = "root";
$password = "hellothere";
$dbname = "Subjects";

$conn = new mysqli($server_name, $user_name, $password,$dbname);

if($conn->connect_error){
    die("Connection failed : " .$conn->connect_error);
}

$sql_query = "SELECT * FROM subs";
$result = $conn->query($sql_query);

if($result->num_rows > 0){
    echo "<table><tr><th>Name</th><th>Sub1</th><th>Sub2</th><th>Sub3</th><th>Sub4</th><th>Sub5</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["name"]. "</td><td>".$row["sub1"]."</td><td>".$row["sub2"]."</td><td>".$row["sub3"]."</td><td>".$row["sub4"]."</td><td>".$row["sub5"] . "</td></tr>";
    }
    echo "</table>";
}
else 
{
    echo "error ... 0 results";
}
$conn->close();
?>
</body>
</html>