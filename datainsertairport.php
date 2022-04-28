<?php 

 session_start();
 
 

?>

<?php include("header.php"); ?>

<?php

if(isset($_GET['Insert'])) {

?>   

          <h1>Airport Board</h1>
		    
     <h1>Enter Details of new Airport.</h1>

<form  action=".php" method="POST">

   <label>Airport_code:</label>
   <input type="text" name="Airport_code"  placeholder="Airport_code">
 
   <label>Airport_Name:</label>
   <input type="text" name="Airport_Name"  placeholder="Airport_Name">
   <label>City:</label>
   <input type="text" name="City"  placeholder="City">
   <label>State:</label>
   <input type="text" name="State"  placeholder="State">
 
 
 
     <button type="submit" name="submit" value="submit">submit</button>

   </form>
   

</div>
<?php } ?>

<!-- employee details -->

<?php


if(isset($_GET['view_employee'])) {

 ?> 

 <div class="container-fluid" style="background-color:lavenderblush";>

          <h1 class="h1_index text-center">Airport Board</h1>
		   <br>
		    <a class="a_color" href="interface1.php"><button type="button" class="btn btn-primary btn-lg">Dashboard</button></a>

		    <a class="a_color" href="employee.php?insert_employee=insert_employee"><button type="button" class="btn btn-primary btn-lg">Insert Employee</button></a>

		   <br>
</div>

    <div class="container-fluid">

          <h1>Airport Details</h1>

        
		
		<table class="table table-striped table-bordered">
   <thead>
      <tr>
        <th>Airport_code</th>
        <th>Airport_Name</th>
        <th>City</th>
		<th>State</th>
		
		<th>Edit</th>
		<th>Delete</th>
      </tr>
    </thead>
    <tbody>
		

<?php


//make connection
$con = mysqli_connect('localhost','root','','airport_management_sys');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }
    
//select database


$sql="SELECT * FROM `airport` ";

$record = mysqli_query($con,$sql);


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
   
 </div>

<?php } ?>    

<!-- details end -->

<?php } ?>



`