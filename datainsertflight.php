<?php 

 session_start();
 
 

?>

<?php include("header.php"); ?>

<?php

if(isset($_GET['insert_employee'])) {

?>   
 <div class="container-fluid" style="background-color:lavenderblush";>

          <h1 class="h1_index text-center">Flight Board</h1>
		   <br>
		    <a class="a_color" href="interface1.php"><button type="button" class="btn btn-primary btn-lg">Dashboard</button></a>

        <a class="a_color" href="employee.php?view_employee=view_employee"><button type="button" class="btn btn-primary btn-lg">View Employee</button></a>


		   <br>
</div>		   
   <div class="col-sm-10" style="background-color:lavenderblush;">
     <h1>Enter Details of new Flight.</h1>

<form  action="insertemployee.php" method="POST">

 <div class="form-group">
   <label for="formGroupExampleInput">Flight_Number:</label>
   <input type="text" name="Flight_Number" class="form-control" id="formGroupExampleInput" placeholder="name">
 </div><!-- -->
 
 <div class="form-group">
   <label for="formGroupExampleInput2">Flight_Name:</label>
   <input type="text" name="Flight_Name" class="form-control" id="formGroupExampleInput2" placeholder="name@example.com">
 </div>
 <div class="form-group">
   <label for="formGroupExampleInput2">Src_Dest:</label>
   <input type="text" name="Src_Dest" class="form-control" id="formGroupExampleInput2" placeholder="Src_Dest">
 </div>
 <div class="form-group">
   <label for="formGroupExampleInput2">Arrival_time:</label>
   <input type="text" name="Arrival_time" class="form-control" id="formGroupExampleInput2" placeholder="Arrival_time">
 </div> 
 <div class="form-group">
   <label for="formGroupExampleInput2">Departure_time:</label>
   <input type="text" name="Departure_time" class="form-control" id="formGroupExampleInput2" placeholder="Departure_time">
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


if(isset($_GET['insert'])) {

 ?> 

 <div class="container-fluid" style="background-color:lavenderblush";>

          <h1 class="h1_index text-center">Flight Board</h1>
		   <br>
		    <a class="a_color" href="dashboard.php"><button type="button" class="btn btn-primary btn-lg">Dashboard</button></a>

		    <a class="a_color" href="employee.php?insert_employee=insert_employee"><button type="button" class="btn btn-primary btn-lg">Insert Employee</button></a>

		   <br>
</div>

    <div class="container-fluid" style="background-color:lavenderblush";>

          <h1 class="h1_index text-center">Flight Details</h1>

        <div class="col-sm-10">
		
		<table class="table table-striped table-bordered">
   <thead>
      <tr>
        <th>Flight_Number</th>
        <th>Flight_Name</th>
        <th>Src_Dest</th>
		<th>Arrival_time</th>
		<th>Departure_time</th>
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
        echo "success";
    }
    
//select database


$sql="SELECT * FROM `flight` ";

$record = mysqli_query($con,$sql);


while($post=$record->fetch_assoc()) {
  
   ?>


      <tr>
        <td><?php echo $post['Flight_Number']; ?></td>
        <td><?php echo $post['Flight_Name']; ?></td>
        <td><?php echo $post['Src_Dest']; ?></td>
	    	<td><?php echo $post['Arrival_time']; ?></td>
		    <td><?php echo $post['Departure_time']; ?></td>
		    <td><?php echo $post['Airport_code']; ?></td>
		    <td><a href="editflight.php?edit=<?php echo $post['Flight_Number']; ?>">edit</a></td>
		    <td><a href="deleteflight.php?delete=<?php echo $post['Flight_Number']; ?>">delete</a></td>
      </tr>
    
   
<?php } ?>    
     </tbody>
    </table>
   
  </div>
</div>

<?php } ?>    

<!-- details end -->

<?php } ?>



`