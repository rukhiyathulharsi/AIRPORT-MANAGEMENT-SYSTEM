<?php
session_start();
if(!isset($_SESSION['name'])) {
  
  header("location: interface6.php"); 
  }
  else {


?>
<?php include ("header.php") ?>
<html lang="en" dir="Itr">
    <form class="box">
    <head> 
        <meta charset="utf-8"> 
        <title>Animated interface5 form</title> 
        <link rel="stylesheet" href="interface6.css"> 
        <style>
            table, th, td {
    border: 1px solid black;
    color:black;
    
  }
 .box input[type="text"]{ 
    border: 0; 
    background: none; 
    display:inline-block; 
    top: 50%;
    left: 1%;
    margin: 15px auto; 
    text-align: center; 
    border: 2px solid #3498db; 
    padding: 14px 10px; 
    width: 175px; 
    outline: none; 
    color: black; 
    border-radius: 0px; 
    transition: 0.25s; 
} 
 .box input[type="text"]{ 
    width: 280px; 
    border-color: palevioletred; 
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
</html> 

    <h1>Edit Airport</h1>
    <input type="text" name="Airport_code" placeholder="Airport_code"> <br>
   
    <input type="text" name="Airport_Name" placeholder="Airport_Name"> <br>
  
    <input type="text" name="City" placeholder="City"> <br>
    
    <input type="text" name="state" placeholder="state"> <br><br>
  <button type="submit" class="button"><b>Insert</b> </button>

  
        
</button>
 <button type="submit" class="button"><b>delete</b>
 
<?php




    $con = mysqli_connect('localhost','root','','airport_management_sys');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }
	
date_default_timezone_set('Asia/Kolkata');
	       $date = date("Y-m-d");
           $ThisDate = date("d-m-Y", strtotime($date));


// sql to delete a record

$Airport_code = @$_GET['delete'];

$sql = "DELETE FROM `airport` WHERE  Airport_code='$Airport_code'";


if ($con->query($sql) === TRUE) {
   ?>
   <script>
]        if(!alert('Airport detail  deleted successfully.')){window.location = "  .php?interface2.php=interface2.php";}
   
   </script>
   <?php
       } 
   else {
    ?>
     <script>
          if(!alert('Can not delete Airport detail.Some error occured')){window.location = "login.php?interface2.php=interface2.php";}
   
     </script>
   <?php
   }

$con->close();

			  
?>
 
</button>

 
 <button type="submit" class="button"> <b>Update</b>
 <?php
if(isset($_POST['update'])) {

    $conn = mysqli_connect('localhost','root','','airport_management_sys');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }

 $update_id = @$_GET['edit'];
 
   $Airport_code =  $_POST["Airport_code"];
   $Airport_Name  = $_POST['Airport_Name'];
   $City  = $_POST['City'];
   $State = $_POST['State'];


$sql1 = "UPDATE `airport` SET `Airport_code`='$Airport_code',`Airport_Name`='$Airport_Name',`City`='$City',`State`='$State' WHERE id='$update_id'";
 
 if (mysqli_query($conn,$sql1))
  {
    ?>
   <script>
     
	  if(!alert('Update details updated successfully.')){window.location = "employee.php?view_admin=view_admin";}
   </script>
   <?php
       } 
   else {
    ?>
     <script>
          if(!alert("Can't update airport details.Some error occured")){window.location = "employee.php?view_admin=view_admin";}
   
     </script>
   <?php
   }
  }
?>

<?php } ?>
</button>
 <button type="submit" formaction="interface2.php" value="back"> <b>back</b></button>

 
</form> 
</body> 
</html> 
