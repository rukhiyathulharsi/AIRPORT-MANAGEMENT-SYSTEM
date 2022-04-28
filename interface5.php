<?php
session_start();
?>
<html lang="en" dir="Itr"> 
    <head> 
        <meta charset="utf-8"> 
        <title>Animated interface2 form</title> 
        <link rel="stylesheet" href="interface2.css"> 
        <style>
        body{
          background: pink;
          position: absolute;
          top: 20%;
          left: 12%;
        }
            table, th, td {
    border: 1px solid black;
    color:black;
    
    
    border-collapse: collapse;
    width: 1000px;
padding: 5px;
    table-layout: auto;

  }
  
  h1{
    text-align: center;
  }

            .box button[type="submit"]{ 
    border: 0; 
    background: none; 
    display: inline-block; 
    margin: 15px auto; 
    text-align: center; 
    border: 2px solid palevioletred; 
    padding: 14px 40px; 
    align: center;
    outline: none; 
    color:black; 
    border-radius: 24px; 
    transition: 0.25s; 
    cursor: pointer; 
} 
.box button[type="submit"]:hover{
    background: palevioletred;
}
        </style>
    </head> 
</html> 
<form class="box" action="index.php" method="post"> 
    <h1>PASSENGER</h1>
    <table style="width:100%">
    <?php
include 'connection.php';
$servername="localhost";
$username="root";
$password="";
$dbname = "airport_management_sys";

$mysqli=new mysqli($servername,$username,$password,$dbname);
$query="select * from passenger";
if($result = $mysqli->query($query)){
   
    echo "<table>
    <tr>
    <th>Passenger_id</th>
    <th>Name</th>
    <th>Address</th>
    <th>State</th>
    <th>Flight_number</th>
    <th>Date_of_Departure</th>
    <th>Class</th>
    <th>No_of_seats</th>
    </tr>";
    while($row=$result->fetch_assoc())
    {
    
        echo "<tr>
        <td>".$row['Passenger_id']."</td>
        <td> ".$row['Name']."</td>
        <td>".$row['Address']."</td>
        <td>".$row['State']."</td>

        <td>".$row['Flight_number']."</td>
        <td>".$row['Date_of_Departure']."</td>

        <td>".$row['Class']."</td>

        <td>".$row['No_of_seats']."</td>
        <tr>";
    }
    echo "</table>";
}
else{
    echo "0 results";
}
$mysqli->close();
?>

       
       
       

      <button type="submit" formaction="interface1.php" value="back"> <b>Back</b></input>

</form>
