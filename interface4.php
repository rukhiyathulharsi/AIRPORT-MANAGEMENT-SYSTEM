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
        h1{
    text-align: center;
  }

            table, th, td {
    border: 1px solid black;
    color:black;
    border-collapse: collapse;
    width: 1000px;
padding: 5px;
    table-layout: auto;


    
  }
  .box button[type="submit"]{ 
    border: 0; 
    background: none; 
    display: inline-block; 
    margin: 15px auto; 
    text-align: center; 
    border: 2px solid palevioletred; 
    padding: 14px 40px; 
    
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
    <h1>FLIGHT</h1>
    <table style="width:100%">
    
        <?php

$servername="localhost";
$username="root";
$password="";
$dbname = "airport_management_sys";

$con = mysqli_connect($servername,$username,$password,$dbname);
$query="select * from flight";
$record = mysqli_query($con,$query);


    echo "<table>
    <tr>
    <th>Flight_number</th>
    <th>Flight_name</th>
    <th>Src_Dest</th>
    <th>Arrival_time</th>
    <th>Departure_time</th>
    <th>Airport_code</th>
    <th>Edit  </th>
    <th>Delete</th>
    </tr>";
    while($post=$record->fetch_assoc())
    {
    
       
        ?>
   
   
      <tr>
        <td><?php echo $post['Flight_number']; ?></td>
        <td><?php echo $post['Flight_name']; ?></td>
		<td><?php echo $post['Src_Dest']; ?></td>
		<td><?php echo $post['Arrival_time']; ?></td>
        <td><?php echo $post['Departure_time']; ?></td>
        <td><?php echo $post['Airport_code']; ?></td>
        <td><a href="editflight.php?edit=<?php echo $post['Flight_number']; ?>">edit</a></td>
        <td><a href="deleteflight.php?delete=<?php echo $post['Flight_number']; ?>">delete</a></td>
	   </tr>  
       <?php } ?>    
     </tbody>
    </table>
    
    <button type="submit" formaction="insertflight.php" name="Insert">Insert</button></a>


      <button type="submit" formaction="interface1.php" value="back"> <b>back</b></button>

     
</form>

