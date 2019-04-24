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

/*************************************/
/**** upload image in article ******/
/***********************************/

if(isset($_FILES['image'])){
  $errors = array();
  $file_name = $_FILES['image']['name'];
  $file_size = $_FILES['image']['size'];
  $file_tmp = $_FILES['image']['tmp_name'];
  $file_type = $_FILES['image']['type'];
  $tmp = explode('.',$_FILES['image']['name']);
  $file_ext = end($tmp);
  $extensions = array("jpeg","jpg","png","gif");
  $uploads_dir ='uploads/';

  if(in_array($file_ext,$extensions)=== false){
    $errors[]="Extension not allowed, please chose a JPEG, JPG, PNG or GIF file.";
  }

  if($file_size > 3145728){
    $errors[]='File size must be excately 3 MB';
  }

  if(empty($errors)== true){
    $img_dir = $uploads_dir.$file_name;

    move_uploaded_file($file_tmp,$uploads_dir.$file_name);
    echo "Successfully uploaded image! ";
  }else{
    print_r($errors);
  }
};

/*************************************/
/******** INSERT ARTICLE INTO DB *****/
/*************************************/

$userID = '';

if($_SESSION['userID']){
    $userID=$_SESSION['userID'];
  }

$username = '';


$heading = $_POST["heading"];
$body = $_POST["textbody"];
$targetImg = $_FILES['image']['name'];
$date = date("d.m.Y.");

$sqlInsert = "INSERT INTO articles(id, heading, body, articleimage, uid, articledate) VALUES (null,'".$heading."','".$body."','".$targetImg."','".$userID."', '".$date."')";
$resultInsert = $conn->query($sqlInsert);

if($resultInsert === true) {
  echo " Successfully added new article.";
} else {
  echo 'Connection error: '.$conn->error;
}


$conn->close();

?>