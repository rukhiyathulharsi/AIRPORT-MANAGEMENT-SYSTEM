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
    <table style="width:100%">
    <h1>EMPLOYEE</h1>
<?php
include 'connection.php';
$servername="localhost";
$username="root";
$password="";
$dbname = "airport_management_sys";

$con = mysqli_connect($servername,$username,$password,$dbname);
$query="select * from employee";
$record = mysqli_query($con,$query);


    echo "<table>
    <tr>
    <th>Employee_id</th>
    <th>Employee_Name</th>
    <th>Age</th>
    <th>Address</th>
    <th>Phone_Number</th>
    <th>Salary</th>
    <th>Airport_code</th>
   <th>Edit</th>
   <th>Delete</th>
  </tr>";
  while($post =$record->fetch_assoc())
    {
    
        ?>
   
   
      <tr>
        <td><?php echo $post['Employee_id']; ?></td>
        <td><?php echo $post['Employee_Name']; ?></td>
		<td><?php echo $post['Age']; ?></td>
		<td><?php echo $post['Address']; ?></td>
        <td><?php echo $post['Phone_Number']; ?></td>
        <td><?php echo $post['Salary']; ?></td>
        <td><?php echo $post['Airport_code']; ?></td>
        <td><a href="editemployee.php?edit=<?php echo $post['Employee_id']; ?>">edit</a></td>
        <td><a href="deleteemployee.php?delete=<?php echo $post['Employee_id']; ?>">delete</a></td>
	   </tr>  
       <?php } ?>    
     </tbody>
    </table>
    <button type="submit" name="Insert" formaction="insertemployee.php">Insert</button></a>

 <button type="submit" formaction="interface1.php" value="back"><b>Back</b> </button>
</form> 