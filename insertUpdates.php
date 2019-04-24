<?php
session_start();
include('config/config.php');
$conn = mysqli_connect(SERVER, USER, PASS, DB);
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$id = $_POST["update"];
$image = '';

$editImageStr = '';

/************************************************/
/*** INSERTING UPDATED INPUT FIELDS TO DATABASE **/
/*************************************************/

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
    echo "Success";
    $image = $_FILES['image']['name'];

    $editImageStr = "articleimage = '".$image."', ";

  }

};

    $heading = $_POST["heading"];
    $body = $_POST["textbody"];
    $image = $_POST["image"];
    $date = date("d.m.Y.");

    $sqlUpdate = "UPDATE articles
                    SET heading = '$heading', body = '$body', ".$editImageStr." articledate = '$date'
                    WHERE id = '$id'";

$result = $conn->query($sqlUpdate);

if($result === true) {
  $successMessage = 'Successfully updated article.';
} else {
  $successMessage = 'Connection error: '.$conn->error;
}

$conn->close();
    header('Location: displayArticle.php?id='.$id);

?>