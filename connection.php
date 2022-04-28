<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airport_management_sys";

$con = mysqli_connect($servername,$username,$password,$dbname);

if($con)
{
    echo "";
}
else
{
    echo "Connection Failed ".mysqli_connect_error();
}
?>