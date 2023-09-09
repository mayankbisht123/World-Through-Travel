<?php
$database = "kartik";
$server_name = "localhost";
$username = "root";
$pass = "";
$con = mysqli_connect($server_name, $username, $pass);
if (isset($_POST['submit'])) {
if (!$con) {
    echo "Error connecting to server<br>";
} else {
    echo "Server successfully connected<br>";
    echo "Connecting to the database<br>";
    
    if (!mysqli_select_db($con, $database)) {
        echo "Could not connect to the database<br>";
    } else {
        echo "Database successfully connected<br>";
        echo "Adding new Data into table<br>";
        echo "";
        $id=$_POST["id"];
        $name=$_POST["name"];
        $address=$_POST["address"];
        $sql = "INSERT into example ( id ,name1,address1 ) values ($id,'$name','$address');";

        if (!mysqli_query($con, $sql)) {
            echo "Could not update the database <br>";
        } else {
            echo "Database updated successfully<br>";
        }
    }
}
}
?>