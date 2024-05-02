<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ustanova";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT  ispit, ocjena FROM kolegij";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "  Ispit: " . $row["ispit"]. "<br> Ocjena: " . $row["ocjena"]. "<br>";
  }
} else {
  echo "0 results";
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