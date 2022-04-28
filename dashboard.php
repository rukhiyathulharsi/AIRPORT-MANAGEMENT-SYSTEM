<?php 

 session_start();
 
 if(!isset($_SESSION['name'])) {
   
    header("location: d.php"); 
    }
 else {

?>

<?php include ("header.php") ?>

<div class="col-sm-12 jumbo_user">
   <br>


 <h1 class="text-center">Dashboard</h1>

<br>

   <a class="a_color" href="logout.php"><button type="button" class="btn btn-primary btn-lg">logout</button></a>

   <a class="a_color" href="interface2.php"><button type="button" class="btn btn-primary btn-lg">Airprt Details</button></a>
   
   <a class="a_color" href="interface3.php"><button type="button" class="btn btn-primary btn-lg">Employee Details</button></a>
     
   <a class="a_color" href="interface4.php"><button type="button" class="btn btn-primary btn-lg">Flight Details</button></a>
   
   <a class="a_color" href="employee.php?insert_employee=insert_employee"><button type="button" class="btn btn-primary btn-lg">Insert New Employee</button></a>
   
   <a class="a_color" href="insertadmin.php"><button type="button" class="btn btn-primary btn-lg">Insert New Admin</button></a>
      
   <a class="a_color" href="employee.php?view_employee=view_employee"><button type="button" class="btn btn-primary btn-lg">View Employee Details</button></a>
   
   <a class="a_color" href="interface5.php"><button type="button" class="btn btn-primary btn-lg">Passenger Details</button></a>

</div>
  

<?php } ?>