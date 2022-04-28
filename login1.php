<?php
session_start();
?>
<html lang="en" dir="Itr"> 
<head> 
<meta http-equiv="Content-Type" content="text/html" charset="utf-8"> 
<title>Animated Login Form</title> 
<link rel="stylesheet" href="style2.css"> 
</head> 
</html> 

<form class="box"  method="post">
    <u><h1>Admin Login</h1></u>
    <b>Username</b>
    <input type="text" name="Username" placeholder="Username" required > 
    <b>Password</b>
    <input type="password" name="Password" placeholder="Password"  required> 
    
    <button type="submit"  name="submit" ><b>Login</b></button>


   

</form> 
</body> 
</html> 
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "airport_management_sys";
/*
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
$con = mysqli_connect('localhost','root','','airport_management_sys');

if($con->connect_error){
    die("connection error");
}
else{
    echo "success";
}

if(isset($_POST['submit'])) {
	
    $User_name = $_POST['Username'];
    $User_password = $_POST['Password'];
    
   // $encrypt = md5($user_password);
    
    $login1_query = "SELECT * FROM `login1` WHERE Username='$User_name' AND Password='$User_password'";
    
     $run = mysqli_query($con,$login1_query);
     
     if(mysqli_num_rows($run)>0) { 
          
          $_SESSION['User_name'] = $Username;
          
          echo "<script>window.open('interface1.php','_self')</script>";
             }
     else
           {
         echo "<script>alert('Username or password is wrong')</script>";
          }  
  }
?>









 
