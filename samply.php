<?php
// error_reporting(1) function hides all errors Mostly Notice Error

error_reporting(1);

//retrieve email id entered by user and store in $eid. and so on for other values

$eid=$_POST['eid'];
$p=$_POST['pass'];
$m=$_POST['mob'];
$add=$_POST['add'];
$gen=$_POST['g'];
$hobb=$_POST['chlist'];
$h=implode(",",$hobb);
$img=$_FILES["file"]["name"];
$yy=$_POST['yy'];
$mm=$_POST['mm'];
$dd=$_POST['dd'];
$dob=$yy."-".$mm."-".$dd;
//checked whether user clicked on INSERT button

if(isset($_POST['ins']))
{
$sql="INSERT INTO stuinfo values('','$eid','$p','$m','$add','$gen','$h','$img','$dob')";

mysql_query($sql);
move_uploaded_file($_FILES["file"]["tmp_name"], "userDetails/" . $_FILES["file"]["name"]);
echo "data saved";
}

//checked whether user clicked on display button

if(isset($_POST['disp']))
{
$res=mysql_query("SELECT * FROM stuinfo");
echo "<table border='1'>";
echo "<tr><th>SutId</th><th>Email</th><th>Password</th><th>Mobile</th><th>Address</th><th>Gender</th>    </tr>"; 
while(list($a,$b,$c,$d,$e,$f)=mysql_fetch_array($res))
{

echo "<tr>";    echo "<td>".$a."</td>";

echo "<td>".$b."</td>";

echo "<td>".$c."</td>";

echo "<td>".$d."</td>";

echo "<td>".$e."</td>";

echo "<td>".$f."</td>";

echo "<td><a href='db.php?chk=$b'>Edit</a>    <a href='db.php?chkid=$a'>Delete</a></td>";

echo "</tr>";    

}

echo "</table>";
}
while(list($a,$b,$c,$d,$e,$f)=mysql_fetch_array($res))
{

echo "<tr>";    echo "<td>".$a."</td>";

echo "<td>".$b."</td>";

echo "<td>".$c."</td>";

echo "<td>".$d."</td>";

echo "<td>".$e."</td>";

echo "<td>".$f."</td>";

echo "<td><a href='db.php?chk=$b'>Edit</a>    <a href='db.php?chkid=$a'>Delete</a></td>";

echo "</tr>";    

}

echo "</table>";
}
$upd="update stuinfo set pass='$p',mobile='$m',address='$add' where email='$email'";

mysql_query($upd);

echo "updated";

}

if(isset($_GET['chk']))
{
$sql="SELECT * FROM stuinfo where email='$email'";

$res=mysql_query($sql);

list($a,$b,$c,$d,$e,$f)=mysql_fetch_array($res);

echo "<table border='1'>";

echo "<form method='post'>";

echo "<tr>";

echo "<td>Password</td>";
echo "<td><input type='password' name='p' value='$c' /></td></tr>";

echo "<tr>";

echo "<td>Mobile</td>";

echo "<td><input type='text' name='mob' value='$d' /></td></tr>";

echo "<tr>";

echo "<td>Address</td>";

echo "<td><textarea name='add'>$e</textarea></td></tr>";

echo "<tr>";

echo "<td colspan='2' align='center'><input type='submit' value='Update infor' name='upd' /></td></tr>";

echo "</form>";
echo "</table>";
}

?>
  $conn = new mysqli($servername, $username, $password, $databaseName);
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    //print $pass . "_" . $Password;

    $query =  "SELECT Username, Password FROM login1 WHERE Username='$Username' AND Password='$Password'";

    $result = mysqli_query($conn, $query);


    while ($row = mysql_fetch_assoc($result)) {


        $check_Username = $row['Username'];
        $check_Password = $row['Password'];
    }
    if ($un == $check_Username && $pw == $check_Password) {
        $message = "ok";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("Location: Doctors.php");
    } else {
        $message = "No";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("Location: Doctors.php");
    }
    ?>
    */
