<?php 

 session_start();
 
 
?>

<?php include ("header.php") ?>




          <style>
		    body{
          background: pink;
          position: absolute;
          top: 20%;
          left: 12%;
        }
          table, th, td {
                  border: 1px solid black;
                  border-collapse: collapse;
                  width: 1000px;
padding: 5px;
    table-layout: auto;
    color:black;
    background: lightpink;

    
  }
  input [type="text"]{
width: 280px;
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
          <h1>Update Airport Details.</h1>

		<table>
   <thead>
      <tr>
        <th>Airport_code</th>
        <th>Airport_Name</th>
        <th>City</th>
		<th>State</th>
		
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
        echo "";
    }

//select database
$edit_id = @$_GET['edit'];

$sql="SELECT * FROM `airport` WHERE Airport_code='$edit_id' ";

$record = mysqli_query($con,$sql);


while($post=$record->fetch_assoc()) {
  
   ?>
   
   

      <tr>
        <td><?php echo $post['Airport_code']; ?></td>
        <td><input type="text" name="Airport_Name"  value="<?php echo $post['Airport_Name']; ?>" placeholder="Airport_Name"></td></td>
		<td><input type="text" name="City"  value="<?php echo $post['City']; ?>" placeholder="City"></td></td>
		<td><input type="text" name="State"  value="<?php echo $post['State']; ?>" placeholder="State"></td></td>
		
      </tr>
 

<?php } ?>    
     </tbody>
    </table>
    <button type="submit" name="update" value="update">update</button>
  
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
 
   $Airport_code =  $_POST["Airport_code"];
   $Airport_Name = $_POST['Airport_Name'];
   $City = $_POST['City'];
   $State = $_POST['State'];
   
   
 

$sql1 = "UPDATE `airport` SET `Airport_Name`='$Airport_Name',`City`='$City',`State`='$State' WHERE Airport_code='$update_id'";
 
 if (mysqli_query($conn,$sql1))
  {
    ?>
   <script>
     
	  if(!alert('airport details updated successfully.')){window.location ="interface2.php?interface2=interface2";}
   </script>
   <?php
       } 
   else {
    ?>
     <script>
       
          if(!alert("Can't update airport details.Some error occured")){window.location = "interface2.php?interface2=interface2";}
   
     </script>
   <?php
   }



  }

?>



