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

 $id = $_POST['delete_id'];

 $sql = "DELETE FROM articles WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Successfully deleted article";
} else {
    echo "Error deleting record: " . $conn->error;
}

 mysqli_close($conn);
 
?>