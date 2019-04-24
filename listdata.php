<?php

session_start();
include("config/config.php");
if(empty($_SESSION['username'])) {
        header('Location: index.php');
 }
$conn = new mysqli(SERVER, USER, PASS, DB);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

  $user = $_SESSION['username'];

  $sqlSelect = "SELECT articles.id,
                        articles.heading,
                        articles.body,
                        articles.uid,
                        articles.articleimage,
                        articles.articledate,
                        users.userID,
                        users.username
                        FROM articles INNER JOIN
                        users ON articles.uid = users.userID
                        ORDER BY articles.id DESC";

$result = $conn->query($sqlSelect);
$articleRows = [];

if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {
        $articleRows[] = $row;
    }
} else {
    $noArticles = "0 results";
}
$conn->close();

echo json_encode($articleRows);

?>