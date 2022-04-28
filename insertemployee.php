<?php 

 session_start();
 
 

?>

<?php include("header.php"); ?>

<style>
body{
          background: pink;
}
input[type="text"]{ 
    width: 300px; 
    border-color: palevioletred; 
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


		   
     <u><h1>Enter Details of new employee.</h1></u>

<form   method="POST">

   <b><label >Employee_id:</label></b><br><br>
   <input type="text" name="Employee_id" placeholder="Employee_id"><br><br>
 <!-- -->
 
 <b><label >Employee_Name:</label></b><br><br>
   <input type="text" name="Employee_Name" placeholder="Employee_Name"><br><br>
 
   <b> <label >Age:</label></b><br><br>
   <input type="text" name="Age"  placeholder="Age"><br><br>
 
   <b><label >Address:</label></b><br><br>
   <input type="text" name="Address" placeholder="Address"><br><br>
  
   <b> <label >Phone_Number:</label></b><br><br>
   <input type="text" name="Phone_Number" placeholder="Phone_Number"><br><br>
   <b> <label >Salary:</label></b><br><br>
   <input type="text" name="Salary" placeholder="Salary"><br><br>
   <b><label >Airport_code:</label></b><br><br>
   <input type="text" name="Airport_code" placeholder="Airport_code"><br><br>
  
 
 
     <button type="submit" name="submit">submit</button>
   

   </form>
   




<!-- employee details -->





<?php


 if(isset($_POST['submit'])) {

    $con = mysqli_connect('localhost','root','','airport_management_sys');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "connected successfully";
    }

  
  
   $Employee_id =  $_POST["Employee_id"];
   $Employee_Name =  $_POST["Employee_Name"];
   $Age = $_POST['Age'];
   $Address = $_POST["Address"];
   $Phone_Number = $_POST["Phone_Number"];

   $Salary = $_POST["Salary"];

   $Airport_code = $_POST["Airport_code"];

   


  $sql = "INSERT INTO `employee`(`Employee_id`, `Employee_Name`, `Age`, `Address`,`Phone_Number`,`Salary`,`Airport_code`) VALUES ('$Employee_id','$Employee_Name','$Age','$Address','$Phone_Number','$Salary','$Airport_code')";

   if (mysqli_query($con,$sql))
  {
     ?>
   <script>
     
	  if(!alert('Employee added successfully.')){window.location = "interface3.php?interface3=interface3";}
   </script>
   <?php
       } 
   else {
    ?>
     <script>
          if(!alert("Can not add Employee. Some error occured")){window.location = "interface3.php?interface3=interface3";}
   
     </script>
   <?php
   }	 

  
  }

?>