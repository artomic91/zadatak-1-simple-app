<?php
/***********************************************/
/**initial settings for the smarty tpl engines**/
/***********************************************/

require_once("smarty/libs/Smarty.class.php");
$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tmp';
//initial variable definition
$wrongPassword = "";
//end initial settings

/*****************************************/
/**database connection and session start**/
/*****************************************/

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
  $userID = $_SESSION['userID'];
  $selectedUser = $_GET['username'];
  $selectedUserID = $_GET['id'];



  /***************************/
  /**Give me posts and users**/
  /***************************/
  $noArticles = "";
  
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
                WHERE articles.uid = $selectedUserID 
                ORDER BY articles.id DESC";

  
$result = $conn->query($sqlSelect);
$articleRows = [];
$articleID = "";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $articleRows[] = $row;
        $articleID = $row['id'];
    }
} else {
    $noArticles = "0 results";
}

$conn->close();

/******************************************************/
/**Send those variables to our template dashboard.tpl**/
/******************************************************/

    $smarty->assign (
        'user',
        $user
    );

    $smarty->assign (
        'userID',
        $userID
    );

    $smarty->assign (
        'selectedUser',
        $selectedUser
    );

    $smarty->assign (
        'selectedUserID',
       $selectedUserID
    );

    $smarty->assign (
        'articleID',
       $articleID
    );

    $smarty->assign (
        'noArticles',
        $noArticles
    );

    /*End send request*/

    $smarty->assign (
        'articleRows',
        $articleRows
    );

    $smarty->display('profile.tpl');
?>
