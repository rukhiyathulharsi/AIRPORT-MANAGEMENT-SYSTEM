<?php
session_start();
?>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
</head>
<body>
	<form method="post" action="server.php" >
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="">
		</div>
		<div class="input-group">
		<?php if ($update == true): ?>
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
<?php else: ?>
	<button class="btn" type="submit" name="save" >Save</button>
<?php endif ?>
		</div>
	</form>
</body>

    <?php  include('connection.php'); ?>
	<body>
	
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
<?php $results = mysqli_query($db, "SELECT * FROM info"); ?>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['address']; ?></td>
			<td>
				<a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>

<form>
    // ...
    <?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM info WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$address = $n['address'];
		}
	}
?>
<input type="hidden" name="id" value="<?php echo $id; ?>">

// modified form fields
<input type="text" name="name" value="<?php echo $name; ?>">
<input type="text" name="address" value="<?php echo $address; ?>">






loginpage  



/*


$con = new mysqli('localhost','root','','airport_management_sys');

if($con->connect_error){
    die("connection error");
}
else{
    echo "";
}

if(isset($_POST['login1'])) {
	
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    
    $encrypt = md5($user_password);
    
    $login1_query = "SELECT `Username`, `Password` FROM `login1` WHERE Username='$Username' AND Password='$Password'";
    
     $run = mysqli_query($con,$login1_query);
     
     if(mysqli_num_rows($run)>0) { 
          
          $_SESSION['Username'] = $Username;
          
          echo "<script>window.open('interface1.php','_self')</script>";
             }
     else
           {
         echo "<script>alert('Username or password is wrong')</script>";
          }  
  }
*/

 



/ Delete
$delete   =  $db->query("DELETE FROM Persons WHERE Id = :id", array("id"=>"1"));

// Update
$update   =  $db->query("UPDATE Persons SET firstname = :f WHERE Id = :id", array("f"=>"Jan","id"=>"32"));

// Insert
$insert   =  $db->query("INSERT INTO Persons(Firstname,Age) VALUES(:f,:age)", array("f"=>"Vivek","age"=>"20"));

// Do something with the data 
if($insert > 0 ) {
  return 'Succesfully created a new person !';
}



<?php
if(isset($_POST['Update']))
{
    $conn = mysqli_connect('localhost','root','','airport_management_sys');
    if($con ->connect_error){
        die("connection error");
    }
    else{
        echo "connected successful";
    }
}
$Update_Airport_code =$_GET['Update']

$Airport_code = $_POST["Airport_code"];
$Airport_name = $_POST["Airport_name"];
$City = $_POST["City"];
$State = $_POST["State"];

$sql1="UPDATE airport SET 
Airport_code='$Airport_code',
Airport_name='$Airport_name"
}
?>














<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM employee");
?>






if($result = $mysqli->query($query)){
    
    while($row=$result->fetch_assoc())
    {
    
        <tr>
        <td>".$row['Airport_code']."</td>
        <td> ".$row['Airport_Name']."</td>
        <td>".$row['City']."</td>
        <td>".$row['State']."</td>
        <td>

        <tr>
    }
    echo "</table>";
}
else{
    echo "0 results";
}
$mysqli->close();


/*$conn=mysql_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	die("Connection Failed".mysql_error());
}
else
	echo "Connection Successful<br>";
//selecting database
$dbcheck=mysql_select_db("airport_management_sys");

if(!$dbcheck)
{
	echo "Error selecting DB".mysql_error();
}
else echo "Database Selected<br>";

//Creating table
//$sql="Create table airport (Airport varchar(15) primary key, Airport_name varchar(40),City varchar(30),State varchar(40))";

//$check=mysql_query($sql,$conn);
//if(!$check)
	//echo "Error creating Table".mysql_error();
//else echo "Table created successfully";
/*$sql="Insert into airport values('DEL','Indira Gandhi Airport','New Delhi',Delhi)";
mysql_query($sql,$conn);

mysql_close($conn);
$sql = "select * from airport";
$result = mysql_query($sql,$conn);

while($row=mysql_fetch_array($result))
{
	echo $row['Airport_code']." ".$row['Airport_name']."".$row['City']."".$row['State']."<br>";
}
?> */
?>