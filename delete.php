<?php
$database = "kartik";
$server_name = "localhost";
$username = "root";
$pass = "";
$con = mysqli_connect($server_name, $username, $pass);
$db=mysqli_select_db($con,$database);
$sql="Drop table example";
if(mysqli_query($con,$sql))
{
    echo "Table deleted successfully";
}
else
{
    echo "Table cannot be dropped";
}
?>