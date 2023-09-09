<?php
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "kartik";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $destination = $_POST['destination'];
  $state = $_POST['state'];
  $age = $_POST['age'];
  $mobile = $_POST['mobile'];
  $budget = $_POST['budget'];
  $duration = $_POST['duration'];

  $sql = "INSERT INTO book (name, destination, state, age, mobile, budget, duration) VALUES
  ('$name', '$destination', '$state', '$age', '$mobile', '$budget', '$duration')";

  if ($conn->query($sql) === true) {
    $jsCode = <<<EOT
    <script>
      setTimeout(function() {
        alert("Data saved successfully!");
        window.location.href = "home.html";
      }, 2000);
    </script>
EOT;
echo "<h1>Data saved successfully!</h1>".$jsCode;
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
}
?>

