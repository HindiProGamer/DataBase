<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ustanova";

$ispit = filter_input(INPUT_POST,'ispit');
$ocjena = filter_input(INPUT_POST,'ocjena');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO kolegij (ispit, ocjena)
VALUES ('$ispit', '$ocjena')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<body>
<ul>
        <li><a href="index2.html" >Unos</a></li>
        <li><a href="select_file.php" >Citaj</a></li>
    </ul>
</body>
</html>