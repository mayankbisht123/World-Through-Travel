<?php
$database = "kartik";
$server_name = "localhost";
$username = "root";
$pass = "";
$con = mysqli_connect($server_name, $username, $pass);

if (isset($_POST['view_data'])) {
    if (!$con) {
        echo "Error connecting to server<br>";
    } else {
        echo "Server successfully connected<br>";
        echo "Connecting to the database<br>";
        
        if (!mysqli_select_db($con, $database)) {
            echo "Could not connect to the database<br>";
        } else {
            echo "Database successfully connected<br>";
            echo "Fetching From table<br>";
            echo "";

            $sql = "SELECT * FROM example;";
            $result = mysqli_query($con, $sql);
            $num = mysqli_num_rows($result);
            echo "Number of rows fetched from table: " . $num . "<br>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<pre>";
                print_r($row);
                echo "</pre>";
            }
            while($row = mysqli_fetch_assoc($result))
            {
                echo "<pre>";
                    print_r($row);
               echo" </pre>";
            }
        }
    }
}
?>
