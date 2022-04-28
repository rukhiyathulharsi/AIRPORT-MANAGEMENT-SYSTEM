<?php 

 session_start();
 
 

?>

<?php include("header.php"); ?>

<?php

if(isset($_GET['insert_employee'])) {

?>   


          <h1>Employee Board</h1>
		   
     <h1>Enter Details of new employee.</h1>

<form  action="insertemployee.php" method="POST">

 <div class="form-group">
   <label for="formGroupExampleInput">Employee_id:</label>
   <input type="text" name="Employee_id" class="form-control" id="formGroupExampleInput" placeholder="Employee_id">
 </div><!-- -->
 
 <div class="form-group">
   <label for="formGroupExampleInput2">Employee_Name:</label>
   <input type="text" name="Employee_Name" class="form-control" id="formGroupExampleInput2" placeholder="Employee_Name">
 </div>
 <div class="form-group">
   <label for="formGroupExampleInput2">Age:</label>
   <input type="text" name="Age" class="form-control" id="formGroupExampleInput2" placeholder="Age">
 </div>
 <div class="form-group">
   <label for="formGroupExampleInput2">Address:</label>
   <input type="text" name="Address" class="form-control" id="formGroupExampleInput2" placeholder="Address">
 </div> 
 <div class="form-group">
   <label for="formGroupExampleInput2">Phone_Number:</label>
   <input type="text" name="Phone_Number" class="form-control" id="formGroupExampleInput2" placeholder="Phone_Number">
 </div> 
 <div class="form-group">
   <label for="formGroupExampleInput2">Airport_code:</label>
   <input type="text" name="Airport_code" class="form-control" id="formGroupExampleInput2" placeholder="Airport_code">
 </div> 
 
 
  <div class="form-group">
    <button type="submit" name="submit" value="submit">submit</button>
  </div> 

   </form>
   

</div>
<?php } ?>

<!-- employee details -->

<?php


if(isset($_GET['view_employee'])) {

 ?> 

 <div class="container-fluid" style="background-color:lavenderblush";>

          <h1 class="h1_index text-center">Employee Board</h1>
		   <br>
		    <a class="a_color" href="dashboard.php"><button type="button" class="btn btn-primary btn-lg">Dashboard</button></a>

		    <a class="a_color" href="employee.php?insert_employee=insert_employee"><button type="button" class="btn btn-primary btn-lg">Insert Employee</button></a>

		   <br>
</div>

    <div class="container-fluid" style="background-color:lavenderblush";>

          <h1 class="h1_index text-center">Employee Details</h1>

        <div class="col-sm-10">
		
		<table class="table table-striped table-bordered">
   <thead>
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


$sql="SELECT * FROM `employee` ";

$record = mysqli_query($con,$sql);


while($post=mysqli_fetch_assoc($record)) {
  
   ?>


      <tr>
        <td><?php echo $post['Employee_id']; ?></td>
        <td><?php echo $post['Employee_Name']; ?></td>
        <td><?php echo $post['Age']; ?></td>
	    	<td><?php echo $post['Address']; ?></td>
		    <td><?php echo $post['Phone_Number']; ?></td>
		    <td><?php echo $post['Salary']; ?></td>
		   <td><?php echo $post['Airport_code']; ?></td>
		    <td><a href="editemployee.php?edit=<?php echo $post['Employee_id']; ?>">Edit</a></td>
		    <td><a href="deleteemployee.php?delete=<?php echo $post['Employee_id']; ?>">Delete</a></td>
      </tr>
    
   
<?php } ?>    
     </tbody>
    </table>
   
  </div>
</div>

<?php } ?>    

<!-- details end -->

<?php } ?>



