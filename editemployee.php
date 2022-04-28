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

          <h1>Update Employee Details.</h1>
          
		   
        
		
		<table>
   <thead>
      <tr>
        <th>Employee_id</th>
        <th>Employee_Name</th>
        <th>Age</th>
        <th>Address</th>
        <th>Phone_Number</th>
        <th>Salary</th>

		<th>Airport_code</th>
        
		
      </tr>
    </thead>
    <tbody>
		
  <form method="post">
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

$sql="SELECT * FROM `employee` WHERE Employee_id='$edit_id' ";

$record = mysqli_query($con,$sql);


while($post=$record->fetch_assoc()) {
  
   ?>
   
   

      <tr>
        <td><?php echo $post['Employee_id']; ?></td>
        <td><input type="text" name="Employee_Name" value="<?php echo $post['Employee_Name']; ?>" placeholder="Employee_Name"></td></td>
		    <td><input type="text" name="Age" value="<?php echo $post['Age']; ?>" placeholder="Age"></td></td>
        <td><input type="text" name="Address" value="<?php echo $post['Address']; ?>" placeholder="Address"></td></td>
        <td><input type="text" name="Phone_Number"  value="<?php echo $post['Phone_Number']; ?>" placeholder="Phone_Number"></td></td>
        <td><input type="text" name="Salary" value="<?php echo $post['Salary']; ?>" placeholder="Salary"></td></td>
        <td><input type="text" name="Airport_code"  value="<?php echo $post['Airport_code']; ?>" placeholder="Airport_code"></td></td>

        
		
      </tr>
 

<?php } ?>    
     </tbody>
    </table>
	
    <button type="submit" name="update" value="update">update</button>
  
   </form>
  

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
 
   $Employee_id =  $_POST["Employee_id"];
   $Employee_Name = $_POST['Employee_Name'];
   $Age = $_POST['Age'];
   $Address = $_POST['Address'];
   $Phone_Number = $_POST['Phone_Number'];
   $Salary = $_POST['Salary'];
   $Airport_code = $_POST['Airport_code'];

   
   
 

$sql1 = "UPDATE `employee` SET `Employee_Name`='$Employee_Name',`Age`='$Age',`Address`='$Address',`Phone_Number`='$Phone_Number',`Salary`='$Salary',`Airport_code`='$Airport_code' WHERE Employee_id='$update_id'";
 
 if (mysqli_query($conn,$sql1))
  {
    ?>
   <script>
     
	  if(!alert('employee details updated successfully.')){window.location ="interface3.php?interface3=interface3";}
   </script>
   <?php
       } 
   else {
    ?>
     <script>
       // window.location = "employee.php?view_employee=view_employee";
          if(!alert("Can't update employee details.Some error occured")){window.location = "interface3.php?interface3=interface3";}
   
     </script>
   <?php
   }



  }

?>


