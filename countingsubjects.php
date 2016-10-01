<?php
include 'entry.php';
$server_name = "127.0.0.1";
$user_name = "root";
$password = "hellothere";
$dbname = "Subjects";

$conn = new mysqli($server_name, $user_name, $password,$dbname);

if($conn->connect_error){
    die("Connection failed : " .$conn->connect_error);
}

static $math231=0,$me211=0,$me231=0,$me251=0,$hum231=0;
static $vote_number = 0;
$names = array("sub1","sub2","sub3","sub4","sub5");

static $percent_array = array();
static $leading_subject = array();
static $subject = array();
for($x=0;$x<5;$x++){
    $sql_query = "SELECT * FROM subs";
    $result = $conn->query($sql_query);
    
    if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()) {
           // echo "id : ".$last_id."   ".$names[$x] ."<br>";
            $total = $row["id"];
            countSub($row[$names[$x]]);
        }
        $percent_array[$x] = calculate($total);
        $leading_subject[$x] = leaderboard();
        zero();
    }
    else 
    {
        echo "error ... 0 results";
    }
}
// echo $percent_array[0];
for($s=0;$s<5;$s++){
    switch ($leading_subject[$s]){
        case "me231" : 
            $subject[$s] = "Engineering Mechanics - 1";
            break;
        case "me211" :
            $subject[$s] = "Thermodynamics";
            break;
        case "me251" : 
            $subject[$s] = "Production Process";
            break;
        case "hum231" : 
            $subject[$s] = "Technical English & Communication Skill";
            break;
        case "math231" :
            $subject[$s] = "Statistical Analysis & Complex Variable";
            break;
    }
}

function countSub($str){
    global $math231,$me211,$me231,$me251,$hum231;
    if($str === "math231"){
        $math231++;
    }
    else if($str === "me211"){
        $me211++;
    }
    else if($str === "me231"){
        $me231++;
    }
    else if($str === "me251"){
        $me251++;
    }
    else if($str === "hum231"){
        $hum231++;
    }
}

function calculate($totals){
    
    global $math231,$me211,$me231,$me251,$hum231;
    $maximum_val = array("math231"=>"$math231","me211"=>"$me211","me231"=>"$me231","me251"=>"$me251","hum231"=>"$hum231");
    // $maxs = array_keys($maximum_val,  max($maximum_val));
    $max_val = max($maximum_val);
    $percent = ($max_val / $totals) * 100;
    // echo "No one is : " .$maxs[0]."    with  ".$max_val."  points and ".number_format($percent,2)."% votes<br>";
    // echo number_format($percent,2)."%<br>";
    return $percent;
}

function leaderboard(){
    global $math231,$me211,$me231,$me251,$hum231;
    
    $maximum_val = array("math231"=>"$math231","me211"=>"$me211","me231"=>"$me231","me251"=>"$me251","hum231"=>"$hum231");
    $maxs = array_keys($maximum_val,  max($maximum_val));

    return $maxs[0];
}
function zero(){
        global $math231,$me211,$me231,$me251,$hum231;
        
        $math231=0;
        $me211=0;
        $me231=0;
        $me251=0;
        $hum231=0;
}
$conn->close();
?>