<?php
//database record

//var_dump($_POST);

$message = $_POST["comments"];

//database connection

$servername = "localhost";
$password = '';
$username = "root";
$dbname = "cr";
// Create connection
$conn = new mysqli("localhost", "root", '', "cr");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  $query = "INSERT INTO comments (message) VALUES ('$message')";
  $queryResult = mysqli_query($conn, $query);
  // $sql conditions which will be displayed after clicking the save button
  if ($queryResult == true) {
    echo "Records saved";
  } else {
    echo "Records not saved ";
  }
}
?>