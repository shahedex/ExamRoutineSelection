<?php include 'countingsubjects.php'; ?>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#comment-check").click(function(){
        $("#comment-div").fadeToggle();   
    });
});
</script>
</head>
<style>

#header{
   text-align: center;
}
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    font-size: 20px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: green ;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=text]:hover {
    background-color: #C7CEDB;

}
.bg {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
#selection, #info {
    color: white;
    border-radius: 0px;
    background-color: grey;
    padding: 2px;
    text-align: center;
    margin:5px;
}

#leadTitle, #comments {
    color: white;
    border-radius: 0px;
    background-color: grey;
    padding: 2px;
    text-align: center;
    margin:5px;
}
#now{   
    color:grey;
    text-align: center;
}
#comment-div {
    width: 100%;
    height: 200px;
    overflow-x: scroll;
}
#comment-wrapper{
     text-align: center;
}
hr{
   display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid grey;
    margin: 1em 0;
    padding: 0; 
}
table {
    margin-top: 15px;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid white;
    text-align: center;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #C7DAFC;
    color: black;
}
tr:nth-child(odd) {
    background-color: grey;
    color: white;
}
textarea{
    width: 100%;
}
#comment-div{
    display:none;
}
</style>
<body>
<div class="bg" id="header">
<img src="CUET_logo.png" alt="CUET LOGO" style="width:304px;height:228px;">
<h1>Department of Mechanical Engineering</h1><hr>
 Level: 2 Term: 1 <br>
Batch '14<br>
 Routine Selection
</div>
</br>
<div class="bg">
    <div id="leadTitle">
        <h3>LeaderBoards: </h3>
</div>

<table>
  <tr>
    <th>Subjects</th>
    <th> Positions</th>
    <th>% of People Voted</th>
  </tr>
  <tr>
    <td> <?php echo $subject[0]; ?> </td>
    <td>1</td>
    <td> <?php echo number_format($percent_array[0],2)."%"; ?> </td>
  </tr>
  <tr>
    <td> <?php echo $subject[1]; ?> </td>
    <td>2</td>
    <td><?php echo number_format($percent_array[1],2)."%"; ?></td>
  </tr>
  <tr>
    <td> <?php echo $subject[2]; ?> </td>
    <td>3</td>
    <td><?php  echo number_format($percent_array[2],2)."%"; ?></td>
  </tr>
  <tr>
    <td> <?php echo $subject[3]; ?> </td>
    <td>4</td>
    <td><?php  echo number_format($percent_array[3],2)."%"; ?></td>
  </tr>
  <tr>
    <td> <?php echo $subject[4]; ?> </td>
    <td>5</td>
    <td><?php echo number_format($percent_array[4],2)."%"; ?></td>
  </tr>
 
</table>
</div>
</div>

<br>
<FORM METHOD="LINK" ACTION="databaseconnection.php">
    <INPUT  TYPE="submit" VALUE="Click to show the Voting Table" >
</FORM>


<br>
<div class="bg" id="comment-wrapper">
       <button id="comment-check">click to see the comments for these votes>
       </button>
<div id="comment-div">
           <p>Just because I know the best! :D </p>
           <p>Just because I know the best! :D </p>
           <p>Just because I know the best! :D </p>
           <p>Just because I know the best! :D </p>
           <p>Just because I know the best! :D </p>
           <p>Just because I know the best! :D </p>
           <p>Just because I know the best! :D </p>
           <p>Just because I know the best! :D </p>
           <p>Just because I know the best! :D </p>
           <p>Just because I know the best! :D </p>
           <p>Just because I know the best! :D </p>
           <p>Just because I know the best! :D </p>
           <p>Just because I know the best! :D </p>
           <p>Just because I know the best! :D </p>
           <p>Just because I know the best! :D </p>
           <p>Just because I know the best! :D </p>
           <p>Just because I know the best! :D </p>
           <p>Just because I know the best! :D </p>
           <p>Just because I know the best! :D </p>

</div>
</div>

<br>
<div class="bg">
<h3 id="now">Haven't voted yet? Vote yours now.</h3>
<form action="entry.php" method="post">
<div id="info">
   <h3>User Informations: </h3>
</div>
    <label for="fname">Full Name</label>
    <input type="text" id="name" name="name" placeholder="Full name" required>

    <label for="roll">Class Roll: </label>
    <input type="text" id="roll" name="roll" placeholder="Class roll" required>

<div id="selection">
   <h4>Your preferences for the routine: </h4>
</div>


    <label for="choice1">First Choice:</label>
    <select id="sub1" name="sub1" required>
    <option value="">Please select</option>
      <option value="math231">Statistical Analysis and complex variable</option>
 <option value="me251">Production Process</option>
 <option value="me211">Thermodynamics</option>
<option value="hum231">Technical English and Communication Skills</option>
<option value="me231">Engineering Mechanics</option>
    </select>

 <label for="choice2">Second Choice:</label>
    <select id="sub2" name="sub2" required>
    <option value="">Please select</option>
      <option value="math231">Statistical Analysis and complex variable</option>
 <option value="me251">Production Process</option>
 <option value="me211">Thermodynamics</option>
<option value="hum231">Technical English and Communication Skills</option>
<option value="me231">Engineering Mechanics</option>
    </select>

 <label for="choice3">Third Choice:</label>
    <select id="sub3" name="sub3" required>
<option value="">Please select</option>
      <option value="math231">Statistical Analysis and complex variable</option>
 <option value="me251">Production Process</option>
 <option value="me211">Thermodynamics</option>
<option value="hum231">Technical English and Communication Skills</option>
<option value="me231">Engineering Mechanics</option>
    </select>

 <label for="choice4">Fourth Choice:</label>
    <select id="sub4" name="sub4" required>
<option value="">Please select</option>
      <option value="math231">Statistical Analysis and complex variable</option>
 <option value="me251">Production Process</option>
 <option value="me211">Thermodynamics</option>
<option value="hum231">Technical English and Communication Skills</option>
<option value="me231">Engineering Mechanics</option>
    </select>

 <label for="choice5">Fifth Choice:</label>
    <select id="sub5" name="sub5" required>
<option value="">Please select</option>
      <option value="math231">Statistical Analysis and complex variable</option>
 <option value="me251">Production Process</option>
 <option value="me211">Thermodynamics</option>
<option value="hum231">Technical English and Communication Skills</option>
<option value="me231">Engineering Mechanics</option>
    </select>

<br><br> 
<label for="comment">What's your opinion on this preferences?</label> <br> <br> 

<textarea name="comment">Just because I know the best! :D </textarea>
 
<input type="submit" value="submit" name="submit">

</form>
</div>
</body>
</html>