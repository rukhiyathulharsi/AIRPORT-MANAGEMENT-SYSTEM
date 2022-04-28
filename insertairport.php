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
		    
     <u><h1>Enter Details of new Airport.</h1></u>

<form   method="POST">

   <b><label>Airport_code:</label> </b><br><br>
  <input type="text" name="Airport_code"  placeholder="Airport_code"><br><br>
 
  <b> <label>Airport_Name:</label></b> <br><br>
   <input type="text" name="Airport_Name"  placeholder="Airport_Name"><br><br>
   <b><label>City:</label></b><br><br>
   <input type="text" name="City"  placeholder="City"> </b><br><br>
   <b><label>State:</label> <br><br>
   <input type="text" name="State"  placeholder="State"> </b><br><br>
 
 
     <button type="submit" name="submit" value="submit">submit</button>

   </form>
   





<?php


if(isset($_POST['submit'])) {

    $con = mysqli_connect('localhost','root','','airport_management_sys');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "connected successfully";
    }

    
  
   $Airport_code =  $_POST["Airport_code"];
   $Airport_Name =  $_POST["Airport_Name"];
   $City = $_POST['City'];
   $State = $_POST["State"];
   


  $sql = "INSERT INTO `airport`(`Airport_code`, `Airport_Name`, `City`, `State`) VALUES ('$Airport_code','$Airport_Name','$City','$State')";

   if (mysqli_query($con,$sql))
  {
     ?>
   <script>
     
	  if(!alert('Airport added successfully.')){window.location = "interface2.php?interface2=interface2";}
   </script>
   <?php
       } 
   else {
    ?>
     <script>
          if(!alert("Can not add Airport. Some error occured")){window.location = "interface2.php?interface2=interface2";}
   
     </script>
   <?php
   }	 

  
  }

?>