/*
include 'connection.php';
$servername="localhost";
$username="root";
$password="";
$dbname = "airport_management_sys";

$mysqli=new mysqli($servername,$username,$password,$dbname);
$un = $_POST['Username'];
$pw = $_POST['Password'];
$query =  "SELECT Username, Password FROM login1 WHERE Username='$un' AND Password='$pw'";
if($result = $mysqli->query($query)){
    while ($row = $result->fetch_assoc()) {


        $check_un = $row['Username'];
        $check_pw = $row['Password'];
    }
    if ($un == $check_un && $pw == $check_pw) {
        $message = "ok";
        echo "<script type='text/javascript'>alert('$message');</script>";
       // header("Location: Doctors.php");
    } else {
        $message = "No";
        echo "<script type='text/javascript'>alert('$message');</script>";
       // header("Location: Doctors.php");
    }
}*/
<?php 

 session_start();
 
 if(!isset($_SESSION['name'])) {
   
    header("location: login.php"); 
    }
 else {

?>

<?php include("header.php"); ?>

<?php

if(isset($_GET['insert_employee'])) {

?>   
 <div class="container-fluid" style="background-color:lavenderblush";>

          <h1 class="h1_index text-center">Employee Board</h1>
		   <br>
		    <a class="a_color" href="dashboard.php"><button type="button" class="btn btn-primary btn-lg">Dashboard</button></a>

        <a class="a_color" href="employee.php?view_employee=view_employee"><button type="button" class="btn btn-primary btn-lg">View Employee</button></a>


		   <br>
</div>		   
   <div class="col-sm-10" style="background-color:lavenderblush;">
     <h1>Enter Details of new employee.</h1>

<form  action="insertemployee.php" method="POST">

 <div class="form-group">
   <label for="formGroupExampleInput">Name:</label>
   <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="name">
 </div><!-- -->
 <div class="form-group">
   <label for="formGroupExampleInput">Gender:</label>
   <div class="radio">
      <label><input type="radio" name="gender" value="male" checked>Male</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="gender" value="female">Female</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="gender" value="other">Other</label>
    </div>
 </div>
 <div class="form-group">
   <label for="formGroupExampleInput2">Email:</label>
   <input type="text" name="email" class="form-control" id="formGroupExampleInput2" placeholder="name@example.com">
 </div>
 <div class="form-group">
   <label for="formGroupExampleInput2">Date of Birth:</label>
   <input type="text" name="dateofbirth" class="form-control" id="formGroupExampleInput2" placeholder="xx-xx-xxxx">
 </div>
 <div class="form-group">
   <label for="formGroupExampleInput2">Contact No:</label>
   <input type="text" name="contact" class="form-control" id="formGroupExampleInput2" placeholder="Contact Number">
 </div> 
 <div class="form-group">
   <label for="formGroupExampleInput2">Department:</label>
   <input type="text" name="department" class="form-control" id="formGroupExampleInput2" placeholder="CSE , IT...">
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
        <th>Emp_Id</th>
        <th>Name</th>
        <th>Gender</th>
		<th>Email</th>
		<th>Date of Birth</th>
		<th>Contact No</th>
		<th>Department</th>
		<th>Edit</th>
		<th>Delete</th>
      </tr>
    </thead>
    <tbody>
		

<?php


//make connection
$con = mysqli_connect('localhost','root','','attendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }
    
//select database


$sql="SELECT * FROM `employee_details` ";

$record = mysqli_query($con,$sql);


while($post=mysqli_fetch_assoc($record)) {
  
   ?>


      <tr>
        <td><?php echo $post['id']; ?></td>
        <td><?php echo $post['name']; ?></td>
        <td><?php echo $post['gender']; ?></td>
	    	<td><?php echo $post['email']; ?></td>
		    <td><?php echo $post['DOB']; ?></td>
		    <td><?php echo $post['contact_no']; ?></td>
		   <td><?php echo $post['department']; ?></td>
		    <td><a href="editemployee.php?edit=<?php echo $post['id']; ?>">edit</a></td>
		    <td><a href="deleteemployee.php?delete=<?php echo $post['id']; ?>">delete</a></td>
      </tr>
    
   
<?php } ?>    
     </tbody>
    </table>
   
  </div>
</div>

<?php } ?>    

<!-- details end -->

<?php } ?>
