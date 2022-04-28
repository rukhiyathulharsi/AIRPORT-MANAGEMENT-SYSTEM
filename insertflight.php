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
		    
    <u> <h1>Enter Details of new Flight.</h1></u>

<form   method="POST">


<b><label >Flight_Number:</label></b><br><br>
   <input type="text" name="Flight_number"  placeholder="name"><br><br>
 <!-- -->
 

 <b><label >Flight_Name:</label></b><br><br>
   <input type="text" name="Flight_name" placeholder="name"><br><br>
 

   <b> <label >Src_Dest:</label></b><br><br>
   <input type="text" name="Src_Dest" placeholder="Src_Dest"><br><br>
 

   <b> <label >Arrival_time:</label></b><br><br>
   <input type="text" name="Arrival_time" placeholder="Arrival_time"><br><br>
  

   <b><label >Departure_time:</label></b><br><br>
   <input type="text" name="Departure_time" placeholder="Departure_time"><br><br>
  

   <b> <label >Airport_code:</label></b><br><br>
   <input type="text" name="Airport_code" placeholder="Airport_code"><br><br>
  
 
 
 
    <button type="submit" name="submit" value="submit">submit</button>
   

   </form>
   



<!-- employee details -->


`
<?php


 if(isset($_POST['submit'])) {

    $con = mysqli_connect('localhost','root','','airport_management_sys');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "connected successfully";
    }

  
  
   $Flight_number =  $_POST["Flight_number"];
   $Flight_name =  $_POST["Flight_name"];
   $Src_Dest = $_POST['Src_Dest'];
   $Arrival_time = $_POST["Arrival_time"];
   $Departure_time = $_POST["Departure_time"];
   $Airport_code = $_POST["Airport_code"];

   


  $sql = "INSERT INTO `flight`(`Flight_number`, `Flight_name`, `Src_Dest`, `Arrival_time`,`Departure_time`,`Airport_code`) VALUES ('$Flight_number','$Flight_name','$Src_Dest','$Arrival_time','$Departure_time','$Airport_code')";

   if (mysqli_query($con,$sql))
  {
     ?>
   <script>
     
	  if(!alert('Flight added successfully.')){window.location = "interface4.php?interface4=interface4";}
   </script>
   <?php
       } 
   else {
    ?>
     <script>
          if(!alert("Can not add Flight. Some error occured")){window.location = "interface4.php?interface4=interface4";}
   
     </script>
   <?php
   }	 

  
  }

?>