<?php 

 session_start();
 
 
?>

<?php include ("header.php") ?>

<style>
		    body{
          background: pink;
          position: absolute;
          top: 20%;
          left: 5%;
        }
          table, th, td {
                  border: 1px solid black;
                  border-collapse: collapse;
                  width: 1000px;
padding: 5px;
    table-layout: auto;
    color:black;
    background: pink;

    
  }
  input [type="text"]{
width: 100%;
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


          <h1>Update Flight Details.</h1>
          
		   
        
		
		<table>
   <thead>
      <tr>
        <th>Flight_number</th>
        <th>Flight_name</th>
        <th>Src_Dest</th>
        <th>Arrival_time</th>
        <th>Departure_time</th>
    

		<th>Airport_code</th>
        
		
      </tr>
    </thead>
    <tbody>
		
  <form action="" method="post">
<?php


//make connection
$con = mysqli_connect('localhost','root','','airport_management_sys');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "Success";
    }

//select database
$edit_id = @$_GET['edit'];

$sql="SELECT * FROM `flight` WHERE Flight_number='$edit_id' ";

$record = mysqli_query($con,$sql);


while($post=$record->fetch_assoc()) {
  
   ?>
   
   

      <tr>
        <td><?php echo $post['Flight_number']; ?></td>
        <td><input type="text" name="Flight_name" value="<?php echo $post['Flight_name']; ?>" placeholder="Flight_name"></td></td>
        <td><input type="text" name="Src_Dest" value="<?php echo $post['Src_Dest']; ?>" placeholder="Src_Dest"></td></td>
		<td><input type="text" name="Arrival_time" value="<?php echo $post['Arrival_time']; ?>" placeholder="Arrival_time"></td></td>
        <td><input type="text" name="Departure_time" value="<?php echo $post['Departure_time']; ?>" placeholder="Departure_time"></td></td>
       
        <td><input type="text" name="Airport_code"  value="<?php echo $post['Airport_code']; ?>" placeholder="Airport_code"></td></td>

        
		
      </tr>
 

<?php } ?>    
     </tbody>
    </table>
	<div class="form-group">
    <button type="submit" name="update" value="update">update</button>
  </div>
   </form>
  </div>
</div>


<?php
if(isset($_POST['update'])) {

    $conn = mysqli_connect('localhost','root','','airport_management_sys');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "connected successfully";
    }

 // $update_id = $_GET['id'];
  $update_id = @$_GET['edit'];
 
   $Flight_number =  $_POST["Flight_number"];
   $Flight_name = $_POST['Flight_name'];
   $Src_Dest = $_POST['Src_Dest'];
   $Arrival_time = $_POST['Arrival_time'];
   $Departure_time = $_POST['Departure_time'];
   $Airport_code = $_POST['Airport_code'];

   
   
 

$sql1 = "UPDATE `flight` SET `Flight_name`='$Flight_name',`Src_Dest`='$Src_Dest',`Arrival_time`='$Arrival_time',`Departure_time`='$Departure_time',`Airport_code`='$Airport_code' WHERE Flight_number='$update_id'";
 
 if (mysqli_query($conn,$sql1))
  {
    ?>
   <script>
     
	  if(!alert('flight details updated successfully.')){window.location ="interface4.php?interface4=interface4";}
   </script>
   <?php
       } 
   else {
    ?>
     <script>
       // window.location = "employee.php?view_employee=view_employee";
          if(!alert("Can't update flight details.Some error occured")){window.location = "interface4.php?interface4=interface4";}
   
     </script>
   <?php
   }



  }

?>


