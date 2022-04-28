<?php
session_start();
?>

if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$address = $_POST['address'];

	mysqli_query($db, "UPDATE info SET name='$name', address='$address' WHERE id=$id");
	$_SESSION['message'] = "Address updated!"; 
	header('location: index.php');
}
<?php
 include 'connection.php';
 $servername="localhost";
 $username="root";
 $password="";
 $dbname = "airport_management_sys";
 
 $mysqli=new mysqli($servername,$username,$password,$dbname);

$sql = "INSERT INTO AIRPORT (Airport_code,Airport_name,City,State) values ( $row['Airport_code']." ".$row['Airport_name']." ".$row['City']."".$row['State'])"
$result = mysql_query($sql,$conn);</button>
?>
 <?php
 include 'connection.php';
 $servername="localhost";
 $username="root";

 $password="";
 $dbname = "airport_management_sys";
 
 $mysqli=new mysqli($servername,$username,$password,$dbname);

$sql = "update AIRPORT set  Airport_code=$row['Airport_code']." ".$row['Airport_name']." ".$row['City']."".$row['State'])"
$result = mysql_query($sql,$conn);</button>
?>









body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    
    background-size: 100%;
}
.box{ 
   
    position: absolute; 
    top:50%;
    left: 50%; 
    transform: translate(-50%,-50%); 
    
    text-align: center; 
}
 h1{
    color:black; 
    text-transform: uppercase;
    position: relative;
    top: auto;
    left: auto; 
    
    font-weight: 500;

} 

 input[type="text"]{
    border: 0; 
    background: none; 
    display: block;
    margin: 20px auto;
    text-align: center; 
    border: 2px solid palevioletred;
    padding: 14px 40px; 
    position: relative; 
    top: 200%;
    left: 10%; 
    width: 150px;
    outline: none;
    color:black;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
}
 input[type="text"]:hover{
    background: palevioletred;
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
button [type="submit"]:hover{
    background: palevioletred;
}
