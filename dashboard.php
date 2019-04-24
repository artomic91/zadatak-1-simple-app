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
  $userID = $_SESSION['userID'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Dashboard</title>

</head>
<body onload="paginate()">
<nav class="navbar navbar-expand-sm navbar-dark bg-dark p-2">
  <div class="container">
    <img src="logo.png" alt="logo" class="navbar-brand" height="50">
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarCollapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item mr-3">
          <div class="nav-link">
            <i class="fas fa-user"></i> Welcome <?php echo $user; ?>
          </div>
        </li>
        <li class="nav-item">
          <a href="logout.php" class="nav-link">
            <i class="fas fa-user-times"></i> Logout
          </a>
        </li>
      </ul>
    </div>
    </div>
  </div>
</nav>


<!-- ACTIONS -->

  <div class="d-flex justify-content-center row-h1">
      <div class="item-h1 mx-3 mt-3">
        <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addArticleModal">
          <i class="fas fa-plus"></i>Create Article
        </a>
      </div>
      <div class="item-h1 mx-3 mt-3">
        <a href="profile.php?username=<?php echo $user; ?>&id=<?php echo $userID; ?>" class="btn btn-success btn-block">
          <i class="far fa-folder-open"></i>My Articles
        </a>
      </div>
  </div>

  <div id="message" class="w-50 mx-auto text-center"></div>
<!-- ARTICLES -->

<section id="articles" class="m-2">

</section>

<!-- PAGINATION -->
<nav>
  <ul class="pagination justify-content-center">
      <li class="page-item">
          <a  id="previous-page" class="page-link" href="javascript:void(0)">
              <span>&laquo;</span>
          </a>
      </li>
  </ul>
</nav>

<!-- FOOTER -->

<footer class="bg-dark text-white pt-3">
  <div class="container">
    <div class="d-flex justify-content-center align-items-center">
        <p class="lead text-center">
          Copyright &copy; <span id="year"></span>
          Artomic
        </p>
    </div>
  </div>
</footer>



<!-- ADD ARTICLE MODAL -->
<div class="modal fade" id="addArticleModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Add Article</h5>
        <button class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="my-form" action="addArticle.php" method="post" enctype="multipart/form-data" autocomplete="off">
          <div class="form-group">
            <label for="heading">Heading</label>
            <input type="text" name="heading" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="image">Upload Image</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="image" id="image" required>
              <label for="image" class="custom-file-label">Choose File</label>
            </div>
            <small class="form-text text-muted">Max size 3mb</small>
          </div>
          <div class="form-group">
            <label for="textbody">Body</label>
            <textarea name="textbody" class="form-control textbody" value="" required></textarea>
          </div>
          <div class="modal-footer">
                <input type="submit" name="submit" value="Save">
          </div>
        </form>
      </div>
    </div>
  </div>  
</div>

  
  <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="list_&_add_requests.js"></script>
 <script src="pagination.js"></script> 
  

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


  <script>
    $('#year').text(new Date().getFullYear());

  </script>

</body>
</html>