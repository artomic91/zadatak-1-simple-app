<?php
/***********************************************/
/**initial settings for the smarty tpl engines**/
/***********************************************/

require_once("smarty/libs/Smarty.class.php");
$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tmp';


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
  $articleID = $_GET['id'];
  $noArticles = "";

/***********************************************/
/** GET DATA OF SELECTED ARTICLE FROM DATABASE **/
/***********************************************/

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
                        WHERE articles.id = $articleID
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


/******************************************************/
/**** Send variables to our template dashboard.tpl ****/
/******************************************************/
$smarty->assign (
    'user',
    $user
);

$smarty->assign (
    'articleID',
    $articleID
);

$smarty->assign (
    'noArticles',
    $noArticles
);

$smarty->assign (
    'articleRows',
    $articleRows
);


$smarty->display('displayArticle.tpl');

?>