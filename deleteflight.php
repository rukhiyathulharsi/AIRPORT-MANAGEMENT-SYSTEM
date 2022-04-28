


<?php




$con = mysqli_connect('localhost','root','','airport_management_sys');

if ($con->connect_error){
    die("connection error");
}
else{
    echo "connected successful";
}

date_default_timezone_set('Asia/Kolkata');
       $date = date("Y-m-d");
       $ThisDate = date("d-m-Y", strtotime($date));


// sql to delete a record

$delete_id = @$_GET['delete'];

$sql = "DELETE FROM `flight` WHERE  flight_number='$delete_id'";


if ($con->query($sql) === TRUE) {
?>
<script>
   if(!alert('Flight detail  deleted successfully.')){window.location = "interface4.php?interface4=interface4";}

</script>
<?php
   } 
else {
?>
 <script>
      if(!alert('Can not delete flight detail.Some error occured')){window.location = "interface4.php?interface4=interface4";}

 </script>
<?php
}

$con->close();

      
?>