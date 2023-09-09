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
        echo "Creating new table<br>";
        echo "";

        $sql = "CREATE TABLE example (
            id INT PRIMARY KEY,
            name1 VARCHAR(30),
            address1 VARCHAR(30)
        );";

        if (!mysqli_query($con, $sql)) {
            echo "Could not create table<br>";
        } else {
            echo "Created table successfully<br>";
        }
    }
}
}
?>
