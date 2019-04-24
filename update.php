<?php
session_start();
include('config/config.php');
$conn = mysqli_connect(SERVER, USER, PASS, DB);
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$id = $_GET["update"];
$sqlSelect = "SELECT * FROM articles WHERE id = $id";
$result = $conn->query($sqlSelect);
$articleRows = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $articleRows[] = $row;
    }
} else {
  $noArticle = "0 results";
}

$articleRows = json_encode($articleRows);
header('Content-Type: application/json');
echo $articleRows;

$conn->close();

?>