<?php

session_start();
include("config/config.php");

//defining variables

$username = !empty($_POST['username']);
$password = !empty($_POST['password']);


//if the fields are filled in connect to db

if($username && $password) {
    $db = mysqli_connect(SERVER, USER, PASS, DB);
    
    mysqli_set_charset($db, "utf8");
    
    $sql = sprintf("SELECT * FROM users WHERE username='%s'",
        mysqli_real_escape_string($db, $_POST['username'])          
    );
    
    
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_assoc($result);
    
    if($row) {
        $pass = $row['password'];
        
        if($_POST['password'] == $pass) {
            $message = 'Login successful.';
            
            $_SESSION['username'] = $row['username'];
            $_SESSION['userID'] = $row['userID'];
 
            header('Location: dashboard.php');
        } else {
            $message = "Wrong password";
            header("Location: index.php?message=$message");
        }
    } else {
        $message = "Wrong data";
            header("Location: index.php?message=$message");
        
    }
    mysqli_close($db);

} else {
    $message = "Please fill in all required fields";
        header("Location: index.php?message=$message");
   
}

?>