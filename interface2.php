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
                  border-collapse: collapse;
                  width: 1000px;
                  padding: 5px;
                  table-layout: auto;
                  color:black;

    
  }
  h1{
    text-align: center;
  }

  
   button[type="submit"]{ 
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
 button[type="submit"]:hover{
    background: palevioletred;
}
  </style>
    </head> 
<form class="box" action="index.php" method="post"> 
<table style="width:100%">
<h1>AIRPORT<h1>

<?php
include 'connection.php';
$servername="localhost";
$username="root";
$password="";
$dbname = "airport_management_sys";

$con = mysqli_connect($servername,$username,$password,$dbname);

/*if($conn->connect_error)
{
	die("Connection Failed".$connn->connect_error);
}
/*else
	echo "Connection Successful<br>";
//selecting database
$dbcheck=mysql_select_db("airport_management_sys");

if(!$dbcheck)
{
	echo "Error selecting DB".mysql_error();
}
else echo "Database Selected<br>";

//Creating table
//$sql="Create table airport (Airport varchar(15) primary key, Airport_name varchar(40),City varchar(30),State varchar(40))";

//$check=mysql_query($sql,$conn);
//if(!$check)
	//echo "Error creating Table".mysql_error();
//else echo "Table created successfully";
/*$sql="Insert into airport values('DEL','Indira Gandhi Airport','New Delhi',Delhi)";
mysql_query($sql,$conn);

mysql_close($conn);*/

$query="SELECT * FROM `airport`";

$record = mysqli_query($con,$query);
echo "<table>
<tr>
<th>Airport_code</th>
<th>Airport_Name</th>
<th>City</th>
<th>State</th>
<th>Edit</th>
<th>Delete</th>

</tr>";
    while($post=$record->fetch_assoc()) {
  
   ?>
   
   
      <tr>
        <td><?php echo $post['Airport_code']; ?></td>
        <td><?php echo $post['Airport_Name']; ?></td>
		<td><?php echo $post['City']; ?></td>
		<td><?php echo $post['State']; ?></td>
        <td><a href="editairport.php?edit=<?php echo $post['Airport_code']; ?>">edit</a></td>
        <td><a href="deleteairport.php?delete=<?php echo $post['Airport_code']; ?>">delete</a></td>
	   </tr>
              
       <?php } ?>    
     </tbody>
    </table>
    <button type="submit" formaction="insertairport.php" name="Insert">Insert</button></a>


   <button type="submit" formaction="interface1.php" value="back"><b>back</b></button> 

     
</form>




