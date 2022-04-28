<?php
session_start();
?>
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

    <h1>Edit Flight</h1>
   
    <input type="text" name="Flight_number" placeholder="Flight_number"> <br>
   
    <input type="text" name="Flight_Name" placeholder="Flight_Name"> <br>
    
    <input type="text" name="Src_Dest" placeholder="Src-Dest"> <br>
   
    <input type="text" name="Arrival_time" placeholder="Arrival_time"><br> 
    
    <input type="text" name="Depature_time" placeholder="Departure_time"> <br>
   
    <input type="text" name="Airport_code" placeholder="Airport_code"> <br><br>
    <button type="submit" class="button" ><b>Insert</b>
    
    </button>
 <button type="submit" class="button"  ><b>delete</b> </button>
 <button type="submit" class="button"  ><b>update</b> </button>
 <button type="submit" formaction="interface4.php" value="back"> <b>back</b></button>

</form> 
</body> 
</html> 
