<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Profile</title>
</head>
<body onload="paginate()">
<!-- HEADER NAV-BAR -->
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
              <i class="fas fa-user"></i> Welcome {$user}
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
  </nav>

<div class="d-flex justify-content-around align-items-center mt-3">
    <h1 class="display-4 border-bottom">Author: {$selectedUser}</h1>
    <a href="dashboard.php" class="nav-link border-bottom"><i class="fas fa-arrow-left"></i>Back to Dashboard</a>
</div>

<div id="message" class="w-50 mx-auto mt-2"></div>

<!-- ARTICLES -->

<section id="articles" class="m-3">
    {section name=i loop=$articleRows}
    <div class="col-md-3 card-item" id="delete{$articleRows[i].id}">
     <a href="displayArticle.php?id={$articleRows[i].id}" class="card-clickable"  data-toggle="tooltip" data-placement="top" title="Read more"> 
        <div class="card my-3">
          <img class="card-img-top img-fluid articleImg" src="uploads/{$articleRows[i].articleimage}" alt="article image">
          <div class="card-body">
              <div class="card-text pre-heading mb-3">
                <span><i class="fas fa-user"></i>{$articleRows[i].username}</span>  
                  <small class="text-muted">{$articleRows[i].articledate}</small>
              </div>
              <h4 class="card-title">{$articleRows[i].heading}</h4>
              <div class="articletext">
                  {$articleRows[i].body}
              </div>
          </div>
       </a> 
          <div class="article-actions">
              {if $selectedUser == $user}
              <div id="update{$articleRows[i].id}" class="btn btn-outline-success" data-toggle="modal" data-target="#addArticleModal" onclick="popupUpdate({$articleRows[i].id})"><i class="fas fa-edit"></i>Update</div>
              <button class="btn btn-outline-danger" onclick="deleteAjax({$articleRows[i].id})"><i class="fas fa-trash-alt"></i>Delete</button>
              {/if}
            </div>
        </div>
    </div>
    {/section}
</section>

<!-- PAGINATION -->
<nav>
  <ul class="pagination justify-content-center">
      <li class="page-item">
          <a id="previous-page" class="page-link" href="javascript:void(0)">
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

<!-- MODAL POPUP UPDATE -->

<div class="modal fade popupUpdate" id="addArticleModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title">Update article</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form action="insertUpdates.php" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="form-group">
              <label for="heading">Heading</label>
              <input type="text" name="heading" class="form-control heading" value="">
            </div>
              
            <div class="image-group">
              <label for="image">Change Image</label>
              <img id="edit-img" src=NULL alt="thumbnail"/>
              <input type="file" name="image" id="updateImage" value="">
              <small class="form-text text-muted">Max size 3mb</small>
            </div>

            <input type="hidden" name="update" id="update" value="">
            <div class="form-group">
              <label for="textbody">Body</label>
              <textarea name="textbody" class="form-control textbody" value=""></textarea>
            </div>
            <div class="modal-footer">
                <input type="submit" name="submit" value="Save">
            </div>
          </form>

        </div>
      </div>
    </div>  
  </div>

  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>


  <script src="update_&_delete_requests.js"></script>
  <script src="pagination.js"></script>

  <script>
    $('#year').text(new Date().getFullYear());
  </script>

</body>
</html>
